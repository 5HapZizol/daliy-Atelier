<!--고객센터의 배송 버튼 부분-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>고객센터</title>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <link type="text/css" rel="stylesheet" href="/css/QnA.css"></link>

    
</head>

<!--본문-->
<body>
<?php
      include("Header.php");
    ?>

   <article>
     <!--본문 시작-->
  <div style="margin-top: 200px;">
    
    <div class="page_top">
      <span class="page_name">고객센터</span>
      <p class="page_path">서비스 > Q&A</p>
      <br>
      <hr class="hr_1">
  </div>

    <h3_center>
        <h3>자주 묻는 질문(FAQ)</h3>
    </h3_center>

    <div class = "text_hr">
        고객님이 자주 찾으시는 질문과 답변을 빠르게 확인하실 수 있습니다.
        <br>찾으시는 질문이 없거나 더 자세한 문의를 원하시면 온라인 상담을 이용해주시기 바랍니다.
    </div>
        
    <div class = "btn-group">
        <nav class="btn_catalogue">
          <p>
            <button class="select_btn" onclick="location.href='QnA.php'">전체</button>
            <button class="select_btn" onclick="location.href='center_delivery.php'">배송</button>
            <button class="select_btn" onclick="location.href='center_point.php'">포인트</button>
            <button class="select_btn" onclick="location.href='center_author.php'">작가등록</button>
            <br>
            <button class="select_btn" onclick="location.href='center_auction.php'">경매</button>
            <button class="select_btn" onclick="location.href='center_work.php'">작품등록</button>
            <button class="select_btn" onclick="location.href='center_member.php'">회원정보</button>
            <button class="select_btn" onclick="location.href='center_etc.php'">기타</button>
          </p>
        </nav>
    </div>

    <div class ="search">
        <select>
            <option value="1">전체</option>
            <option value="2">제목</option>
            <option value="3">내용</option>
        </select>

        <input type="text" placeholder="검색어 입력">

        <button style="
                    background-color: rgb(226, 226, 226);
                    width: 4em;
                    height: 2em;
                    border: none;
                    padding: 3px 3px;
                    margin: 0.5em 0.5em;">
                    <a herf="#">검색</a></button>
    </div>

    <div class="text_hr_1">
        <span> 카테고리 : 포인트 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>

    <div class = "accordion">
      <input type="checkbox" name="accordion" id = 'answer01'>
      <label for = "answer01">[포인트] 포인트 충전은 어떻게 하나요?<em></em></label>
        <div><p>
          마이페이지 내의 적립금 옆 충전 버튼으로 하실 수 있습니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[포인트] 포인트 적립은 필수인가요?<em></em></label>
        <div><p>
        포인트 적립 후 경매 참여 시 입찰금은 적립된 금액의 최대치를 넘길 수 없으므로 포인트 적립은 필수입니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[포인트] 경매로 받은 포인트는 언제 출금할 수 있나요?<em></em></label>
        <div><p>
          10만원 이상의 수입이 발생 시 출금할 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[포인트] 문화상품권으로 포인트 충전이 가능한가요?<em></em></label>
        <div><p>
         포인트 적립 시 문화상품권을 이용한 적립은 불가합니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[포인트] 적립된 포인트를 환불 할 수 있나요?<em></em></label>
        <div><p>
          환불 시 5% 수수료가 차감된 금액만큼 환불됩니다. 환불은 카드사의 상황에 따라 3일 이상 소요될 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[포인트] 많은 금액을 충전해두고 싶은데 여러번 충전해야되나요?<em></em></label>
        <div><p>
          직접 입력한 금액으로도 충전이 가능합니다.
        </p></div>
    </div>

    <div class="Artist-Introduce-Button">
      <button>1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>5</button>
      <button>6</button>
      <button>7</button>
      <button>8</button>
      <button>9</button>
      <button>10</button>
      <button>></button>
      <button>>></button>
    </div>

   </article>


    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
          
        </div>
      </footer>  <!-- footer 끝 -->

      <script>
        $(document).ready(function(){
          $(".Header").load("../HTML/Header.html");
      });

      $(document).ready(function(){
          $(".footer-Background").load("../HTML/Footer.html");
      });
      </script>
</body>
</html>