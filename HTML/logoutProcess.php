<?php   //세션을 종료함
session_start();
session_destroy();
?>
<script> //메인 페이지로 이동
    location.href = "main.php";
</script>