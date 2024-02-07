<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/write_form.css">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <title>Document</title>
</head>
<body>
<?php
      include("Header.php");
    ?>

    <article>
        <div style="margin-top: 200px;"></div>

        <?php
        $sql = "SELECT Q_write_id, Q_write_select, Q_write_title, DATE_FORMAT(Q_write_time, '%y-%m-%d') AS Q_write_time, Q_write_content, user_id
                FROM q_write
                WHERE Q_write_id = '{$_GET['Qid']}'";
        $result = mysqli_query($conn, $sql);
        $Question= mysqli_fetch_array($result);
        ?>
        <div class = "page_top_1">
            <div class = "container_2">
                <span class="QA_title">Q. <?=$Question['Q_write_title']?></span>
            </div>
            <div class = "container_2">
                <p class = "writer2">유형 : <?=$Question['Q_write_select']?></p>
                <div class = "writer3">
                    <p class = "writer">
                        작성자 : <?php echo preg_replace('/(?<=\w)\w(?=\w)/', '*', $Question['user_id']); ?>  
                    </p>
                    <p class="writer">
                        작성 날짜 :<?=$Question['Q_write_time']?>
                    </p>
                </div>
            </div>
            <div class = "container_2">
                <div class = "Ques_Text"><?=$Question['Q_write_content']?></div>
            </div>
       </div>

       <div class = "page_top_1">
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <?php
                    $sql = "SELECT img_path
                    FROM image
                    WHERE art_img_id = (
                        SELECT art_img_id
                        FROM q_write
                        WHERE Q_write_id = '{$_GET['Qid']}')";
                    $result = mysqli_query($conn, $sql);
                    $image = mysqli_fetch_assoc($result); // 이미지 정보 가져오기
                    ?>
                    <img src="<?= $image['img_path'] ?>">
                </div>
            </div>
            </div>
        </div>

        <div class="hidden">
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
        </div>
    </article>
    

    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
          
        </div>
      </footer>  <!-- footer 끝 -->

      <script>
       

      $(document).ready(function(){
          $(".footer-Background").load("../HTML/Footer.html");
      });
      </script>
</body>
</html>