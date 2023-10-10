<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/MyPage.css">  
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
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
        <br>
        <hr class="hr_1">
    </div>
    <div class="all_tag">
      <div class="my_img">
          <img src="../img/auction/end_14.jpg" width="50%">
      </div>
      <div class="my_nickname">안녕안녕 님</div>

      <div>
      <table border="1" style="border: none;">
        <thead style=" background-color: rgb(212, 210, 210);">
          <tr> 
            <th>사용 가능 적립금</th>
            <th>총 사용한 적립금</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100,000원</td>
            <td>326,000원</td>
          </tr>
        </tbody>
      </table>
     </div> 
     <br>
     <br>
     <br>
  
      <div class="btnss">
          <div class="btn_gather">
              <button onclick="location.href='Order_status.php'">주문조회</button>
          </div>
  
          <br>
          <br>
          <br>
  
          <ul id="navi">
            <li class="group">
                <div class="title" onclick="location.href='member_info_edit.php'">회원정보수정</div>
            </li>
            <li class="group">
                <div class="title" onclick="location.href='charge.html'">충전</div>
            </li>
            <li class="group">
                <div class="title">나의 작품</div>
                <ul class="sub">
                    <li><a onclick="location.href='reliable_status.php'">입찰 작품</a></li>                
                    <li><a onclick="location.href='choice_art.php'">찜 작품</a></li>    
                    <li><a onclick="location.href='successful_bid.php'">낙찰 작품</a></li>    
                </ul>
            </li>  
            <li class="group">
                <div class="title" onclick="location.href='my_review.php'" >나의 리뷰</div>
            </li>
            <li class="group">
                <div class="title" onclick="location.href='My_Inquire.php'">문의 현황</div>
            </li>      
        </ul>

        </div>
    </div>
    <br>
    <br>
    <br>
<footer>  <!-- footer 시작 -->
  <div class="footer-Background">
    
  </div>
</footer>  <!-- footer 끝 -->
<script>
    $(document).ready(function(){

        $(".sub").css({display:"none"}); 

        $(".title").click(function(){
          
            $(".sub").each(function(){
                console.log($(this).css("display"));
                if($(this).css("display")=="block") {
                   
                    $(this).slideUp("fast");
                }
            });

            $(this).next("ul").slideDown("fast");


        })
    });
</script>

<script>

$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
});
</script>
</body>
</html>