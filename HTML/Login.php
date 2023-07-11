<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>일반회원 로그인</title>

        <link rel="stylesheet" href="../css/Login.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/js/header.js"></script>
    </head>
    <body>
      <header>    <!-- 헤더 시작-->
        <div class="Header">
          <div class="Logo">
            <a href="main.html"><img src="/img/Header_Image/Logo_2.png" /></a>
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

        <article> <!--로그인 시작-->
            <div id="TitleLogin">
                <h1>Login</h1>
            </div>
        
            <div class="choice">
                <div class="login-tab">
                    <div class="General_Login">일반 회원 로그인</div>
                    <div class="Author_Login">작가 로그인</div>
                </div>
                
                
                <div class="login-form">
                    <div class="input_infor">
                    <form method="POST" action="loginProcess.php">
                        <div>
                            <div id="form_Id">아이디</div>
                            <input type="text" id="input_Id" name="userId" placeholder="아이디를 입력하세요" required />
                        </div>
                        <div>
                            <div id="form_Pwd">비밀번호</div>
                            <input type="password" id="input_Pwd" name="password" placeholder="비밀번호를 입력하세요" />
                        </div>

                        <button class="btn_Login" type="submit">로 그 인</button>
                      </form>
                    </div>

                    <div class="account">
                        <div class="left">
                        <span class="Id_Find"><a href="#">아이디 찾기</a></span>
                        <span class="Pwd_Find"><a href="#">비밀번호 찾기</a></span>
                        </div>

                        <div class="right">
                        <span class="Sign_Up"><a href="Member_register.html">회원가입</a></span>
                        </div>
                    </div>

                    <div class="social-login">
                        <button type="button" style="background-color: rgb(239, 5, 5);">구글 아이디로 로그인</button>
                        <button type="button" style="background-color: rgb(2, 236, 18);">네이버 아이디로 로그인</button>
                        <button type="button" style="background-color: rgb(255, 208, 0);">카카오 아이디로 로그인</button>
                    </div>
                </div>
            </div>
        </article>  <!--로그인 끝-->

        
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
            <img src="../img/footer_Icon_Image/Instagram.png" class="footer-Instagram"/>
            <img src="../img/footer_Icon_Image/Blog.png" class="footer-Blog"/>
            <img src="../img/footer_Icon_Image/FaceBook.png" class="footer-FaceBook"/>
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