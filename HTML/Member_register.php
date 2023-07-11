<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원 가입</title>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">

        <link rel="stylesheet" href="../css/Member_register.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/js/header.js"></script>
    </head>
    <body>
      <header>    <!-- 헤더 시작-->
        <div class="Header">
          <div class="Logo">
            <a href="main_Login.html"><img src="/img/Header_Image/Logo_2.png" /></a>
          </div>
          <div class="a12">
            <div class="Header-SignUp">
              <a href="Login.html">로그인</a>
              <a href="Member_register.html">회원가입</a>
              <a href="center.html">고객센터</a>
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

      <h1>회원 가입</h1>
      <form action="signupProcess.php" method="POST" id="signup-form">
        <table class="id_pwd_table" style="border: 1px solid; border-collapse: collapse;">
            <tr>
                <td><input type="text" name="Userid" placeholder="아이디"></td>
                <td><input type="button" name="id_check" value="중복"></td> 
            </tr>
            <tr>
                <td colspan="2"><input type="password" id="password" placeholder="비밀번호"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" id="password-check" placeholder="비밀번호 확인"></td>
            </tr>
        </table>

        <table class="info_table" style="border: 1px solid; border-collapse: collapse;">
            <tr>
                <td colspan="2"><input type="text" id="name" placeholder="이름"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nickname" placeholder="닉네임"></td>
            </tr>
            <tr>
                <td><input type="text" id="tel" placeholder="휴대전화 번호"></td>
                <td><input type="button" name="#" value="인증"></td> 
            </tr>
            <tr>
                <td><input type="text" id="Certification_num" placeholder="인증번호"></td>
                <td><input type="button" id="Certification_check" value="확인"></td> 
            </tr>
            <tr>
                <td colspan="2"><input type="text" id="email" placeholder="이메일"></td>
            </tr>
        </table>
        <span class="radio_check">
            SNS 수신 동의 여부
            <input type="radio" id="sns_ok" name="sns" value="ok"
            checked>
            <label for="sns_ok">동의</label>
            <input type="radio" id="sns_no" name="sns" value="no">
          <label for="sns_no">비동의</label>
        </span>
        <span class="radio_check">
            EMAIL 수신 동의 여부
            <input type="radio" id="email_ok" name="email" value="ok"
            checked>
            <label for="email_ok">동의</label>
            <input type="radio" id="email_no" name="email" value="no">
          <label for="email_no">비동의</label>
        </span>
        <button type="button" id="register_btn">가입하기</button>
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

    
      <script>
        const signupForm = document.querySelector("#signup-form");
        const registerbtn = document.querySelector("#register_btn");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#password-check");
        registerbtn.addEventListener("click", function(e) {
          if(password.value&& password.value === passwordCheck.value){
                  
          signupForm.submit();
          }else{
              alert("비밀번호가 서로 일치하지 않습니다");
          }
        });
      </script>

    </body>
</html>