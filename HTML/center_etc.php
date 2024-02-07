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
        <span> 카테고리 : 기타 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>

    <div class = "accordion">
      <input type="checkbox" name="accordion" id = 'answer01'>
      <label for = "answer01">[기타] AI 그림도 판매가 가능한가요?<em></em></label>
        <div><p>
          AI 그림의 경우 판매가 불가하며 적발 시 사이트 이용에 제재가 가해질 수 있습니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[기타] 작가님을 후원하고 싶어요.<em></em></label>
        <div><p>
          작가님 후원은 낙찰금 지불 시 소정의 금액을 더 추가하여 결제하실 수 있습니다. 낙찰금 이상의 금액은 후원금으로 전달됩니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[기타] 디지털 그림을 샀는데 데이터 손실로 잃어버렸어요.<em></em></label>
        <div><p>
          1대 1 문의로 문의하시면 본인인증과 결제 확인 후 재전달을 도와드리겠습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[기타] 구입한 작품을 재판매 할 수 있나요?<em></em></label>
        <div><p>
          저작권의 문제로 재판매가 불가한 작품은 판매하실 수 없으며 재판매 적발 시 형사처벌이 이루어질 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[기타] 작품을 가게나 상업적인 곳에 이용해도 되나요?<em></em></label>
        <div><p>
          도용이 아니라면 전시하셔도 됩니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[기타] 작가가 직접 악플이나 과한 부정적 후기를 삭제할 수 있나요?<em></em></label>
        <div><p>
          직접 삭제는 불가하며 신고를 하시면 내부에서 논의 후 삭제 조치가 됩니다.
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
          $(".Header").load("../html/Header.html");
      });

      $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
      });
      </script>
</body>
</html>