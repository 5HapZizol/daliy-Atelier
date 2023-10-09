<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/write_form.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>Document</title>
</head>
<body>
<?php
      include("Header.php");
    ?>

    <article>
        <div style="margin-top: 200px;"></div>

        <div class = "page_top_1">
            <div class = "container_2">
                <span class="QA_title">Q. 질문의 제목이 들어가는 곳</span>
            </div>
            <div class = "container_2">
                <p class = "writer">작성자 : user_id</p>
            </div>
            <div class = "container_2">
                <div class = "Ques_Text">상세 질문을 적는 곳</div>
            </div>
       </div>

       <div class = "page_top_1">
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../img/main_image.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div class = "page_top_2">
            <hr class="hr_1">
        </div>

        <div class = "page_top_1">
            <div class = "container_2">
                <span class="QA_title">A. 질문의 답장 제목이 들어가는 곳</span>
            </div>
            <div class = "container_2">
                <p class = "answer_time">답장 시각 : 00:00:00</p>
            </div>
            <div class = "container_2">
                <div class = "Answer_Text">상세 답변이 들어가는 곳</div>
            </div>
        </div>

        <div class = "page_top_1">
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../img/test_img.png">
                    </div>
                </div>
            </div>
        </div>
    </article>
    

    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
          
        </div>
      </footer>  <!-- footer 끝 -->

      <script>
       

      $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
      });
      </script>
</body>
</html>