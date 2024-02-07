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
        <span> 카테고리 : 작품 </span>
        
        <span style="float: right;"> 총 n개</span>
    </div>

    <div class = "accordion">
      <input type="checkbox" name="accordion" id = 'answer01'>
      <label for = "answer01">[작품등록] 작품 등록이 안돼요.<em></em></label>
        <div><p>
          일시적인 사이트 오류일 수 있으니 로그아웃 후 다시 시도해주시길 바랍니다. 그럼에도 지속적인 오류 발생 시 1대 1 문의하기를 이용해주시길 바랍니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer02'>
      <label for = "answer02">[작품등록] 본인/제3자 그림이 도용된 AI 그림을 발견했어요.<em></em></label>
        <div><p>
          입찰 화면에서 신고하기 버튼 클릭 후 기타 작성란에 피해자 개인 연락처를 작성해주시고 신고를 하시면 빠른 조치를 취해드릴 수 있습니다.
        </p></div>

      <input type="checkbox" name="accordion" id = 'answer03'>
      <label for = "answer03">[작품등록] 이미 등록한 작품을 내리고 싶어요.<em></em></label>
        <div><p>
          1대 1 문의를 통해 등록한 작품을 내릴 수 있습니다. 다만 낙찰이 끝난 작품은 삭제가 안되는 점 유의해주시길 바랍니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer04'>
      <label for = "answer04">[작품등록] 작품 등록을 했는데 사진이 이상하게 나와요.<em></em></label>
        <div><p>
          사진 크기가 너무 크거나 작을 경우 제대로 보이지 않을 수 있습니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer05'>
      <label for = "answer05">[작품등록] 작품 설명에 아무것도 적지 않아도 되나요?<em></em></label>
        <div><p>
          작품 설명란에 작품 설명은 필수입니다.
        </p></div>
      
      <input type="checkbox" name="accordion" id = 'answer06'>
      <label for = "answer06">[작품등록] 작품 등록은 일반 회원은 할 수 없나요?<em></em></label>
        <div><p>
        일반 회원은 작품 등록이 불가하며 작가 회원만 작품 등록이 가능합니다.
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