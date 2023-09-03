<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/member_info_edit.css">  
    <link rel="stylesheet" href="../css/footer.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/header.js"></script>
    <title>회원정보수정 페이지</title>
</head>
<body>   
    <?php
        include("Header.php");
      ?>

    <br>

    
    <div class="page_top">
      <span class="page_name">회원 정보 수정</span> 
      <p class="page_path">마이페이지 > 회원 정보 수정</p>
      <br>
      <hr class="hr_1">
    </div>

    
  <form action = "member_UpdateProcess.php" method = "post" id="update_form">
    <div>
<<<<<<< HEAD
        <img class="profile" src="../img/auction/best1.jpg">
=======
        <img class="profile" src="../img/best1.jpg" name="profile_e">
>>>>>>> f1fa70cf9dbbfb95ff9ac0dd2b277def96cda57f
        <button class="photo_select">사진 선택</button>
    </div>

    <div>
      <table class="mem_table">
    <form id = "update_form" method="post" class = "update_page member_update">
          <tr>
              <td>이름</td>
              <td><input type="text" name="name" placeholder="이름 입력" style="width: 11em;"></td>
          </tr>
          <tr>
              <td>닉네임 </td>
              <td><input type="text" name="nickname" placeholder="닉네임 입력" style="width: 11em;">
                  <button>중복 확인</button></td>
          </tr>
          <tr>
              <td>E-MAIL</td>
              <td><input type="text" name="email_body" placeholder="직접 입력" style="width: 11em;">
                  <select class="num" name="email_form">
                      <option value="1">선택</option>
                      <option value="naver.com<" id="email_naver">@naver.com</option>
                      <option value="daum.net" id="email_daum">@daum.net</option>
                      <option value="google.co.kr" id="email_google">@google.co.kr</option>
                      <option value="nate.com" id="email_nate">@nate.com</option>
                  </select></td>
          </tr>
          <tr>
            <td>전화번호</td>
            <td>
            <select class="num" name= "tel1">
                <option value="1">선택</option> 
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="012">012</option>
            </select>
                -
                <input type="text" name="tel2" style="width: 3em;">
                -
                <input type="text" name="tel3" style="width: 3em;">
            </td>
          </tr>
          <tr>
              <td>E-MAIL 수신 동의</td>
              <td><input type="radio" name="email_agree"  value="email_y" checked="checked">동의
                  <input type="radio" name="email_agree"  value="email_n">비동의</td>
          </tr>
        </form>
      </table>
    </div>

    <div class = "btn-group">
      <p>
          <input type="submit" ><btn class="btn1" >회원 정보 저장</btn>
          <a href="MyPage.html"><btn class="btn2">취소</btn></a>
      </p>
  </div>
  <br>
</form>

<!-- footer 시작 -->
<footer>  
  <div class="footer-Background">
    <div class="footer-Left">
      <div class="footer-terms">
        <ul>
          <li>개인정보처리방침</li>
          <li>이용약관</li>
          <a href="service.html" style="text-decoration: none; color: white;"><li>서비스</li></a>
          <a href="center.html" style="text-decoration: none; color: white;"><li>고객센터</li></a>
        </ul>
      </div>

      <div class="footer-social-Icon">
        <a href="https://www.instagram.com/"><img src="../footer_Icon_Image/Instagram.png" class="footer-Instagram"/></a>
        <a href="https://section.blog.naver.com/"><img src="../footer_Icon_Image/Blog.png" class="footer-Blog"/></a>
        <a href="https://ko-kr.facebook.com/"><img src="../footer_Icon_Image/FaceBook.png" class="footer-FaceBook"/></a>
      </div>   
    </div>
    
    <div class="footer-developer">
      <p>
        (주)서일대학교 소프트웨어공학과 | 학과 사무실:02-490-7398 | 주소: 서울특별시 중랑구 용마산로90길 28
      </p>
      <p>
        이메일: 202103631@office.seoil.ac.kr | 디자인: 202103631 전채영
      </p>
      <p>
        개인정보보호책임자: 전채영 | 쥐어터트리는 자: 손예빈 | 지져진 자: 김민주 | 영혼이 소멸한 자: 박서영 | 건들면  무는 자: 박성주
      </p>
    </div>
  </div>
</footer>  <!-- footer 끝 -->
</body>
</html>