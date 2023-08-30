<!--고객센터의 배송 버튼 부분-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>고객센터</title>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link type="text/css" rel="stylesheet" href="/css/QnA.css"></link>

    
</head>

<!--본문-->
<body>
  <header>  <!-- 헤더 시작-->
    <div class="Header">
      </div>
  </header>
  <!-- 헤더 끝 -->

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
            <button class="select_btn" onclick="location.href='QnA.html'">전체</button>
            <button class="select_btn" onclick="location.href='center_delivery.html'">배송</button>
            <button class="select_btn" onclick="location.href='center_point.html'">포인트</button>
            <button class="select_btn" onclick="location.href='center_author.html'">작가등록</button>
            <br>
            <button class="select_btn" onclick="location.href='center_auction.html'">경매</button>
            <button class="select_btn" onclick="location.href='center_work.html'">작품등록</button>
            <button class="select_btn" onclick="location.href='center_member.html'">회원정보</button>
            <button class="select_btn" onclick="location.href='center_etc.html'">기타</button>
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
      <input type="radio" name="accordion" id = 'answer01'>
      <label for = "answer01">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>

      <input type="radio" name="accordion" id = 'answer02'>
      <label for = "answer02">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>

      <input type="radio" name="accordion" id = 'answer03'>
      <label for = "answer03">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="radio" name="accordion" id = 'answer04'>
      <label for = "answer04">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="radio" name="accordion" id = 'answer05'>
      <label for = "answer05">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
      
      <input type="radio" name="accordion" id = 'answer06'>
      <label for = "answer06">[포인트] 자주 들어오는 질문을 넣는 곳<em></em></label>
        <div><p>
          자주 묻는 질문의 응답을 적어두는 곳
        </p></div>
    </div>

    <div class = "ques">
      <div class="btn-group">
          <nav class="btn_catalogue">
              <go_to_btn_search> 1 </go_to_btn_search>
              <go_to_btn_search> 2 </go_to_btn_search>
              <go_to_btn_search> 3 </go_to_btn_search>
              <go_to_btn_search> 4 </go_to_btn_search>
              <go_to_btn_search> 5 </go_to_btn_search>
              <go_to_btn_search> 6 </go_to_btn_search>
              <go_to_btn_search style="background-color: #bbbbbb;"> > </go_to_btn_search>
              <go_to_btn_search style="background-color: #646464;"> >> </go_to_btn_search>
          </nav>
      </div>
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