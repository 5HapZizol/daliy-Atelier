<?php
//서버 통합 수정 예정
    $hostname="";
    $dbuserid="";
    $dbpasswd="";
    $dbname="";

    $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);
    if ($mysqli->connect_errno) {
        die('Connect Error: '.$mysqli->connect_error);
    }
    $conn = mysqli_connect("127.0.0.1", "root", "pma5hapzizol", "daily-art", "3306");
    //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);
?>