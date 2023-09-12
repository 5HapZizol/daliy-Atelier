<!DOCTYPE html>
<html lang="en">
<head>
    <head>
      <meta charset="UTF-8">
      <link type="text/css" rel="stylesheet" href="../css/Member_register_Select.css"></link>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <title>회원 가입</title>
</head>
<body>
<?php
      include("Header.php");
    ?>

    <article>
    <!--본문 시작-->
        <div style="margin-top: 200px;">

        <div class="page_top">
            <span class="page_name">회원 가입</span>
            <br>
            <hr class="hr_1">
        </div>

        <div class = "container">
            <p>일반 회원으로 가입하여도 추후에 작가 회원으로 변경할 수 있습니다.</p>
        </div>
        
        <div class = "container_1">



            <div class = "container_2">
                <div class="box-container">
    
                    <div class="box">
                       <div class="image">
                          <img src="../img/user.png" alt="">
                       </div>
                       <div class="content">
                        <input type="button" name = "select_2" value="일반 회원" class = "auother" onclick="location.href='Member_register.php'"/>
                       </div>
                    </div>
              
                    <div class="box">
                       <div class="image">
                          <img src="../img/artist.png" alt="">
                       </div>
                       <div class="content">
                          <input type="button" name = "select_2" value="작가 회원" class = "auother" onclick="location.href='Member_Artist_register.php'"/>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- footer 시작 -->
    <footer>  
        <div class="footer-Background">
            
        </div>
    </footer>  <!-- footer 끝 -->

    <script>
      $(document).ready(function(){
        $(".Header").load("/html/Header.html");
      });

      $(document).ready(function(){
          $(".footer-Background").load("/html/Footer.html");
      });
    </script>
</body>
</html>