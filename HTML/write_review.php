<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>작품 리뷰쓰기</title>
    <link rel="stylesheet" href="../css/write_review.css">   
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        const drawStar = (target) => {
        document.querySelector(`.star span`).style.width = `${target.value * 10}%`;
}
    </script>
</head>
<body>
<?php
      include("Header.php");
    ?>

<article>
    <form action="write_reviewProcess.php" method = "POST" enctype="multipart/form-data">

    <div class="page_top">
        <span class="page_name">리뷰 쓰기</span>
    </div>
    <div class="review_box">
    <div class="review_img"><img src="../img/auction/done_real_1.jpg" width="98%" style="height: 30em; margin: 0.5em;">
        <div class="plus_box" style="width: 24em; height: 5em;">
            <button type="button" class="plus_img"><img src="../img/img_plus.png" alt="추가" onclick="" style="width: 4.5em; height: 4.5em;" ></button>
        </div><!--plus_box-->
    </div>
    
    <div class="write_box"> <!-- -->
        <div class="write_name">다양한</div><!--외래키로 가져와야함 -->
        <div class="write_categrie">#입체 #현재 #감성 #디지털아트</div>
    <div class="contour"></div>
        <div class="write_price">낙찰가 : 300,000원</div>
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

    </form>
</article>
</body>
</html>