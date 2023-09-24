<?php
    include '../server.php'; 
    session_start();
    $login_id = $_POST['userId'];
    $login_pw = $_POST['password'];

    // DB 정보 가져오기 
    $sql = "SELECT * FROM User WHERE userId ='{$login_id}'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    $hashedPassword = $row['password'];
    $row['Userid'];

    foreach($row as $key => $r){
        echo "{$key} : {$r} <br>";
    }
    
    // echo $row['id'];
    // DB 정보를 가져왔으니 
    // 비밀번호 검증 로직을 실행하면 된다. 
    $passwordResult = password_verify($login_pw, $hashedPassword);
    if ($passwordResult === true) {
        // 로그인 성공
        // 세션에 id 저장
        session_start();
        $_SESSION['user'] = $row['Userid'];
        print_r($_SESSION);
        echo $_SESSION['user'];
?>
    <script>
        alert("로그인에 성공하였습니다.");
        location.href = "main.php";
    </script>
<?php
    } else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
    </script>
<?php
    }
?>