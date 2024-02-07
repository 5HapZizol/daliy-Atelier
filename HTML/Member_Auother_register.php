<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>작가 회원 가입</title>
    <link rel="stylesheet" href="../css/Member_register.css">

    <script src="//code.jquery.com/jquery-latest.js"></script>
</head>

<!--본문-->
<body>
<?php
    include("Header.php");
?> 

<article>
    <div style="margin-top: 200px;">
        <div class="page_top">
            <span class="page_name">작가 회원가입</span>
            <br>
            <hr class="hr_1">
        </div>

        <form action="signupProcess.php" method="POST" id="A-signup-form">
            <input type="hidden" name="User_status" value="<?php echo $User_status = 1; ?>">
                
            <div class="box">
                <div class="container">
                    <p class="notice">
                        *은 필수 입력
                    </p>
                    <div class="wrapper">
                        <input type="text" placeholder="*아이디 입력" id="A_user_id" name="A_user_id"/>
                        <button type="button" name="id_check" id="id_check_btn">중복확인</button>
                    </div>
                    <p id="id_check_result"></p>

                    <p>
                        <div class="wrapper">
                            <input type="password" placeholder="*비밀번호 입력 (문자, 숫자, 특수문자 포함 8~20자)" id="password" name="password"/>
                        </div>
                    </p>

                    <p>
                        <div class= "wrapper">
                            <input type="password" placeholder="*비밀번호 재입력" id="password_check" name="password_check"/>
                        </div>
                    </p>

                    <br><br>

                    <p>
                        <div class="wrapper">
                            <input type="text" placeholder="*작가명 (특수문자 제외 10자 이내)" id="auother_nick" name="auother_nick"/>
                        </div>
                    </p>

                    <p>
                        <div class="wrapper">
                            <input type="text" placeholder="개인 홈페이지 링크" id="user_homepage" name="user_homepage"/>
                        </div>
                    </p>

                    <p>
                        <div class="wrapper">
                            <input type="password" placeholder="sns 아이디" id="sns_id" name="sns_id"/>
                        </div>
                    </p>

                    <br><br>

                    <p>
                        <div class="wrapper">
                            <input type="text" placeholder="*이름 (실명 필수)" id="user_name" name="user_name"/>
                        </div>
                    </p>

                    <p>
                        <div class="wrapper">
                            <input type="tel" placeholder="*전화번호" id="user_phone" name="user_phone"/>
                            <button>인증</button>
                        </div>
                    </p>

                    <p>
                        <div class="wrapper">
                            <input type="number" placeholder="*인증번호" id="Certification_Number" name="Certification_Number"/>
                            <button>확인</button>
                        </div>
                    </p>

                    <p>
                        <div class="wrapper">
                            <input type="text" placeholder="*이메일" id="user_email" name="user_email"/>
                        </div>
                    </p>

                    <br>
                    <br>
                    <p>
                        SMS 수신 동의 여부
                        <input type="radio" class="checked_btn" id="sns_ok" name="sns" value="ok" checked>
                        <label for="sns_ok">동의</label>
                        <input type="radio" class="checked_btn" id="sns_no" name="sns" value="no">
                        <label for="sns_no">비동의</label>
                    </p>

                    <p>
                        EMAIL 수신 동의 여부
                        <input type="radio" class="checked_btn" id="email_ok" name="email" value="ok" checked>
                        <label for="email_ok">동의</label>
                        <input type="radio" class="checked_btn" id="email_no" name="email" value="no">
                        <label for="email_no">비동의</label>
                    </p>

                    <button type="submit" id="register_btn">가입하기</button>
                </div>
            </div>
        </form>
    </div>
</article>

<!-- footer 시작 -->
<footer>
    <div class="footer-Background">

    </div>
</footer>
<!-- footer 끝 -->

<script>
$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
});

const A_user_id = document.querySelector("#A_user_id");
const idCheckBtn = document.querySelector("#id_check_btn");
const idCheckResult = document.querySelector("#id_check_result");

idCheckBtn.addEventListener("click", function(e) {
    e.preventDefault(); // 클릭 이벤트 기본 동작 중지

    const userId = A_user_id.value;
    if (userId.trim() === "") {
      alert("아이디를 입력하세요");
    } else {
        checkDuplicateId(userId);
    }
});

function checkDuplicateId(userId) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "check_duplicate_id_A.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          if (xhr.responseText === "duplicate") {
                // 중복된 아이디 메시지를 알림 창으로 표시
                alert("이미 사용 중인 아이디입니다. 다른 아이디를 선택해주세요.");
            } else if (xhr.responseText === "available") {
                // 사용 가능한 아이디 메시지를 알림 창으로 표시
                alert("사용 가능한 아이디입니다.");
            }
        }
    };
    xhr.send("A_user_id=" + userId);
}

</script>
</body>
</html>
