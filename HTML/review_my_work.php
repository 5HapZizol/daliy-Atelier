<!DOCTYPE html>
<html lang="en">
    <head>
      <title>내가 쓴 작품 리뷰 페이지</title>
        <link rel="stylesheet" href="../css/my_review.css"> 
        <link rel="stylesheet" href="../css/popupchang.css"> 
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/review_my_work.js"></script>
        
      </head>
    <body>
    <?php
      include("Header.php");
    ?>

        <article>
          <div>
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

<div class="box" type="button">
    <div class="winning_bid"><img src="../img/auction/done_digi_2.jpg"></div>
    
  <div class="contents">
      <div class="detail">너무 귀엽고, 농협은행!~</div>
      <div class="bid_price">낙찰가 : 130,000원</div>
      
      <div class="title">세사람</div>    
      <div class="bid_rated">3.8/10</div>
  </div>
</div> <!-- box-1 -->

<div class="box" type="button">
  <div class="winning_bid"><img src="../img/auction/done_digi_3.jpg"></div>
  
<div class="contents">
    <div class="detail">너무 귀엽고, 농협은행!~</div>
    <div class="bid_price">낙찰가 : 130,000원</div>
    
    <div class="title">우주비행사</div>    
    <div class="bid_rated">3.9/10</div>
</div>
</div> <!-- box-2 -->

<div class="box" type="button">
  <div class="winning_bid"><img src="../img/auction/done_digi_4.jpg"></div>
  
<div class="contents">
    <div class="detail">너무 귀엽고, 농협은행!~</div>
    <div class="bid_price">낙찰가 : 130,000원</div>
    
    <div class="title">파도소리</div>    
    <div class="bid_rated">5/10</div>
</div>
</div> <!-- box-2 -->

<div class="box" type="button">
  <div class="winning_bid"><img src="../img/auction/done_digi_1.jpg"></div>
  
<div class="contents">
    <div class="detail">너무 귀엽고, 농협은행!~</div>
    <div class="bid_price">낙찰가 : 130,000원</div>
    
    <div class="title">연예인 병</div>    
    <div class="bid_rated">3.2/10</div>
</div>
</div> <!-- box-2 -->

<div class="box" type="button">
  <div class="winning_bid"><img src="../img/auction/best4.jpg"></div>
  
<div class="contents">
    <div class="detail">너무 귀엽고, 농협은행!~</div>
    <div class="bid_price">낙찰가 : 130,000원</div>
    
    <div class="title">너도?</div>    
    <div class="bid_rated">4.8/10</div>
</div>
</div> <!-- box-2 -->

</div><!--rivewss-->

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
  <div class="title">탑</div>
    <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
  <div class="category">#밝은 #바다 #자연 #디지털아트</div>
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
</div>

  </article>
  <script>
    $(document).ready(function () {
        $(".Header").load("../html/Header.html");
    });

    $(document).ready(function () {
        $(".footer-Background").load("../html/Footer.html");
    });

    const open = () => {
        document.querySelector(".popup").classList.remove("hidden");
        // Hide header when popup opens
        document.querySelector(".Header").style.display = "none";
    }

    const close = () => {
        document.querySelector(".popup").classList.add("hidden");
        // Redisplay the header when the popup is closed
        document.querySelector(".Header").style.display = "";
    }

    // Add event listeners to all the review boxes
    const reviewBoxes = document.querySelectorAll(".box");
    reviewBoxes.forEach((box) => {
        box.addEventListener("click", open);
    });

    document.querySelector(".close_btn").addEventListener("click", close);
    document.querySelector(".dim").addEventListener("click", close);
</script>
</body>
</html>