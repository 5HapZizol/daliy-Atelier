<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/event.css">
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <title>이벤트 안내</title>
    </head>


    <!--header 시작-->
    <?php
        include("Header.php");
    ?>
    <!--header 끝-->

<body>
    <a id="back-to-top"></a>
  <!--본문 시작-->
  <div style="margin-top: 150px;"></div>

  <div class="slideshow-container" >
    <div class="slide">
        <div class="mySlides fade">
            <a href="e_artist.php"><img src="/img/artist.jpg" width="100%"></a>
        </div>
        
        <div class="mySlides fade">
            <a href="#"><img src="/img/delivery.jpg" width="100%"></a>
        </div>
        
        <div class="mySlides fade">
            <a href="#"><img src="/img/coupon2.jpg" width="100%"></a>
        </div>

        <div class="mySlides fade">
            <a href="#"><img src="/img/review.jpg" width="100%"></a>
        </div>
    </div>

    <div style="margin-top: 10px;"></div>
    <div style="text-align:center">
        <span class="dot"><input class ="btn" type="radio" class="radio_button" id="radio_1" name="slider" checked /></span>
        <span class="dot"><input class ="btn" type="radio" class="radio_button" id="radio_2" name="slider" /></span>
        <span class="dot"><input class ="btn" type="radio" class="radio_button" id="radio_3" name="slider" /></span>
        <span class="dot"><input class ="btn" type="radio" class="radio_button" id="radio_4" name="slider" /></span>
    </div>   
  </div>

    <br>

    <section>
    <div class="contain">
        <div class="notice-contain">
            <div class="notice-img">
                <img src="/img/coupon3.jpg" width="90%">
            </div>
            <div class="notice-text">
                <p><br></p>
                <p>9월 이벤트 안내</p>
                <p><br></p>
                <p>안녕하세요 데일리 아뜰리에 입니다</p>
                <p>오픈 2개월 만에 많은 분들이 저희 사이트를 이용해 주셨습니다</p>
                <p><br></p>
                <p>감사하는 마음을 담아 9월 한 달간 사용가능한 </p>
                <p>10%할인 쿠폰을 준비하였습니다</p>
            </div>
        </div><!--notice contain-->

        <div class="notice-contain">
            <div class="notice-img" >
                <img src="/img/delivery.jpg" width="90%">
            </div>
                <div class="notice-text" >
                    <p><br></p>
                    <p>9월 배송안내</p>
                    <p><br></p>
                    <p>안녕하세요 데일리 아뜰리에 입니다</p>
                    <p>많은 분들이 구매하신 작품의 배송을 고대하고 계시겠지만</p>
                    <p>9월 20일 ~ 25일 추석연휴 동안 택배사의 휴업으로 배송이 지연 될 예정입니다</p>
                    <p><br></p>
                    <p>기다리신 만큼 더 좋은 서비스로 보답하겠습니다</p>
                </div>
        </div><!--notice contain-->

        <div class="notice-contain">
            <div class="notice-img">
                <img src="/img/review_e.jpg" width="92%">
            </div>
            <div class="notice-text" >
                <p><br></p>
                <p>8월 이벤트 안내</p>
                    <p><br></p>
                    <p>안녕하세요 데일리 아뜰리에 입니다</p>
                    <p>7월에 열렸던 SNS 구매인증 이벤트에 많은 분들이 참여해 주셨습니다</p>
                    <p><br></p>
                    <p>8월 구매인증 리뷰이벤트의 당첨자는</p>
                    <p>ds*****671<br>fe****353</p>
            </div>
        </div><!--notice contain-->

        <div class="notice-contain">
            <div class="notice-img">
                <img src="/img/summer.jpg" width="90%">
            </div>
            <div class="notice-text" >
                <p><br></p>
                <p>7월 이벤트 안내</p>
                    <p><br></p>
                    <p>안녕하세요 데일리 아뜰리에 입니다</p>
                    <p>7월을 맞이하여 소소한 여름이벤트를 준비해보았습니다</p>
                    <p><br></p>
                    <p>작품을 구매하신 후 SNS에 포스팅하여주시면 8월 추첨을 통해 </p>
                    <p>소정의 상품을 드리려고합니다</p>
                    <p>많은 참여 부탁드립니다</p>
            </div>
        </div><!--notice contain-->


        <div class="notice-contain">
            <a href="e_artist.php">
            <div class="notice-img">
                <img src="/img/artist.jpg" width="95%">
            </div>
            <div class="notice-text" >
                <p><br></p>
                <p><br></p>
                <p>작가 모집 안내</p>
                    <p><br></p>
                    <p>안녕하세요 데일리 아뜰리에 입니다</p>
                    <p>데일리 아뜰리에 에서 멋진 작품을 판매하실 작가님들을 모집합니다</p>
                    <p><br></p>
                    <p>오픈 한 달 동안 가입하여 작품을 판매하여주신 작가님들에게</p>
                    <p>수수료 면제권을 제공해 드립니다</p>
            </div>
        </div><!--notice contain-->
    </div>
    </section>

    <!-- 바디 위에 있어야 동작함 건드리지 마세요-->
    <script src="/js/event.js"></script>
</body>


    <footer>  
      <div class="footer-Background"></div>
    </footer>  <!-- footer 끝 -->
    <script>
     

    $(document).ready(function(){
        $(".footer-Background").load("../HTML/Footer.html");
    });
    </script>
</html>
