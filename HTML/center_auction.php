<!--고객센터의 배송 버튼 부분-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>고객센터</title>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/QnA.css"></link>
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
        <span> 카테고리 : 경매 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>

    <div class = "accordion">
      <input type="checkbox" name="accordion" id = 'answer01'>
      <label for = "answer01">[경매] 경매에 참여했다가 취소할 수 있나요?<em></em></label>
        <div><p>
          경매 참여를 취소할 수 있으며 이는 입찰한 작품에서 확인하실 수 있습니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[경매] 경매는 보통 며칠동안 진행되나요?<em></em></label>
        <div><p>
          작가님이 정하신 기간만큼 경매가 진행됩니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[경매] 미성년자도 경매에 참여할 수 있나요?<em></em></label>
        <div><p>
          미성년자의 경매 참여 시 보호자의 동의가 반드시 필요하며 지켜지지 않아 발생한 경매의 경우 입찰 및 낙찰이 취소될 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[경매] 작가도 경매에 참여할 수 있나요?<em></em></label>
        <div><p>
          작가 회원도 일반 회원과 같이 경매에 참여할 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[경매] 입찰금을 잘못 적었어요.<em></em></label>
        <div><p>
          입찰 취소 후 재입찰하실 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[경매] 포인트보다 높은 가격을 제시하고 나중에 충전하면 안되나요?<em></em></label>
        <div><p>
          포인트 이상의 가격을 제시할 수 없습니다.
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
          $(".Header").load("/html/Header.html");
        });

        $(document).ready(function(){
            $(".footer-Background").load("/html/Footer.html");
        });
      </script>

</body>
</html>