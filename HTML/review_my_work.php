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
        <span class="page_name">내 작품 리뷰 보기</span>
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

<div class="box" type="button" style="margin-right: 1.5em;">
    <div class="winning_bid"><img src="../img/auction/end_9.jpg" width="100%" style="margin-top: 0.4em;"></div>
    
  <div class="contents">
      <div class="detail">이뻐요 제가 원하는 그림이에요!</div>
      <div class="bid_price">낙찰가 : 100,000원</div>
      
      <div class="title">푸르른</div>    
      <div class="bid_rated"><img src="../img/star_1.png" width="35%"></div>
  </div>
</div> <!-- box-1 -->

<div class="box" type="button" style="margin-right: 1.5em;">
  <div class="winning_bid"><img src="../img/auction/end_13.jpg" width="100%" style="margin-top: 0.4em;"></div>
  
<div class="contents">
    <div class="detail">레몬 진짜 사진 같아요~~!😊😊</div>
    <div class="bid_price">낙찰가 : 190,000원</div>
    
    <div class="title">레몬드림</div>    
    <div class="bid_rated"><img src="../img/star_1.png" width="35%"></div>
</div>
</div> <!-- box-2 -->

<div class="box" type="button" style="margin-right: 1.5em;">
  <div class="winning_bid"><img src="../img/auction/new_13.png" width="100%" style="margin-top: 0.4em;"></div>
  
<div class="contents">
    <div class="detail">너무 맘에 들어요!! 딱 찾던 거예요!</div>
    <div class="bid_price">낙찰가 : 150,000원</div>
    
    <div class="title">자연액자</div>    
    <div class="bid_rated"><img src="../img/star_1.png" width="35%"></div>
</div>
</div> <!-- box-3 -->

<div class="box" type="button">
  <div class="winning_bid"><img src="../img/auction/best4.jpg" width="100%" style="margin-top: 0.4em;"></div>
  
<div class="contents">
    <div class="detail">완죤 귀요미.....</div>
    <div class="bid_price">낙찰가 : 50,000원</div>
    
    <div class="title">출근 중</div>    
    <div class="bid_rated"><img src="../img/star_1.png" width="35%"></div>
</div>
</div> <!-- box-4 -->


</div><!--rivewss-->

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
  <div class="consumer"> 구매자 : rlaalswn 님</div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
    <div class="date">작성 날짜 : 2022.12.31</div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
    <div class="review_detail">
  <div class="review" style="font-size: 1.1.5em; color: black; font-family: math;">
  너무 이뻐요!!  제가 원하는 느낌의 그림이예요 제가 이번에
  처음으로 카페를 운영하게 되어서 카페에 어울리는 시원한 그림을 찾고 있었는데,
  사이즈도 딱 맞고, 이 작가님 그림 많이 찾게 될 거 같네욯ㅎ😊
  시니어 작가가 아닌 취미로 그림을 하시는 분의 그림을 이번에 처음 도전하는 경매인데 낙찰도 받고 
  사진도 너무너무너무너무 맘에 듭니다. 팬 될 거 같네요~~ 아주 좋아요ㅎㅎ😇😇</div>
 </div>   
    <div class="divider" style="margin-top: 0.5em;"></div>
  <div class="bid_price" style="font-size: 1.4em; margin: 0.3em;">낙찰가 : 100,000원</div>
    <div class="divider" style="margin-top: 0.5em;"></div>
    <br>
  <div class="title">푸르른</div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
  <div class="category">#자연 #초자연 #밝은 #바다 #디지털아트</div>
  <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
  <img class="re_star" src="../img/star.png">
  </div><!--pop_detail-->
</div><!--popup_2-->
    </div>
  </div>

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
  

  $(document).ready(function(){
    $(".footer-Background").load("/html/Footer.html");
  });

  const open = () => {
    document.querySelector(".popup").classList.remove("hidden");
  }

  const close = () => {
    document.querySelector(".popup").classList.add("hidden");
  }

  document.querySelector(".box").addEventListener("click", open);
  document.querySelector(".close_btn").addEventListener("click", close);
  document.querySelector(".dim").addEventListener("click", close);

</script>
</body>
</html>