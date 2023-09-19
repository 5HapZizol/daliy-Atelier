<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="..\CSS\e_artist.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <title>이벤트 안내</title>
    </head>

    <!--header 시작-->
    <?php
        include("Header.php");
    ?>
    <!--header 끝-->

    <body>
        
    <div style="margin-top: 140px;"></div>

    <div>
        <div class="outer_div">
            <div class="my_gradient_1"></div>
        </div>
    </div>

    </body>

    <footer>  <!-- footer 시작 -->
        <div class="footer-Background"></div>
    </footer>  <!-- footer 끝 -->
    <script>
     

    $(document).ready(function(){
        $(".footer-Background").load("../html/Footer.html");
    });
    </script>
</html>