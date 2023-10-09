<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>로그인</title>
        <link rel="stylesheet" href="../css/Login.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/Login.js"></script>
    </head>
    <body>
    <?php
        include("Header.php");
      ?>

        <article> <!--로그인 시작-->
            <div id="TitleLogin">
                <h1>Login</h1>
            </div>
        
            <div class="choice">
                <div class="login-tab">
                    <div class="General-Login">일반 회원 로그인</div>
                    <div class="Author-Login">작가 로그인</div>
                </div>
                
                
                <div class="General-login-form">
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
                        <span class="Sign_Up"><a href="Member_register.php">회원가입</a></span>
                        </div>
                    </div>

                    <div class="social-login">
                        <button class="facebook">Facebook</button>
                        <button class="google">Google</button>
                        <button class="naver">Naver</button>
                        <button class="kakao">Kakao</button>
                    </div>
                </div>

                <div class="Author-login-form">
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
                        <span class="Sign_Up"><a href="Member_register.php">회원가입</a></span>
                        </div>
                    </div>

                    <div class="social-login">
                        <button class="facebook">Facebook</button>
                        <button class="google">Google</button>
                        <button class="naver">Naver</button>
                        <button class="kakao">Kakao</button>
                    </div>
                </div>

            </div>
        </article>  <!--로그인 끝-->

        
        <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
      </div>
    </footer>  <!-- footer 끝 -->
    </body>
</html>