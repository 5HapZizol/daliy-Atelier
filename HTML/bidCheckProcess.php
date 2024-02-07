<?php
include $_SERVER["DOCUMENT_ROOT"].'\server.php';

// 종료 시간이 지난 작품을 찾습니다.
$sql_select = "SELECT * FROM art WHERE closing_time < NOW()";
$result_select = mysqli_query($conn, $sql_select);

if ($result_select === false) { // 오류인지 확인합니다.
    echo "작품을 찾는 중 문제가 발생했습니다. 관리자에게 문의하세요.";
    echo mysqli_error($conn);
} else {
    while ($row = mysqli_fetch_array($result_select)) {
        // 작품 상태를 변경합니다.
        $artId = $row['artId'];
        $sql_update = "UPDATE art SET art_status = 1 WHERE artId = '{$artId}'";
        $result_update = mysqli_query($conn, $sql_update);

        if ($result_update === false) { // 오류인지 확인합니다.
            echo "작품 상태를 업데이트하는 중 문제가 발생했습니다. 관리자에게 문의하세요.";
            echo mysqli_error($conn);
        }
    }
}
?>