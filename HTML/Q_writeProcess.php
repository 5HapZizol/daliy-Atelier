<?php
    session_start();
    include '../server.php'; 

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }

    // 마지막 번호 조회
    $sql = "SELECT MAX(Q_write_id) AS max_id FROM Q_write";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $lastId = $row['max_id'];

    // 마지막 번호가 없으면 1로 시작, 아니면 다음 번호 생성
    if ($lastId === null) {
        $nextId = 1;
    } else {
        $nextId = $lastId + 1;
    }

    // 4자리로 포맷팅 (0001, 0002 등)
    $Q_Write_Id = sprintf('%04d', $nextId);

    
    function generateRandomId($desiredLength) {
        // 원하는 길이의 무작위 숫자 생성
        return str_pad(mt_rand(0, pow(10, $desiredLength) - 1), $desiredLength, '0', STR_PAD_LEFT);
    }

    $Q_Write_Type_Select = $_POST['Q_Write_Type_Select'];
    $Q_Write_SvInput = $_POST['Q_Write_SvInput'];
    $Q_Write_CoInput = $_POST['Q_Write_CoInput'];
    $user_id = $_SESSION['user'];
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
            Q_write_id, art_img_id, Q_write_select, Q_write_title, Q_write_content, user_id) 
        VALUES (
            '{$Q_Write_Id}','{$img_id}',  '{$Q_Write_Type_Select}', '{$Q_Write_SvInput}', '{$Q_Write_CoInput}', '{$user_id}'
        )";
    $result = mysqli_query($conn, $sql);

?>

<script>
    alert("문의가 등록되었습니다.");
    window.location.href = "Q_list.php";
</script>
