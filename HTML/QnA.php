<!DOCTYPE html>
<html lang="en">
<head>
    <title>고객센터</title>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-latest.js"></script>
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
      <label for = "answer01">[경매] 경매 진행 과정은 어떻게 되나요?<em></em></label>
        <div class = "QnA_answer"><p>
          경매 진행 과정은 작가님의 직접 입찰 후 낙찰, 지정된 기한의 최고가의 가격이 낙찰되는 순입니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[배송] 배송은 얼마나 걸리나요?<em></em></label>
        <div class = "QnA_answer"><p>
          배송사의 상황에 따라 최소 2일에서 최대 7일 정도 걸릴 수 있습니다. 상세 확인은 마이페이지의 배송 현황을 확인해주세요.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[포인트] 포인트 적립은 필수인가요?<em></em></label>
        <div class = "QnA_answer"><p>
          포인트 적립 후 경매 참여 시 입찰금은 적립된 금액의 최대치를 넘길 수 없으므로 포인트 적립은 필수입니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[작품등록] 작품 등록은 일반 회원은 할 수 없나요?<em></em></label>
        <div class = "QnA_answer"><p>
          일반 회원은 작품 등록이 불가하며 작가 회원만 작품 등록이 가능합니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[포인트] 문화상품권으로 포인트 충전이 가능한가요?<em></em></label>
        <div class = "QnA_answer"><p>
          포인트 적립 시 문화상품권을 이용한 적립은 불가합니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[회원정보] 작가 회원에서 일반 회원으로 변경할 수 있나요?<em></em></label>
        <div class = "QnA_answer"><p>
        작가 회원에서 일반 회원으로의 전환이 가능합니다.
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