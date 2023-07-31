<?php
    //include root 설정..??

<<<<<<< HEAD
    $conn = mysqli_connect("127.0.0.1", "root", "5hapzizol", "daily-artlier", "3306");
=======
    $conn = mysqli_connect("127.0.0.1", "root", "pma5hapzizol", "daily-art", "3306");
>>>>>>> da25bc3581d40c806ae62ca1f41d88e14888a8b6

    $ch_name = $_POST['name'];
    $ch_nickname = $_POST['nickname'];
    $ch_address = $_POST['address'];
    $ch_address_detail = $_POST['address_detail'];
    $ch_num = $_POST['num'];
    //$ch_tell = $_POST['tell1, tell2, tell3'];
    $ch_email = $_POST['email_body'];
    $ch_sns_ok = $_POST['sns_ok'];
    $ch_sns_no = $_POST['sns_no'];
    $ch_email_ok = $_POST['email_ok'];
    $ch_email_no = $_POST['email_no'];
    
    $sql = "
    INSERT INTO user
    (name, nickname, phone_number, email, address)
<<<<<<< HEAD
    VALUES('{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['tell']}', '{$_POST['email']}', '{$_POST['address']}'
=======
    VALUES('{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['tell']}', '{$_POST['email']}', '{$_POST['address']}', NOW()
>>>>>>> da25bc3581d40c806ae62ca1f41d88e14888a8b6
    )";
    //sql문
    echo $sql;
    $result = mysqli_query($conn, $sql);

    if($result == false){
        echo "저장 실패";
        echo mysqli_error($conn);
    }else{
        echo("<script>location.href='Mypage.html';</script>"); 
}
?>