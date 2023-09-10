<?php
    $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }

    $Q_Write_Id = generateUniqueId(4); // 중복되지 않는 4자리 값 얻기

    function generateUniqueId($desiredLength) {
        global $conn; // $conn 변수를 함수 내에서 사용 가능하게 함
    
        $uniqueId = ""; // 무작위로 생성된 값
    
        // 중복되지 않는 값을 얻을 때까지 반복
        while (true) {
            $uniqueId = generateRandomId($desiredLength); // 원하는 길이의 무작위 숫자 생성
    
            // 데이터베이스에서 중복 여부 확인
            $sql = "SELECT * FROM Q_write WHERE Q_Write_Id = '$uniqueId'";
            $result = mysqli_query($conn, $sql);
    
            if ($result->num_rows == 0) {
                // 중복되지 않는 값 발견
                break;
            }
        }
        return $uniqueId;
    }
    
    function generateRandomId($desiredLength) {
        // 원하는 길이의 무작위 숫자 생성
        return str_pad(mt_rand(0, pow(10, $desiredLength) - 1), $desiredLength, '0', STR_PAD_LEFT);
    }

    $Q_Write_Type_Select = $_POST['Q_Write_Type_Select'];
    $Q_Write_SvInput = $_POST['Q_Write_SvInput'];
    $Q_Write_CoInput = $_POST['Q_Write_CoInput'];

     //이미지 고유 아이디 난수 생성
    $img_id = uniqid("image_", true);

    //이미지 파일 저장
    $tmpfile =  $_FILES['Q_Write_File']['tmp_name'];
    $o_name = $_FILES['Q_Write_File']['name'];
    $filename = iconv("UTF-8", "EUC-KR",$_FILES['Q_Write_File']['name']);
    $folder = "../img/auction/".$filename; //파일경로
    move_uploaded_file($tmpfile,$folder);


    //이미지 db 업로드
    $sql = "
        INSERT INTO IMAGE(
           art_img_id, img_name, img_path)
        VALUES(
            '{$img_id}', '{$filename}', '{$folder}'
        )";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {    //오류 여부
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } 

    $sql = "
        INSERT INTO q_write (
            Q_write_id, art_img_id, Q_write_select, Q_write_title, Q_write_content) 
        VALUES (
            '{$Q_Write_Id}','{$img_id}',  '{$Q_Write_Type_Select}', '{$Q_Write_SvInput}', '{$Q_Write_CoInput}'
        )";
    $result = mysqli_query($conn, $sql);

?>

<script>
    alert("문의가 등록되었습니다.");
    window.location.href = "Q_list.php";
</script>
