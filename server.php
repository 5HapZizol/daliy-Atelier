<?php
//서버 통합 수정 예정
    $hostname="localhost";
    $dbuserid="root";
    $dbpasswd="pma5hapzizol";
    $dbname="daily-art";

    //mysqli = new mysqli(호스트 이름, 유저 아이디, 패스워드,  DB 스키마 이름)    
    $db = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);
	$db->set_charset("utf8");
    function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>