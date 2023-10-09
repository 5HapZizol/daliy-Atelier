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
       <div class="box" type="button">
        <div class="winning_bid"><img src="<?=$row['img_path'];?>"></div>
        
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
  <div class="pop_work">
    <img src="../img/auction/done_digi_2.jpg" style="width: 600px; height: 550px; object-fit: cover; margin-top: 30px; margin-right: 10px;"> 
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
        $(".Header").load("../html/Header.html");
    });

    $(document).ready(function () {
        $(".footer-Background").load("../html/Footer.html");
    });

    const open = () => {
        document.querySelector(".popup").classList.remove("hidden");
        // 팝업창 열었을 때 숨김
        document.querySelector(".Header").style.display = "none";
    }

    const close = () => {
        document.querySelector(".popup").classList.add("hidden");
        // 팝업창 닫았을 때 다시 보이게
        document.querySelector(".Header").style.display = "";
    }

    //모든 리뷰 상자에 이벤트 리스너 추가
    const reviewBoxes = document.querySelectorAll(".box");
    reviewBoxes.forEach((box) => {
        box.addEventListener("click", open);
    });

    document.querySelector(".close_btn").addEventListener("click", close);
    document.querySelector(".dim").addEventListener("click", close);
</script>
</body>
</html>