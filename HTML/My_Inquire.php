<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/My_Inquire.css">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="../js/My_Inquire.js"></script>
    <title>문의 사항</title>
</head>
<body>
<?php
      include("Header.php");
    ?> 

    <article>
    <div style="margin-top: 200px;">
       
       <div class="page_top">
         <span class="page_name">문의 사항</span>
         <br>
       </div>

        <div class="Tap-Choice">
            <div class="Inquire-Tap-btn"><button>질문전체</button><span class="Tap-animation"></span></div>
            <div class="Inquire-Tap-btn"><button>답변완료</button><span class="Tap-animation"></span></div>
        </div>
        <hr>

        <div class = "accordion">
         <input type="checkbox" name="accordion" id = 'answer01'>
         <label for = "answer01">Q. 배송현황은 어디서 확인할 수 있나요?<em></em></label>
            <div class = "QnA_answer"><p>
            마이페이지 > 주문 조회에서 확인하실 수 있습니다.
            </p></div>

         <input type="checkbox" name="accordion" id = 'answer02'>
         <label for = "answer02">Q. 적립된 포인트를 반환 받을 수 있나요?<em></em></label>
            <div class = "QnA_answer"><p>
            포인트 반환 시 소정의 수수료가 발생할 수 있으며 수수료를 제외한 금액이 환급됩니다.
            </p></div>
        </div>
        

    </article>

    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
        </div>
      </footer>  <!-- footer 끝 -->
</body>
</html>