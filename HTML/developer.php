<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/developer.css">  
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <title>개발자 소개</title>
</head>
<body>
<?php
      include("Header.php");
      
    ?>

  <article>

  <br> 
  <div>
    <div class="page_top">
        <span class="page_name">개발자 소개</span>
        <hr class="hr_1">
    </div><!-- page top -->

    <div class="gap"></div>

    <!-- 라디오 버튼과 각 메뉴 div 요소 추가 -->
  <div class="rdochang">
    <input type="radio" id="menu1rdo" name="menu" value="menu1" checked >
    <label for="menu1rdo">손예빈</label>
    
    <span class="separator"></span>

    <input type="radio" id="menu2rdo" name="menu" value="menu2">
    <label for="menu2rdo">전채영</label>
    
    <span class="separator"></span>

    <input type="radio" id="menu3rdo" name="menu" value="menu3">
    <label for="menu3rdo">김민주</label>

    <span class="separator"></span>

    <input type="radio" id="menu4rdo" name="menu" value="menu4">
    <label for="menu4rdo">박성주</label>
    
    <span class="separator"></span>

    <input type="radio" id="menu5rdo" name="menu" value="menu5">
    <label for="menu5rdo">박서영</label>
  
    <div id="menu1" class="menu">
      <span><img src="../img/developer/yb.jpg"></span>

      <div class="de_box">
        <div class="de_name">손예빈(SON YE BIN)</div>
        <div class="gap_1"></div>
        <div class="de_edu">서일대 소프트웨어공학과 3학년</div>
        <div class="gap_1"></div>
        <div class="de_nu">202103616</div>
        <div class="gap_1"></div>
        <div class="de_rol">조장, 기획자, 백엔드, 프론트</div>
        <div class="gap_1"></div>
        <div class="de_com">웃겨야한다는압박감에 해치웠나?Syntax error or access violation: 1064 You have an error in your SQL syntax</div>
      </div><!--de_box-->

      <div class="de1_box" style=" background-color: palevioletred;"></div>
    </div>
    

    <div id="menu2" class="menu">
      <span><img src="../img/developer/cy.jpg"></span>

      <div class="de_box">
        <div class="de_name">전채영(JEON CHAE YOUNG)</div>
        <div class="gap_1"></div>
        <div class="de_edu">서일대 소프트웨어공학과 3학년</div>
        <div class="gap_1"></div>
        <div class="de_nu">202103631</div>
        <div class="gap_1"></div>
        <div class="de_rol">기획자, 디자인, 백엔드, 프론트</div>
        <div class="gap_1"></div>
        <div class="de_com">졸작수고하셨습니다. 남은학기 파이팅!</div>
      </div><!--de_box-->

      <div class="de1_box" style=" background-color:#4B89DC;"></div>
    </div>
    
    <div id="menu3" class="menu">
      <span><img src="../img/developer/mj.jpg"></span>
      <div class="de_box">
        <div class="de_name">김민주(KIM MIN JUE)</div>
        <div class="gap_1"></div>
        <div class="de_edu">서일대 소프트웨어공학과 3학년</div>
        <div class="gap_1"></div>
        <div class="de_nu">202103622</div>
        <div class="gap_1"></div>
        <div class="de_rol">기획자, 디자인, 프론트</div>
        <div class="gap_1"></div>
        <div class="de_com">작업을 하면서 스트레스도 많이 많고 팀원들과 의견충돌이 있었지만 저에게 꼭 필요한 경험이었고 이를 통해 조금은 성장했다는 생각이 드네요:) 남은 기간 조금 더 힘내봅시다 화이팅~~</div>
      </div><!--de_box-->

      <div class="de1_box" style=" background-color:#00AC28;"></div>
    </div>

    <div id="menu4" class="menu">
      <span><img src="../img/developer/sz.jpg"></span>
      <div class="de_box">
        <div class="de_name">박성주(PARK SUNG JU)</div>
        <div class="gap_1"></div>
        <div class="de_edu">서일대 소프트웨어공학과 3학년</div>
        <div class="gap_1"></div>
        <div class="de_nu">202103607 </div>
        <div class="gap_1"></div>
        <div class="de_rol">기획자, 디자인, 프론트</div>
        <div class="gap_1"></div>
        <div class="de_com">한학기 반이라는 짧지않은 시간동안 함께한 팀원들과 의견을 듣고 수렴하는 과정에서 몰랐던 팀원들의 모습을 볼 수 있어 좋았고 나의 부족한 면들이 한 단계 성장한 기분을 느꼈습니다. 울고싶은 심정으로 컴퓨터앞에 앉은 날도 있었지만 후회는 없는 경험이었습니다. 졸업작품에 참여했던 팀원들과 다른 학우분들도 너무 수고많았고 좋은 경험이었습니다.</div>
      </div><!--de_box-->

      <div class="de1_box" style=" background-color:#9370db;"></div>
    </div>
    
    <div id="menu5" class="menu">
      <span><img src="../img/developer/sy.jpg"></span>
      <div class="de_box">
        <div class="de_name">박서영(PARK SEO YOUNG)</div>
        <div class="gap_1"></div>
        <div class="de_edu">서일대 소프트웨어공학과 3학년</div>
        <div class="gap_1"></div>
        <div class="de_nu">202106028</div>
        <div class="gap_1"></div>
        <div class="de_rol">기획자, 디자인, 프론트</div>
        <div class="gap_1"></div>
        <div class="de_com">졸작을 핑계로 듀얼 모니터 장만했습니다. 졸작 짱!</div>
      </div><!--de_box-->

      <div class="de1_box" style=" background-color:#808080;"></div>
    </div>

</div><!--라디오창-->

<div class="gap2"></div>

    
<footer>  <!-- footer 시작 -->
  <div class="footer-Background">
    
  </div>
</footer>  <!-- footer 끝 -->

<script>
$(document).ready(function(){
    $(".footer-Background").load("../HTML/Footer.html");
});
</script>
</body>
</html>