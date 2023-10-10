<?php
function uploadedFile($uploadUrl, $fileName) {
    return iconv("utf-8", "CP949", $uploadUrl.basename2($fileName));
}

function basename2($filename) {
    return preg_replace( '/^.+[\\\\\\/]/', '', $filename);
}

session_start();
include '../server.php'; 

//이미지 고유 아이디 난수 생성
$img_id = uniqid("image_", true);

//이미지 파일 저장
$tmpfile = $_FILES['input_image']['tmp_name'];
$o_name = $_FILES['input_image']['name'];
$filename = iconv("UTF-8", "EUC-KR", $_FILES['input_image']['name']);
$folder = "../img/auction/".$filename; //파일경로
move_uploaded_file($tmpfile, uploadedFile($folder, $o_name));


//이미지 db 업로드
$sql = "
        INSERT INTO IMAGE(
           art_img_id, img_name, img_path)
        VALUES(
            '{$img_id}', '{$filename}', '{$folder}'
        )";

//sql문
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) { //오류 여부
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
}

//작품 고유 아이디 난수 생성
$art_id = uniqid("art_", true);

//기본 시간대 설정
date_default_timezone_set('Asia/Seoul');

//날짜 입력을 위한 형식 변환
$bid_start_time = date("Y-m-d H:i:s", strtotime($_POST['start_d']));
$closing_time = date("Y-m-d H:i:s", strtotime($_POST['end_d']));

$sql = "SELECT artist_code FROM artist";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_array($result);
    $artist_code = $row['artist_code'];
} else {
    // 작가 코드를 가져오지 못한 경우에 대한 오류 처리
    echo "작가 코드를 가져오는 데 문제가 발생했습니다.";
}

//작품 db 업로드
$sql = "
        INSERT INTO ART(
            artid, artist_code, art_img_id, art_type, name,
            material, descript, start_price, current_price, registration_date,
            bid_start_time, closing_time)
        VALUES(
            '{$art_id}', '{$artist_code}', '{$img_id}', '{$_POST['art_type']}','{$_POST['Upname']}',
            '{$_POST['material']}', '{$_POST['info']}', '{$_POST['price']}', '{$_POST['price']}', NOW(),
            '{$bid_start_time}', '{$closing_time}'
)";

//sql문
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) { //오류 여부
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
    ?>
    <script>
        alert("업로드가 완료되었습니다");
        location.href = "main.php";
    </script>
<?php
}
?>