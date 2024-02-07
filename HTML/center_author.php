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
        <span> 카테고리 : 작가등록 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>

    <div class = "accordion">
      <input type="checkbox" name="accordion"id = 'answer01'>
      <label for = "answer01">[작가등록] 아무나 작가 등록을 할 수 있나요?<em></em></label>
        <div><p>
          작가 등록은 누구나 할 수 있습니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[작가등록] 작가 등록이 안돼요.<em></em></label>
        <div><p>
          해당 사항은 1대 1 문의하기로 문의해주시길 바랍니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[작가등록] 작가 등록을 취소하고 싶은데 어떻게 하는지 모르겠어요.<em></em></label>
        <div><p>
          마이페이지의 회원 정보 수정에서 수정하실 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[작가등록] 미성년자도 작가 등록을 할 수 있나요?<em></em></label>
        <div><p>
          보호자의 동의와 인증이 있으면 할 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[작가등록] 작가 등록 시 수수료가 드나요?<em></em></label>
        <div><p>
          데일리 아틀리에서의 작가 등록 시 수수료가 발생하지 않습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[작가등록] 작가 회원 유지 조건이 있나요?<em></em></label>
        <div><p>
          가입일 기준 3개월 이상 작품 업로드가 없을 시 이용에 제한이 있을 수 있습니다.
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