<!DOCTYPE html>
<html lang="en">
<head>
    <title>고객센터</title>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="../css/QnA.css">
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

    <div id = "conatiner">
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
    </div>
    <div class="text_hr_1">
        <span> 카테고리 : 전체 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>


    <div class = "accordion">
      <input type="checkbox" name="accordion" id = 'answer01'>
      <label for = "answer01">[경매] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[배송] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[작품등록] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[회원정보] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div class = "QnA_answer"><p>
          자주 묻는 질문의 응답을 적어두는 곳
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
          $(".footer-Background").load("../html/Footer.html");
      });
      </script>
</body>
</html>