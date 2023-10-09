<?php
    include '../server.php';
    
    if (isset($_POST['userId']) && isset($_POST['password']) && isset($_GET['type'])) {
        // 만약 POST 데이터와 'type' 매개변수가 설정되었다면
        $login_id = $_POST['userId'];
        $login_pw = $_POST['password'];
        $login_type = $_GET['type']; // 로그인 타입 파라미터 추가

        // DB 정보 가져오기
        $sql = "SELECT * FROM User WHERE Userid ='{$login_id}' AND User_status = '{$login_type}'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);
            
            if ($row) {
                // 사용자를 찾았을 때 비밀번호 검증 로직 실행
                $hashedPassword = $row['password'];
                $passwordResult = password_verify($login_pw, $hashedPassword);

                if ($passwordResult === true) {
                    // 로그인 성공
                    // 세션에 id 저장
                    session_start();
                    $_SESSION['user'] = $row['Userid'];
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
                        alert("로그인에 실패하였습니다.");
                    </script>
    <?php
                }
            } else {
                // 사용자를 찾지 못함
                echo "사용자를 찾을 수 없음";
            }
        } else {
            // 데이터베이스 쿼리 오류
            echo "쿼리 오류: " . mysqli_error($conn);
        }
    } else {
        // POST 데이터 또는 'type' 매개변수가 누락되거나 비어있을 때 처리
        echo "POST 데이터 또는 'type' 매개변수가 누락되었거나 비어있습니다.";
    }
?>
