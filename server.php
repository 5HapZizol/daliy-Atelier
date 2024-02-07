<?php
    date_default_timezone_set('Asia/Seoul');
    //ini_set('display_errors','0');
    $host = getenv('HOST');
    $id = getenv('DB_ID');
    $port = getenv('DB_PORT');
    $pw = getenv('DB_PW');

    $conn = mysqli_connect($host, $id, $pw, "daily-art", $port);
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);
?>