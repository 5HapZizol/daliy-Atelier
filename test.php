<?php 
// 방법2, PHP >= 5.3.0
echo gethostbyname(gethostname()); // 127.0.0.1
?>
<br>
<?php
echo $_SERVER['SERVER_PORT'];
// 방법3
echo $_SERVER['SERVER_ADDR']; // 192.168.0.2
?>