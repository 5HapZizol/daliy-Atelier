<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>서비스 이용 안내</title>
    <link type="text/css" rel="stylesheet" href="../css/Information_Use.css"></link>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<?php
      include("Header.php");
    ?>


  <article>
    <!--본문 시작-->
    
  <div style="margin-top: 200px;">
    
    <div class="page_top">
      <span class="page_name">경매 진행방법</span>
      <p class="page_path">서비스 > 경매 진행방법</p>
      <br>
      <hr class="hr_1">
  </div>
    
    <div class = "service_box">
        <p>
            <h3>1. 회원가입</h3>

            <p>
                데일리 아틀리에는 무료로 회원가입이 가능합니다.
                <br>(단 만 14세 이하는 보호자의 동의를 받아야 합니다.)
                <br><br>[홈페이지 상단] > [로그인] > [회원가입 버튼]을 누르시고 절차에 따라 가입하시면 됩니다.
            </p>
            <div class="img_center">
                <img src="../img/service/info_1_1.png" width="100%" height="auto">
                <img src="../img/service/info_1_2.png" width="60%" height="auto">
            </div>
        </p>
        <p>
            <h3>2. 로그인</h3>
            회원 가입 완료 후 [홈페이지 상단] > [로그인] 버튼을 통해 로그인 영역에서 아이디와 비밀번호를 입력하시고 로그인해주세요.
            <div class="img_center">
                <img src="../img/service/info_2_1.png" width="100%" height="auto">
            </div>
        </p>

        <br>
        <p>
            <h3>3. 적립금</h3>
            [홈페이지 상단] > [마이페이지] > [적립금 옆 충전 버튼]을 통하여 적립금 구매에 필요한 신청 항목을 작성합니다.
            <br>인터넷 뱅킹, 계좌 이체 등 알맞은 방식을 선택하여 적립금을 충전했다면 입금 확인을 통해 적립금 사용 승인 절차가 이루어져 적립금을 사용하실 수 있게 됩니다.
            <div class="img_center">
                <img src="../img/service/info_3_1.png" width="100%" height="auto">
                <img src="../img/service/info_3_2.png" width="60%" height="auto">
            </div>
        </p>

        <br>
        <p>
            <h3>4. 경매 입찰 및 낙찰</h3>
            경매 메뉴로 들어가 진행 중인 경매작품을 선택하고 입찰합니다.
            <br>경매 종료 시각에 최종 입찰자가 낙찰자로 결정됩니다.
            <br>이때 낙찰가는 충전된 적립금 이상의 금액을 지정하실 수 없습니다.
            <div class="img_center">
                <img src="../img/service/info_4.png" width="100%" height="auto">
            </div>
        </p>

        <br>
        <p>
            <h3>5. 배송 (미술품 한정)</h3>
            디지털 작품을 제외한 미술품은 판매자 측에서 배송을 담당합니다.
        </p>
    </div>
  </article>  

    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
      $(document).ready(function(){
        $(".Header").load("../html/Header.html");
    });

    $(document).ready(function(){
        $(".footer-Background").load("../html/Footer.html");
    });
    </script>
</body>
</html>