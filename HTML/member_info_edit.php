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
  <header>    <!-- 헤더 시작-->
    <div class="Header">
      <div class="Logo">
        <a href="main_Login.html"><img src="../img/Header_Image/Logo_2.png" /></a>
      </div>

      <div class="a12">
        <div class="Header-SignUp">
          <a href="Login.html">로그인</a>
          <a href="Member_register.html">회원가입</a>
          <a href="service.html">고객센터</a>
        </div>


        <div class="Header-catalogue">
          <!--카테고리 시작-->
          <nav>
            <ul id="gnb">
              <li class="dept1">
                <a href="#">이벤트</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="#">이벤트 안내</a></li>
                  <li class="dept2"><a href="#">당첨자 발표</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">경매</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="totalart.html">전체</a></li>
                  <li class="dept2"><a href="digitalArt.html">디지털</a></li>
                  <li class="dept2"><a href="analogart.html">실물</a></li>
                  <li class="dept2"><a href="#">작가별 작품</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">소개글</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="artist_introduce.html">작가소개</a></li>
                  <li class="dept2"><a href="#">개발자 소개</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">서비스</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="service.html">경매 진행방법</a></li>
                  <li class="dept2"><a href="Q_write.html">1:1문의</a></li>
                  <li class="dept2"><a href="Q_list.html">Q&A</a></li>
                </ul>
              </li>
            </ul>
          </nav>

          <!-- * 검색 영역 추가 * -->
          <div class="Header-search">
            <input type="text" />
            <button class="Header-search-Button">
              <img src="/img/Header_Image/search.png" />
            </button>
          </div>
        </div>
        <!--카테고리 끝-->
      </div>

      <div class="mobile">
        <a href="#" class="mobile-button">
          <div></div>
          <div></div>
          <div></div>
        </a>
      </div>
    </div>
    <div class="hd_bg"></div>
  </header>   <!-- 헤더 끝 -->

    <br>

    
    <div class="page_top">
      <span class="page_name">회원 정보 수정</span> 
      <p class="page_path">마이페이지 > 회원 정보 수정</p>
      <br>
      <hr class="hr_1">
    </div>

    
  <form action = "member_UpdateProcess.php" method = "post" id="update_form">
    <div>
        <img class="profile" src="../img/best1.jpg" name="profile_e">
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