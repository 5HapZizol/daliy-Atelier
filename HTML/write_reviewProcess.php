<?php
  session_start();
?>

<?php 
    include '../server.php'; 
    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Art WHERE artid = '{$_GET['aid']}'";
    $result = mysqli_query($conn, $sql);

    $user_id = $_SESSION['user'];
    $review_id = uniqid("review_", true);

    $review_Star = $_POST['review_Star'];
    $review_CoInput = $_POST['review_CoInput'];
    $review_date = date('Y-m-d H:i:s');


    $sql = "INSERT INTO review (review_id, artId, Userid, Review_descript, Review_number, star_ratings)
        VALUES ('{$review_id}', '{$_GET['aid']}', '{$user_id}', '{$review_CoInput}', '{$review_date}', '{$review_Star}')";


    $result = mysqli_query($conn, $sql);
    
?>

<script>
    alert("문의가 등록되었습니다.");
    window.location.href = "my_review.php";
</script>