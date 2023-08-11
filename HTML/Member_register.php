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
    <body>
      <header>    <!-- 헤더 시작-->
        <div class="Header">
        </div>
      </header>   <!-- 헤더 끝 -->

      <article>
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