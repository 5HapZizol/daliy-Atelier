<?php
    include '../server.php'; 
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);
    session_start();
    $user_id = $_SESSION['user'];
    //var_dump($_POST['reserve']);일 경우 string형
    //var_dump((int)$_POST['reserve']); > (int)로 숫자형 변환
    $reserve = (int)$_POST['price'];
    $sql = "
       UPDATE user SET RESERVE = RESERVE + '{$reserve}' where userid = '$user_id'";
       $result = mysqli_query($conn, $sql);

    if ($result === false) {    //오류 여부
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
    <script>
        alert("충전이 완료되었습니다");
        location.href = "My_page_writer.php";
    </script>
<?php
}
?>