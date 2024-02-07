<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/HTML/bidCheckProcess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>데일리 아틀리에</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script>

      $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
      });


      //로그아웃
      function logout() {
        console.log("hello");
        const data = confirm("로그아웃 하시겠습니까?");
        if (data) {
          location.href = "logoutProcess.php";
        }
      }

      function draw_new_Img(artType) {
        // 선택한 라디오 버튼의 id를 URL 매개변수로 전달
        window.location.href = 'index.php?N_art_type=' + artType;
    }

    function draw_end_Img(artType) {
        // 선택한 라디오 버튼의 id를 URL 매개변수로 전달
        window.location.href = 'index.php?E_art_type=' + artType;
    }


  
  </script>
</head>
<body>
    
    <article>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/HTML/Header.php";
        ?> 
    </article>

   <div class="section">
        <input type="radio" name="slide" id="slide01" checked>
        <input type="radio" name="slide" id="slide02">
        <input type="radio" name="slide" id="slide03">
        <div class="slidewrap">
		<ul class="slidelist">
			<!-- 슬라이드 영역 -->
			<li class="slideitem">
				<a>
					<div class="textbox">
                        <!--
						<h3>1 제목</h3>
						<p>설명</p>
                        -->
					</div>
					<img src="../img/main/001.jpg" height="50%">
				</a>
			</li>
			<li class="slideitem">
				<a>
					<div class="textbox">
                        <!--
						<h3>1 제목</h3>
						<p>설명</p>
                        -->
					</div>
					<img src="../img/main/002.jpg">
				</a>
			</li>
			<li class="slideitem">
				<a>
					<div class="textbox">
                        <!--
						<h3>1 제목</h3>
						<p>설명</p>
                        -->
					</div>
					<img src="../img/main/003.jpg">
				</a>
			</li class="slideitem">

			<!-- 좌,우 슬라이드 버튼 -->
			<div class="slide-control">
				<div>
					<label for="slide03" class="left"></label>
					<label for="slide02" class="right"></label>
				</div>
				<div>
					<label for="slide01" class="left"></label>
					<label for="slide03" class="right"></label>
				</div>
				<div>
					<label for="slide02" class="left"></label>
					<label for="slide01" class="right"></label>
				</div>
			</div>

		</ul>
		<!-- 페이징 -->
		<ul class="slide-pagelist">
			<li><label for="slide01"></label></li>
			<li><label for="slide02"></label></li>
			<li><label for="slide03"></label></li>
		</ul>
	    </div>
    </div>


    <div class="introduce">
        <div class="textbox_h">
            <h2>누구나 가볍게</h2>
            <h2>참여 할 수 있는</h2>
            <h2>미술 경매사이트</h2>
        </div>
        <div class="textbox_in">
            <p>당신의 작품을 선보일 기회가 적었나요?</p>
            <p>신인 작가와 기회가 적었던 작가들을 위한 사이트</p>
        </div>
        <div class="first_img">
            <img src="../img/main_intro_1.jpg" width="400px">
        </div>
        <div class="second_img">
            <img src="../img/main_intro_2.jpg" width="400px">
        </div>
    </div>
    <div class="bestPic">
        <div class="textbox_h">
            <h2>Best Art</h2>
            <p>최근 한 달 경매가가 가장 높은 작품을 선정했습니다</p>
        </div>
        <div class="bestlist">
            <ul>
                <li><a  href="../HTML/auction/best_1.html"><img src="../img/auction/best1.jpg" width="400px" class="bottom"></a></li>
                <li><a href="../HTML/auction/best_2.html"><img src="../img/auction/best2.png" width="400px" class="bottom"></a></li>
            </ul>
        </div>
        <div class="bestlist">
            <ul>
                <li><img src="../img/auction/best3.jpg" width="400px"></li>
                <li><img src="../img/auction/best4.jpg" width="400px"></li>
            </ul>
        </div>
    </div>




    <div class="new_pic">
    <div class="textbox_h">
        <h2>신규 작품</h2>
    </div>
    <div class="pick_btn">
        <label class="pick_new">
            <input type="radio" name="new_pic" id="all" onclick="draw_new_Img('all')" checked>
            <span>전체</span>
        </label>
        <label class="pick_new">
            <input type="radio" name="new_pic" id="digital" onclick="draw_new_Img('디지털')">
            <span>디지털</span>
        </label>
        <label class="pick_new">
            <input type="radio" name="new_pic" id="real" onclick="draw_new_Img('실물')">
            <span>실물</span>
        </label>
    </div>
</div>

        <?php
        if (isset($_GET['N_art_type']) && $_GET['N_art_type'] != 'all') {
            $art_type = $_GET['N_art_type'];

            // art_type을 기반으로 해당 유형의 작품을 데이터베이스에서 가져오는 쿼리 작성
            $sql = "SELECT a.*, i.img_path
                    FROM art AS a
                    JOIN image AS i ON a.art_img_id = i.art_img_id and a.art_status = 0
                    WHERE a.art_type = '$art_type'
                    ORDER BY a.registration_date DESC LIMIT 6";
        } else {
            // "전체"를 선택한 경우, 모든 작품을 가져오는 쿼리 작성
            $sql = "SELECT a.*, i.img_path
                    FROM art AS a
                    JOIN image AS i ON a.art_img_id = i.art_img_id and a.art_status = 0
                    ORDER BY a.registration_date DESC LIMIT 6";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="container">
                    <div class="box-container">';

            while ($row = $result->fetch_assoc()) {
                echo '<div class="box">
                        <div class="image">
                            <img src="' . $row["img_path"] . '" class="bottom">
                        </div>
                        <div class="content">
                            <h1>' . $row["name"] . '</h1>
                            <p>현재가: ' . $row["current_price"] . ' 원</p>';

                // 남은 시간 계산
                $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                $datetime2 = new DateTime($row['closing_time']);
                $interval = $datetime1->diff($datetime2);
                $remainingTime = $interval->format('%a일 %H시간 %i분 %s초');

                echo '<h2 id="remaining-time">' . $remainingTime . '</h2>
                    <div class="status">
                        <a href="../HTML/best_1.php?aid=' . $row['artId'] . '" class="btn">입찰</a>
                    </div>
                </div>
            </div>';
            }

            echo '</div>'; // .box-container 닫는 태그를 이동
        } else {
            echo '<div class ="No_Art">선택한 유형의 작품이 없습니다.</div>';
        }
        ?>
    </div>
</div>



    <div class="end_pic">
        <div class="textbox_h">
            <h2>종료 작품</h2>
        </div>
        <div class="pick_btn"> 
          <label class="pick_end">
              <input type="radio" name="end_pic" id="all" onclick="draw_end_Img('all')">
              <span>전체</span>
          </label>
          <label class="pick_end" >
              <input type="radio" name="end_pic" id="digital" onclick="draw_end_Img('디지털')">
              <span>디지털</span>
          </label>
          <label class="pick_end">
              <input type="radio" name="end_pic" id="real" onclick="draw_end_Img('실물')">
              <span>실물</span>
          </label>
        </div>
    </div>
        
        

        <?php
            if (isset($_GET['E_art_type']) && $_GET['E_art_type'] != 'all') {
                $art_type = $_GET['E_art_type'];

                // art_type을 기반으로 해당 유형의 작품을 데이터베이스에서 가져오는 쿼리 작성
                $sql = "SELECT a.*, i.img_path
                    FROM art AS a
                    JOIN image AS i ON a.art_img_id = i.art_img_id
                    WHERE a.art_status = 1 AND a.art_type = '$art_type'
                    ORDER BY RAND() LIMIT 6";
            } else {
                // "전체"를 선택한 경우, 모든 작품을 가져오는 쿼리 작성
                $sql = "SELECT a.*, i.img_path
                    FROM art AS a
                    JOIN image AS i ON a.art_img_id = i.art_img_id
                    WHERE a.art_status = 1
                    ORDER BY RAND() LIMIT 6";
            }

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="container">
                        <div class="box-container">';

                while ($row = $result->fetch_assoc()) {
                    echo '<div class="box">
                            <div class="image">
                                <img src="' . $row["img_path"] . '" class="bottom">
                            </div>
                            <div class="content">
                                <h1>' . $row["name"] . '</h1>
                                <p>낙찰가: ' . $row["current_price"] . ' 원</p>
                            </div>
                        </div>';
                }

                echo '</div></div>';
            } else {
                echo '<div class ="No_Art">선택한 유형의 작품이 없습니다.</div>';
            }
            ?>


        </div>
    </div>
   </article>

    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
    
    </script>
</body>
</html>