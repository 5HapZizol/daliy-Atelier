<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>일반 회원 가입</title>
        <link rel="stylesheet" href="../css/Member_register.css">

        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>

    <!--본문-->
    <body>
    <?php
        include("Header.php");
     ?>

      <article>
        <div style="margin-top: 200px;">
          <div class="page_top">
            <span class="page_name">회원가입</span>
            <br>
            <hr class="hr_1">
          </div>

          
          <form action="signupProcess.php" method="POST" id="signup-form">
          <input type="hidden" name="User_status" value="<?php echo $User_status = 0; ?>">

          <div class = "box">
              
            <div class = "container">
                <div class = "wrapper">
                  <input type = "text" name = "user_id" placeholder="*아이디 입력" id = "user_id"/>
                  <button name="id_check" id="id_check_btn">중복확인</button>
                    </div>
                    <p id="id_check_result"></p>

                <p>
                <div class = "wrapper">
                  <input type = "password" placeholder = "*비밀번호 입력 (문자, 숫자, 특수문자 포함 8~20자)"  name="password" id="password" />
                </div>
                </p>

                <p>
                <div class = "wrapper">
                  <input type = "password" placeholder = "*비밀번호 재입력" id = "password-check"/>
                </div>
                </p>

                <br><br>

                <p>
                <div class = "wrapper">
                  <input type = "text" placeholder = "*이름 (실명 필수)"  id="name" name="name" />
                </div>
                </p>

                <p>
                <div class = "wrapper">
                  <input type = "text" placeholder = "*닉네임" name="nickname" />
                </div>
                </p>

                <p>
                <div class = "wrapper">
                  <input type = "tel" placeholder = "*전화번호" name="tel"/>
                  <button>인증</button>
                </div>
                </p>

                <p>
                  <div class = "wrapper">
                  <input type = "number" placeholder = "*인증번호" id = "Certification_Number"/>
                  <button>확인</button>
                  </div>
                </p>

                <p>
                  <div class = "wrapper">
                    <input type = "text" placeholder = "*이메일"  id="email"/>
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

              <button type="submit" id="register_btn">가입하기</button>
            </div>
        </div>
          
        </form>
      </article>

      <!-- footer 시작 -->
      <footer>  
        <div class="footer-Background">
          
        </div>
      </footer>  <!-- footer 끝 -->

    
      <script>
$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
});

const user_id_input = document.querySelector("#user_id");
const user_id_check_btn = document.querySelector("#id_check_btn");
const user_id_check_result = document.querySelector("#id_check_result");

user_id_check_btn.addEventListener("click", function(e) {
    e.preventDefault();

    const userId = user_id_input.value;
    if (userId.trim() === "") {
        alert("아이디를 입력하세요");
    } else {
        checkDuplicateUserId(userId);
    }
});

function checkDuplicateUserId(userId) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "check_duplicate_id.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText === "duplicate") {
                alert("이미 사용 중인 아이디입니다. 다른 아이디를 입력해주세요.");
            } else if (xhr.responseText === "available") {
                alert("사용 가능한 아이디입니다.");
            }
        }
    };
    xhr.send("user_id=" + userId);
}

      </script>

    </body>
</html>