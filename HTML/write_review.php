<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>작품 리뷰쓰기</title>
    <link rel="stylesheet" href="../css/write_review.css">   
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        const drawStar = (target) => {
            const starElement = document.querySelector('.star span');
            if (starElement) {
                const widthPercentage = `${target.value * 10}%`;
                starElement.style.width = widthPercentage;
            }
        }

        $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
         });
    </script>
</head>
<body>
<?php
      include("Header.php");
      $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");
    ?>

<article>
        <?php
        $sql = "SELECT * FROM Art WHERE artid = '{$_GET['aid']}'";
        $result = mysqli_query($conn, $sql);
        if ($result === false) {    //오류 여부 
            echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
            echo mysqli_error($conn);
         }
        $row = mysqli_fetch_array($result);
        //이미지 경로 찾기
        $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
        $result2 = mysqli_query($conn, $sql);
        $ttmp = mysqli_fetch_array($result2);
        $image_path = $ttmp['img_path'];
        ?>
    <form action="write_reviewProcess.php?aid=<?=$row['artId']?>" method = "POST" enctype="multipart/form-data">
         <div class="page_top">
            <span class="page_name">리뷰 쓰기</span>
        </div>

        <div class="review_box">
            <div class="review_img"><img src="<?=$image_path?>" alt="작품 이미지">
                <div class="plus_box">
                    <button type="button" class="plus_img"><img src="../img/img_plus.png" alt="추가" onclick="" style="width: 4.5em; height: 4.5em;" ></button>
                </div><!--plus_box-->
            </div>
    
            <div class="write_box"> <!-- -->
                <div class="write_name"><?= $row['name']; ?></div><!--외래키로 가져와야함 -->
                <div class="write_categrie">#입체 #현재 #감성 #디지털아트</div>
                <div class="contour"></div>
                <div class="write_price"><?= number_format($row['current_price']); ?>원</div>
                <div class="contour_1"></div>

                <!--별점--> 
                <span class="star">
                    ★★★★★
                    <span>★★★★★</span>
                    <input type="range" name="review_Star" id="review_Star" oninput="drawStar(this)" value="1" step="1" min="0" max="10">
                </span>

                <div class="contour_2"></div>

                <div class="write_w">내용</div>
                <textarea name="review_CoInput" id="review_CoInput" class="write_detail" rows="50" cols="50"></textarea>

            </div><!--write_box-->
        </div><!--review_box-->

        <div class = "btn-g">
            <p>
                <button class="btn_1">올리기</button>
                <button class="btn_2">취소</button>
            </p>
        </div>
    </form>
</article>
<footer>  <!-- footer 시작 -->
    <div class="footer-Background"></div>
</footer>
</body>
</html>