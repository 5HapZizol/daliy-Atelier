<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/MyPage.css">  
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>일반회원 마이페이지</title>
</head>
<body>
<?php
      include("Header.php");
  ?>

  <article>
    <br>
    <div class="page_top">
        <span class="page_name">회원 MY PAGE</span>
        <p class="page_path">마이페이지 ></p>
        <br>
        <hr class="hr_1">
    </div>
    <div class="mem_fro_info_1">
      <a><img  src="../img/auction/new_17.png" width="102em" height="122em"></a>
       <div class="box_1">
         <br>
         <div class="box_text">사용 가능한 적립금: 140,000원  
         <a href="charge.html"><button class="charge_btn"> 충전</button></a>
       </div>
         <br>
         <div class="box_text_1">총 사용한 적립금: 100,000원 </div>
         <br>
         <div class="box_text">사용한 적립금: 50,000원 </div>
          <div class="line"></div>	
       </div>
       </div>
    <br>
    <br>
    <div>
    <table border="1">
      <tr class="td_1">
        <td colspan="4">주문처리 현황</td>
      </tr>
      <tr class="no-border-bottom">
        <td>입금 전</td>
        <td>배송 준비 중</td>
        <td>배송 중</td>
        <td>배송완료</td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    </div>
    <div class = "btn-group">
          <button  class="mem_info" onclick="location.href='member_info_edit.html'">회원정보 수정</button> 
          <button class="mem_info" onclick="location.href='choice_art.html'">찜 작품</button>
          <button class="mem_info" onclick="location.href='reliable_status.html'" >입찰 현황</button>
          <button class="mem_info" onclick="location.href='successful_bid.php'">낙찰 작품</button>
          <br>
          <button class="mem_info" onclick="location.href='Order_status.html'" >배송 조회</button>
          <button class="mem_info" onclick="location.href='review_my_work.html'" >나의 리뷰</button>
          <button class="mem_info" onclick="location.href='My_Inquire.html'">문의 현황</button>
  </div>
  <br>
  <br>
<br>
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