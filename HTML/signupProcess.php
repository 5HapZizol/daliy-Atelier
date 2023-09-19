<?php
    $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //비밀번호 해쉬 암호화
    echo $hashedPassword;

    $User_status = $_POST['User_status'];

    $sql = "
        INSERT INTO user
        (Userid, password, name, nickname, phone_number, email, join_date, User_status)
        VALUES('{$_POST['Userid']}', '{$hashedPassword}', '{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['tel']}', '{$_POST['email']}', NOW(), '{$User_status}'
        )";    //sql문
    echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result === false) {    //오류 여부
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "main.php";
    </script>
<?php
}
?>