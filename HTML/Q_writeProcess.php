<?php
    $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }

    $Q_Write_Id = uniqid("Q_Write", true);
    $Q_Write_Type_Select = $_POST['Q_Write_Type_Select'];
    $Q_Write_SvInput = $_POST['Q_Write_SvInput'];
    $Q_Write_CoInput = $_POST['Q_Write_CoInput'];
    

    $sql = "INSERT INTO q_write (Q_write_id, Q_write_select, Q_write_title, Q_write_content) VALUES ('{$Q_Write_Id}', '{$Q_Write_Type_Select}', '{$Q_Write_SvInput}', '{$Q_Write_CoInput}')";
    $result = mysqli_query($conn, $sql);

        
?>
