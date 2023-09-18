<?php
include $_SERVER['DOCUMENT_ROOT']."/server.php";
$sql = mq("select * from art where closing_time > CURDATE()"); 
while($row = $sql->fetch_array()){
    $sql = mq("update art set art_status = 1 where '{$row['artId']}'"); 
}
?>