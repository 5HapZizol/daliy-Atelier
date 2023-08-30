<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원 가입</title>
        <link rel="stylesheet" href="../css/Member_register.css">

        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>

    <!--본문-->
    <body>
      <header>    <!-- 헤더 시작-->
        <div class="Header">
        </div>
      </header>   <!-- 헤더 끝 -->

      <article>
        <div style="margin-top: 200px;">
          <div class="page_top">
            <span class="page_name">회원가입</span>
            <br>
            <hr class="hr_1">
          </div>

      
          <div class = "box">
              
            <div class = "container">
              <div class = "wrapper">
                <input type = "text" name = "Userid" placeholder="아이디 입력"/>
                <button name = "id_check">중복확인</button>
              </div>

              <p>
              <div class = "wrapper">
                <input type = "password" placeholder = "비밀번호 입력 (문자, 숫자, 특수문자 포함 8~20자)" id = "password"/>
              </div>
              </p>

              <p>
              <div class = "wrapper">
                <input type = "password" placeholder = "비밀번호 재입력" id = "password_check"/>
              </div>
              </p>

              <br><br>

              <p>
              <div class = "wrapper">
                <input type = "text" placeholder = "이름"/>
              </div>
              </p>

              <p>
              <div class = "wrapper">
                <input type = "text" placeholder = "닉네임"/>
              </div>
              </p>

              <p>
              <div class = "wrapper">
                <input type = "tel" placeholder = "전화번호"/>
                <button>인증</button>
              </div>
              </p>

              <p>
                <div class = "wrapper">
                <input type = "number" placeholder = "인증번호"/>
                <button>확인</button>
                </div>
              </p>

              <p>
                <div class = "wrapper">
                  <input type = "text" placeholder = "이메일" />
                </div>
              </p>

              <br>
              <br>
              <p>
                SMS 수신 동의 여부
                <input type = "radio" class = "checked_btn" id = "sns_ok" name = "sns" value = "ok" checked>
                  <label for="sns_ok">동의</label>
                  <input type="radio" class = "checked_btn" id="sns_no" name="sns" value="no">
                <label for="sns_no">비동의</label>
              </p>

              <p>
                EMAIL 수신 동의 여부
                  <input type="radio" class = "checked_btn" id="email_ok" name="email" value="ok"
                  checked>
                  <label for="email_ok">동의</label>
                  <input type="radio" class = "checked_btn" id="email_no" name="email" value="no">
                <label for="email_no">비동의</label>
              </p>

              <button type = "button" id = "register_btn">가입하기</button>
            </div>
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