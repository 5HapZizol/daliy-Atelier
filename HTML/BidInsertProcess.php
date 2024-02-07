<?php
session_start();
include '../server.php'; 

// 세션값 받아오기
$user_id = $_SESSION['user'];

// 사용자의 reserve 값을 가져옵니다.
$sql = "SELECT reserve FROM user WHERE Userid = '{$user_id}'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);
$reserve = (int)$user['reserve'];

// 사용자가 입력한 입찰가를 가져옵니다.
$bid_price = (int)$_POST['bid_price'];

// reserve 값과 비교하여 사용자가 입력한 입찰가가 큰 경우 알림을 표시합니다.
if ($bid_price > $reserve) {
    ?>
    <script>
        alert("소자한 적립금이 부족합니다.");
        history.back();
    </script>
    <?php
} else {
    // 입찰 정보 업로드
    $bid_id = uniqid("bid_", true);
    $sql = "INSERT INTO bid
        (BIDID, USERID, ARTID, BID_PRICE, BID_TIME)
        VALUES('{$bid_id}', '{$user_id}', '{$_GET['aid']}', '{$bid_price}', NOW()
    )";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {    // 오류 여부
        echo "입찰 정보 업로드에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    }

    // 가격 변경
    $sql = "UPDATE art SET current_price = '{$bid_price}' where artid = '{$_GET['aid']}'";
    $result = mysqli_query($conn, $sql);
    if ($result === false) {    // 오류 여부
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
}
?>
