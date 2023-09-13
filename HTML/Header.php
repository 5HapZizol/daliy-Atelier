<?php
  ini_set('display_errors','0');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/header.js"></script>
    <title>헤더</title>
    <script>

      //로그아웃
      function logout() {
        console.log("hello");
        const data = confirm("로그아웃 하시겠습니까?");
        if (data) {
          location.href = "logoutProcess.php";
        }
      }
    </script>
</head>
<body>
    <header>    <!-- 헤더 시작-->
        <div class="Header">
          <div class="Logo">
            <a href="main.php"><img src="/img/Header_Image/Logo_2.png" /></a>
          </div>
    
          <div class="a12">
            <div class="Header-SignUp">
              <?php
                if (isset($_SESSION['user'])) { //로그인 되었을 시
              ?>
                <a onclick="logout()">로그아웃</a>
                <a href="#">구매 현황</a>
                <a href="MyPage.php">마이페이지</a>
              <?php
              } else {  //로그인이 안되었을 시
              ?>
                <a href="Login.php">로그인</a>
                <a href="Member_register.php">회원가입</a>
                <a href="center_author.php">고객센터</a>
              <?php
              }
              ?>
            </div>
    
            <div class="Header-catalogue">
              <!--카테고리 시작-->
              <nav>
                <ul id="gnb">
                  <li class="dept1">
                    <a href="#">공지사항</a>
                    <ul class="inner-menu">
                      <li class="dept2"><a href="notice.php">공지 사항</a></li>
                      <li class="dept2"><a href="event.php">이벤트 안내</a></li>
                    </ul>
                  </li>
    
                  <li class="dept1">
                    <a href="#">경매</a>
                    <ul class="inner-menu">
                      <li class="dept2"><a href="totalart.php">전체</a></li>
                      <li class="dept2"><a href="digitalArt.php">디지털</a></li>
                      <li class="dept2"><a href="analogart.php">실물</a></li>
                      <li class="dept2"><a href="#">작가별 작품</a></li>
                    </ul>
                  </li>
    
                  <li class="dept1">
                    <a href="#">소개글</a>
                    <ul class="inner-menu">
                      <li class="dept2"><a href="artist_introduce.php">작가소개</a></li>
                      <li class="dept2"><a href="#">개발자 소개</a></li>
                    </ul>
                  </li>
    
                  <li class="dept1">
                    <a href="#">서비스</a>
                    <ul class="inner-menu">
                      <li class="dept2"><a href="Information_Use.php">경매 진행방법</a></li>
                      <li class="dept2"><a href="QnA.php">고객센터</a></li>
                      <li class="dept2"><a href="Q_list.php">Q&A</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
    
              <!-- * 검색 영역 추가 * -->
              <div class="Header-search">
                <input type="text" />
                <button class="Header-search-Button">
                  <img src="../img/Header_Image/search.png" />
                </button>
              </div>
            </div>
            <!--카테고리 끝-->
          </div>
    
          <div class="mobile">
            <a href="#" class="mobile-button">
              <div></div>
              <div></div>
              <div></div>
            </a>
          </div>
        </div>
        <div class="hd_bg"></div>
      </header>   <!-- 헤더 끝 -->
</body>
</html>