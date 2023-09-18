<?php
    include $_SERVER['DOCUMENT_ROOT']."/server.php";
    $sql = mq("select * from art"); 
    
    while($board = $sql->fetch_array()){
        $id = $board["artId"];
        echo $id;
        ?>
        <br>
        <?php
    }
    
$datetime1 = new DateTime(date("Y-m-d H:i:s"));
echo $datetime1
?>