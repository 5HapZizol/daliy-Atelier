<?php
include '../server.php'; // server.php 파일 경로를 적절하게 지정합니다.

if (isset($_POST['A_user_id'])) {
    $A_user_id = $_POST['A_user_id'];
    // 중복 확인을 위한 SQL 쿼리
    $checkUserSQL = "SELECT Userid FROM user WHERE Userid = '$A_user_id'";
    $checkUserResult = mysqli_query($conn, $checkUserSQL);

    if (mysqli_num_rows($checkUserResult) > 0) {
        // 중복된 아이디가 존재
        echo "duplicate";
    } else {
        // 중복된 아이디가 없음
        echo "available";
    }
} else {
    // 아이디가 전달되지 않은 경우
    echo "error";
}
?>
