<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/member_info_edit.css">  
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>회원정보수정 페이지</title>
</head>
<body>   
  <?php
  include("Header.php");
 ?>
<br>
<br>
<br>
    <article>
    <div class="page_top">
      <span class="page_name">회원 정보 수정</span> 
      <p class="page_path">마이페이지 > 회원 정보 수정</p>
      <br>
      <hr class="hr_1">
    </div>

    <div>
  <form action = "member_UpdateProcess.php" method = "post" id="update_form">
    <div>
        <img class="profile" src="../img/auction/done_digi_6.jpg">
        <button class="photo_select">사진 선택</button>
    </div>
    <br>
    <div class="all">
      <table class="mem_table">
    <form id = "update_form" method="post" class = "update_page member_update">
          <tr>
              <td style="text-align: center;">이름</td>
              <td><input type="text" name="name" placeholder="이름 입력" style="width: 100%; border: none;"></td>
          </tr>
          <tr>
              <td style="text-align: center;">닉네임</td>
              <td><input type="text" name="nickname" placeholder="닉네임 입력" style="width: 70%; border: none;">
                  <button class="select">중복 확인</button></td>
          </tr>
          <tr>
            <td style="text-align: center;">연락처</td>
            <td>
            <select class="num" name= "tel1" style=" border: none;">
                <option value="1">선택</option> 
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="012">012</option>
            </select>
                -
                <input type="text" name="tel2" style="width: 40px;">
                -
                <input type="text" name="tel3" style="width: 40px;">
            </td>
          </tr>
          <tr>
            <td style="text-align: center;">우편번호</td>
            <td><input type="text" name="name" placeholder="직접 입력" style="width: 60%;">
              <button class="select">우편번호 확인</button><br>
            </td>
        </tr>
          <tr>
            <td style="text-align: center;">주소</td>
            <td>
              <input type="text" name="address" placeholder="주소 입력" style="width: 60%; margin-bottom: 7px;">
              <input type="text" name="address" placeholder="상세 주소" style="width: 90%;">
            </td>
          </tr>

          <tr>
              <td style="text-align: center;">E-MAIL</td>
              <td><input type="text" name="email_body" placeholder="직접 입력" style="width: 50%;">
                  <select class="num" name="email_form">
                      <option value="1">선택</option>
                      <option value="naver.com" id="email_naver">@naver.com</option>
                      <option value="daum.net" id="email_daum">@daum.net</option>
                      <option value="google.co.kr" id="email_google">@google.co.kr</option>
                      <option value="nate.com" id="email_nate">@nate.com</option>
                  </select></td>
          </tr>
          <tr>
              <td style="text-align: center;">E-MAIL 수신 동의</td>
              <td><input type="radio" name="email_agree"  value="email_y" checked="checked">동의
                  <input type="radio" name="email_agree"  value="email_n">비동의</td>
          </tr>
        </form>
      </table>
    </div>
  </div>
  <br>
    <div class = "btn-group">
      <p>
          <btn class="btn1" >수정하기</btn>
          <a href="MyPage.html"><btn class="btn2">취소</btn></a>
      </p>
  </div>
  <br>
</form>
</article>
<script>

  $(document).ready(function(){
      $(".footer-Background").load("../html/Footer.html");
  });
  </script>

</body>
</html>