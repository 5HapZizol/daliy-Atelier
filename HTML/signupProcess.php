<?php
    include '../server.php'; 
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // 이후 작업 수행
    } else {
        // "password" 키가 존재하지 않는 경우 처리할 코드
        echo "비밀번호를 찾을 수 없습니다.";
    }
    //비밀번호 해쉬 암호화
    //echo $hashedPassword;

    $user_id = $_POST['user_id']?? '';       // 일반 아이디
    $A_user_id = $_POST['A_user_id']?? '';   // 작가 아이디

    $nickname = $_POST['nickname']?? '';             // 일반 닉네임
    $auother_nick = $_POST['auother_nick']?? '';     // 작가 활동명

    $name = $_POST['name']?? '';                     // 일반 실명
    $user_name = $_POST['user_name']?? '';            // 작가 실명

    $tel = $_POST['tel']?? '';                     // 일반 핸폰
    $user_phone = $_POST['user_phone']?? '';       // 작가 핸폰

    $email = $_POST['email']?? '';                 // 일반 이메일
    $user_email = $_POST['user_email']?? '';       // 작가 이메일


    $user_homepage = $_POST['user_homepage']?? '';
    $sns_id = $_POST['sns_id']?? '';

    $User_status = $_POST['User_status']?? '';

    if ($User_status == 1) {
        // 작가 회원 가입 처리
        $reserve = (int)0;
        
        if (empty($A_user_id) || empty($user_name) || empty($user_phone) || empty($user_email)) {
            echo "<script>alert('필수 입력란을 모두 채워주세요.');</script>";
            echo "<script>window.location.href = 'Member_Auother_register.php';</script>";
        } else {
            $artist_code = uniqid("artist_", true);
            $sql = "INSERT INTO user (Userid, password, name, nickname, phone_number, email, join_date, User_status, reserve)
                    VALUES('{$A_user_id}', '{$hashedPassword}', '{$user_name}', '{$auother_nick}', '{$user_phone}', '{$user_email}', NOW(), '1', $reserve
                    )"; // SQL 문
                    echo "SQL Query: " . $sql;
            $result = mysqli_query($conn, $sql);
        
            $sql = "INSERT INTO artist (artist_code, Userid, artist_name, artist_intro, homepage, artist_sns)
                    VALUES('{$artist_code}', '{$A_user_id}', '{$user_name}', '{}', '{$user_homepage}', '{$sns_id}')";
            $result = mysqli_query($conn, $sql);
        
            if ($result === false) { // 에러 여부 확인
                echo "저장하는 데 문제가 발생했습니다. 관리자에게 문의하십시오.";
                echo mysqli_error($conn);
            } else {
            ?>
            <script>
                alert("회원 가입이 완료되었습니다");
                location.href = "../index.php";
            </script>
            <?php
            }
        }
    } else if ($User_status == 0) {
        // 일반 회원 가입 처리
        if (empty($user_id) || empty($name) || empty($tel) || empty($email)) {
            echo "<script>alert('필수 입력란을 모두 채워주세요.');</script>";
            echo "<script>window.location.href = 'Member_register.php';</script>";
        } else {
            // 일반 회원 가입 처리
            $reserve = (int)0;
            
            $sql = "INSERT INTO user (Userid, password, name, nickname, phone_number, email, join_date, User_status, reserve)
            VALUES('{$user_id}', '{$hashedPassword}', '{$name}', '{$nickname}', '{$tel}', '{$email}', NOW(), '0', $reserve
            )"; // SQL 문
            $result = mysqli_query($conn, $sql);

            if ($result === false) { // 에러 여부 확인
                echo "저장하는 데 문제가 발생했습니다. 관리자에게 문의하십시오.";
                echo mysqli_error($conn);
            } else {
            ?>
            <script>
                alert("회원 가입이 완료되었습니다");
                location.href = "../index.php";
            </script>
            <?php
            }
        }
    }
    