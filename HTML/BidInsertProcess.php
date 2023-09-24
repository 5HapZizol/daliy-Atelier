<?php
    session_start();
    include '../server.php'; 
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);

    //세션값 받아오기
    $user_id = $_SESSION['user'];
    
    //입찰 고유 아이디 난수 생성
    $bid_id = uniqid("bid_", true);
    //입찰가
    $bid_price = (int)$_POST['bid_price'];
    //입찰 정보 업로드
    $sql = "INSERT INTO BID
        (BIDID, USERID, ARTID, BID_PRICE, BID_TIME)
        VALUES('{$bid_id}', '{$user_id}', '{$_GET['aid']}', '{$bid_price}', NOW()
        )";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {    //오류 여부
        echo "입찰 정보 업로드에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    }
    $sql = "
       UPDATE art SET current_price = '{$bid_price}' where artid = '{$_GET['aid']}'";
       $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    if ($result === false) {    //오류 여부
        echo "가격 변경에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
    <script>
        alert("입찰이 완료되었습니다");
        history.back();
    </script>
<?php
    }
?>