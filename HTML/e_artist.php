<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/e_artist.css">
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <title>이벤트 안내</title>
    </head>

    <!--header 시작-->
    <?php
        include("Header.php");
    ?>
    <!--header 끝-->

    <div style="margin-top: 140px;"></div>
    <body>
        <section>
            <div calss="backimg">
                <img class="bgimg"src="../img/findtoartist.png">
            </div>
        </section>

        <section>
            <div class="enotice">
                <p>데일리 아뜰리에 에서 경험을 함께할 작가님들을 모집하고 있습니다!</p>
            </div>
        </section>
    </body>

    <footer>  <!-- footer 시작 -->
        <div class="footer-Background"></div>
    </footer>  <!-- footer 끝 -->
    <script> 
    $(document).ready(function(){
        $(".footer-Background").load("../HTML/Footer.html");
    });
    </script>
</html>