<?php 
    $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }


    $review_Star = $_POST['review_Star'];
    $review_CoInput = $_POST['review_CoInput'];
    $review_date = date('Y-m-d H:i:s');


    $sql = "INSERT INTO review (review_id, artId, Userid, Review_descript, Review_number, star_ratings)
            VALUES '{}', '{}', '{}', '{$review_CoInput}', '{$review_date}', '{ $review_Star}')";

    $result = mysqli_query($conn, $sql);
    
?>