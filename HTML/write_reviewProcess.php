<?php
session_start();
?>

<?php 
include '../server.php'; 
if (!$conn) {
    die("데이터베이스 연결 오류: " . mysqli_connect_error());
}

$user_id = $_SESSION['user'];
$art_id = $_GET['aid'];

// 이전 리뷰 내용 및 별점 가져오기
$sql_previous_review = "SELECT * FROM review WHERE artId = '$art_id' AND Userid = '$user_id'";
$result_previous_review = mysqli_query($conn, $sql_previous_review);

if ($result_previous_review && mysqli_num_rows($result_previous_review) > 0) {
    // 이전 리뷰가 존재하는 경우 업데이트 진행
    $row_previous_review = mysqli_fetch_array($result_previous_review);
    $review_id = $row_previous_review['review_id'];
    
    $review_Star = $_POST['review_Star'];
    $review_CoInput = $_POST['review_CoInput'];
    $review_date = date('Y-m-d H:i:s');

    $sql_update_review = "UPDATE review SET
        Review_descript = '$review_CoInput',
        star_ratings = '$review_Star',
        Review_number = '$review_date'
        WHERE review_id = '$review_id'";

    $result_update_review = mysqli_query($conn, $sql_update_review);

    if ($result_update_review) {
        // 리뷰가 성공적으로 업데이트된 경우
        echo '<script>alert("리뷰가 수정되었습니다.");</script>';
        echo '<script>location.href = "my_review.php"; </script>'; // 페이지로 리다이렉션
        exit(); // 리다이렉션 이후 코드 실행 방지
    } else {
        // 업데이트에 실패한 경우
        echo '<script>alert("리뷰 수정 중 오류가 발생했습니다.");</script>';
        echo 'window.location.href = "write_review.php?aid=' . $art_id . '";'; // 페이지로 리다이렉션
        exit(); // 리다이렉션 이후 코드 실행 방지
    }
} else {
    // 이전 리뷰가 없는 경우에는 새 리뷰를 추가
    $review_id = uniqid("review_", true);

    $review_Star = $_POST['review_Star'];
    $review_CoInput = $_POST['review_CoInput'];
    $review_date = date('Y-m-d H:i:s');

    $sql_insert_review = "INSERT INTO review (review_id, artId, Userid, Review_descript, Review_number, star_ratings)
        VALUES ('$review_id', '$art_id', '$user_id', '$review_CoInput', '$review_date', '$review_Star')";

    $result_insert_review = mysqli_query($conn, $sql_insert_review);

    if ($result_insert_review) {
        // 리뷰가 성공적으로 추가된 경우
        echo '<script>alert("리뷰가 등록되었습니다.");</script>';
        echo '<script>location.href = "my_review.php"; </script>'; // 페이지로 리다이렉션
        exit(); // 리다이렉션 이후 코드 실행 방지
    } else {
        // 추가에 실패한 경우
        echo '<script>alert("리뷰 등록 중 오류가 발생했습니다.");</script>';
        echo 'window.location.href = "write_review.php?aid=' . $art_id . '";'; // 페이지로 리다이렉션
        exit(); // 리다이렉션 이후 코드 실행 방지
    }
}
?>
