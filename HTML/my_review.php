<!DOCTYPE html>
<html lang="en">
    <head>
      <title>내 작품 리뷰 페이지</title>
        <link rel="stylesheet" href="../css/review_my_work.css"> 
        <link rel="stylesheet" href="../css/popupchang.css">  
        <link rel="stylesheet" href="../css/slider.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/review_my_work.js"></script>
        
      </head>
    <body>
    <?php
      include("Header.php");
      $conn = mysqli_connect("127.0.0.1", "root", "0430!!", "daily-art", "3306");
      
    ?>

        <article>
      <br> 
  <div>
    <div class="page_top">
        <span class="page_name">내가 쓴 리뷰 보기</span>
        <p class="page_path">마이페이지 > 내 작품 리뷰보기</p>
        <hr class="hr_1">
    </div><!-- page top -->

    <div class="menu_type">
      <div class="menu-btn1"><button>전체</button><span class="menu-animation"></span></div>
      <div class="separator"></div>
      <div class="menu-btn2"><button>최근 리뷰순</button><span class="menu-animation"></span></div>
      <div class="separator"></div>
      <div class="menu-btn3"><button>가격순</button><span class="menu-animation"></span></div>
      <div class="separator"></div>
      <div class="menu-btn3"><button>별점순</button><span class="menu-animation"></span></div>
    </div><!--menu_type-->
<div class="reviewss">
  
<?php
  $sql_review = "SELECT
                      r.*,
                      a.current_price,
                      a.name,
                      DATE_FORMAT(r.Review_number, '%y-%m-%d') AS Formatted_Review_number,
                      i.img_path
                    FROM review r
                    INNER JOIN art a ON r.artId = a.artid
                    INNER JOIN image i ON a.art_img_id = i.art_img_id;
                  ";
          
  $result_review = mysqli_query($conn, $sql_review);
        if ($result_review === false) {    //오류 여부 
            echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
            echo mysqli_error($conn);
         }

         while($row = mysqli_fetch_array($result_review)){
          
       ?>
       <div class="box" type="button" style="margin-right: 1.5em;">
        <div class="winning_bid"><img src="<?=$row['img_path'];?>" width="100%" style="margin-top: 0.4em;"></div>
        
      <div class="contents">
      <div class="detail"><?= strlen($row['Review_descript']) > 20 ? substr($row['Review_descript'], 0, 20) . '...' : $row['Review_descript'] ?></div>
          <div class="bid_price">낙찰가 : <?= number_format($row['current_price']); ?>원</div>
          
          <div class="title"><?=$row['name']?></div>    
          <div class="bid_rated"><?=$row['star_ratings']?> / 10</div>
      </div>
    </div> <!-- box-1 -->
         
       
</div>


<div class="popup hidden">
  <div class="dim"></div>

 <div class="popupBox">
  <div class="btnBox"><button class="close_btn">닫기</button></div>
  
 <div class="popup_2">
<div class="pic_section" style="display: contents;">
  <input type="radio" name="slide" id="slide_1" checked>
  <input type="radio" name="slide" id="slide_2">
  <input type="radio" name="slide" id="slide_3">
  <div class="SlideWrap" style="margin-left:2.5em; margin-top:0.5em;">
<ul class="SlideList">
<!-- 슬라이드 영역 -->
<li class="Slide_item">
  <a>
    <img src="../img/auction/end_9.jpg" height="50%">
  </a>
</li>
<li class="Slide_item">
  <a>
    <img src="../img/auction/end_10.jpg">
  </a>
</li>
<li class="Slide_item">
  <a>
    <img src="../img/auction/end_11.jpg">
  </a>
</li>
<li class="Slide_item">
  <a>
    <img src="../img/auction/end_17.jpg">
  </a>
</li>
<li class="Slide_item">
  <a>
    <img src="../img/auction/end_18.jpg">
  </a>
</li class="Slide_item">

<!-- 좌,우 슬라이드 버튼 -->
<div class="slide_control">
  <div>
    <label for="slide_3" class="Left"></label>
    <label for="slide_2" class="Right"></label>
  </div>
  <div>
    <label for="slide_1" class="Left"></label>
    <label for="slide_3" class="Right"></label>
  </div>
  <div>
    <label for="slide_2" class="Left"></label>
    <label for="slide_1" class="Right"></label>
  </div>
</div>
</ul>
 </div>
    </div>
<div class="pop_detail">
  <div class="consumer"> 구매자 : <?= $row['Userid']?> 님</div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
    <div class="date">작성 날짜 : <?= $row['Formatted_Review_number']?></div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
    <div class="review_detail">
  <div class="review" style="font-size: 1.1.5em; color: black; font-family: math;">
  <?=$row['Review_descript']?></div>
 </div>   
    <div class="divider" style="margin-top: 0.5em;"></div>
  <div class="bid_price" style="font-size: 1.4em; margin: 0.3em;">낙찰가 : <?= number_format($row['current_price']);?>원</div>
    <div class="divider" style="margin-top: 0.5em;"></div>
    <br>
  <div class="title"><?=$row['name']?></div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
  <div class="category">#자연 #초자연 #밝은 #바다 #디지털아트</div>
  <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
  <img class="re_star" src="../img/star.png">
  </div><!--pop_detail-->
</div><!--popup_2-->
    </div>
  </div>
  <?php
       }
       ?>
  <div class="Artist-Introduce-Button">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
    <button>5</button>
    <button>6</button>
    <button>7</button>
    <button>8</button>
    <button>9</button>
    <button>10</button>
    <button>></button>
    <button>>></button>
  </div>

  </article>

  <!-- footer 시작 -->
 <footer>  
  <div class="footer-Background">
    
  </div>
</footer>  <!-- footer 끝 -->
<script>

    $(document).ready(function () {
        $(".footer-Background").load("../html/Footer.html");
    });

    const open = () => {
        document.querySelector(".popup").classList.remove("hidden");
        // 팝업이 열릴 때 헤더 숨기기
        document.querySelector(".Header").style.display = "none";
    }

    const close = () => {
        document.querySelector(".popup").classList.add("hidden");
        // 팝업이 닫힐 때 헤더 다시 표시하기
        document.querySelector(".Header").style.display = "";
    }

    document.querySelector(".box").addEventListener("click", open);
    document.querySelector(".close_btn").addEventListener("click", close);
    document.querySelector(".dim").addEventListener("click", close);
</script>
</body>
</html>