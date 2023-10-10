<?php
session_start();
include 'bidCheckProcess.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>데일리 아틀리에</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
      $(document).ready(function(){
          $(".Header").load("../html/Header.html");
      });

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

      //이미지 바뀌는 코드
      function draw_new_Img(obj) {
        var new_img1 = document.getElementById("new_img1");
        var new_img2 = document.getElementById("new_img2");
        var new_img3 = document.getElementById("new_img3");
        var new_img4 = document.getElementById("new_img4");
        var new_img5 = document.getElementById("new_img5");
        var new_img6 = document.getElementById("new_img6");
        switch(obj.id){
            case "all" :
                new_img1.src = "../img/auction/new_1.jpg";
                new_img1.style.width = "70%";
                new_img2.src = "../img/auction/new_2.jpg";
                new_img2.style.width = "70%";
                new_img3.src = "../img/auction/new_3.jpg";
                new_img3.style.width = "70%";
                new_img4.src = "../img/auction/new_4.png";
                new_img4.style.width = "70%";
                new_img5.src = "../img/auction/new_5.png";
                new_img5.style.width = "70%";
                new_img6.src = "../img/auction/new_6.png";
                new_img6.style.width = "70%";

                document.getElementById('new_title1').innerText = "엎질러진 자연";
                document.getElementById('new_title2').innerText = "노을";
                document.getElementById('new_title3').innerText = "목도리냥";
                document.getElementById('new_title4').innerText = "우리 집 앞";
                document.getElementById('new_title5').innerText = "멍때림";
                document.getElementById('new_title6').innerText = "골목";

                document.getElementById('new_price1').innerText = "현재가: 209,001 원";
                document.getElementById('new_price2').innerText = "현재가: 360,064 원";
                document.getElementById('new_price3').innerText = "현재가: 278,200 원";
                document.getElementById('new_price4').innerText = "현재가: 459,768 원";
                document.getElementById('new_price5').innerText = "현재가: 203,200 원";
                document.getElementById('new_price6').innerText = "현재가: 203,200 원";

                document.getElementById('new_time1').innerText = "68:49:12";
                document.getElementById('new_time2').innerText = "67:33:57";
                document.getElementById('new_time3').innerText = "65:04:28";
                document.getElementById('new_time4').innerText = "62:39:39";
                document.getElementById('new_time5').innerText = "68:49:12";
                document.getElementById('new_time6').innerText = "68:49:12";
                break;
            case "digital" :
                new_img1.src = "../img/auction/new_7.jpg";
                new_img1.style.width = "70%";
                new_img2.src = "../img/auction/new_8.png";
                new_img2.style.width = "70%";
                new_img3.src = "../img/auction/new_9.png";
                new_img3.style.width = "70%";
                new_img4.src = "../img/auction/new_10.jpg";
                new_img4.style.width = "70%";
                new_img5.src = "../img/auction/new_11.jpg";
                new_img5.style.width = "70%";
                new_img6.src = "../img/auction/new_12.png";
                new_img6.style.width = "70%";

                document.getElementById('new_title1').innerText = "이게 왜 안 바뀌냐";
                document.getElementById('new_title2').innerText = "산장";
                document.getElementById('new_title3').innerText = "못";
                document.getElementById('new_title4').innerText = "모래성";
                document.getElementById('new_title5').innerText = "안개";
                document.getElementById('new_title6').innerText = "가을";
                
                document.getElementById('new_price1').innerText = "현재가: 232,001 원";
                document.getElementById('new_price2').innerText = "현재가: 563,452 원";
                document.getElementById('new_price3').innerText = "현재가: 315,680 원";
                document.getElementById('new_price4').innerText = "현재가: 982,634 원";
                document.getElementById('new_price5').innerText = "현재가: 189,026 원";
                document.getElementById('new_price6').innerText = "현재가: 134,893 원";
                
                document.getElementById('new_time1').innerText = "31:23:45";
                document.getElementById('new_time2').innerText = "21:36:81";
                document.getElementById('new_time3').innerText = "81:03:45";
                document.getElementById('new_time4').innerText = "91:78:27";
                document.getElementById('new_time5').innerText = "11:22:22";
                document.getElementById('new_time6').innerText = "19:23:21";
                break;
            case "real" :
                new_img1.src = "../img/auction/new_13.png";
                new_img1.style.width = "70%";
                new_img2.src = "../img/auction/new_14.png";
                new_img2.style.width = "70%";
                new_img3.src = "../img/auction/new_15.jpg";
                new_img3.style.width = "70%";
                new_img4.src = "../img/auction/new_16.png";
                new_img4.style.width = "70%";
                new_img5.src = "../img/auction/new_17.png";
                new_img5.style.width = "70%";
                new_img6.src = "../img/auction/new_18.png";
                new_img6.style.width = "70%";
                
                document.getElementById('new_title1').innerText = "자연앨범";
                document.getElementById('new_title2').innerText = "이른가을";
                document.getElementById('new_title3').innerText = "녹색";
                document.getElementById('new_title4').innerText = "정원";
                document.getElementById('new_title5').innerText = "오";
                document.getElementById('new_title6').innerText = "짱";
                
                document.getElementById('new_price1').innerText = "현재가: 234,532 원";
                document.getElementById('new_price2').innerText = "현재가: 132,142 원";
                document.getElementById('new_price3').innerText = "현재가: 131,242 원";
                document.getElementById('new_price4').innerText = "현재가: 154,323 원";
                document.getElementById('new_price5').innerText = "현재가: 189,075 원";
                document.getElementById('new_price6').innerText = "현재가: 678,322 원";
                
                document.getElementById('new_time1').innerText = "12:31:21";
                document.getElementById('new_time2').innerText = "11:11:11";
                document.getElementById('new_time3').innerText = "89:16:42";
                document.getElementById('new_time4').innerText = "13:65:23";
                document.getElementById('new_time5').innerText = "81:73:42";
                document.getElementById('new_time6').innerText = "67:23:21";
                break;
        }
      }

      function draw_end_Img(obj) {
        var end_img1 = document.getElementById("end_img1");
        var end_img2 = document.getElementById("end_img2");
        var end_img3 = document.getElementById("end_img3");
        var end_img4 = document.getElementById("end_img4");
        var end_img5 = document.getElementById("end_img5");
        var end_img6 = document.getElementById("end_img6");
        switch(obj.id){
            case "all" :
                end_img1.src = "../img/auction/done_digi_1.jpg";
                end_img1.style.width = "70%";
                end_img2.src = "../img/auction/done_digi_2.jpg";
                end_img2.style.width = "70%";
                end_img3.src = "../img/auction/done_digi_3.jpg";
                end_img3.style.width = "70%";
                end_img4.src = "../img/auction/done_digi_4.jpg";
                end_img4.style.width = "70%";
                end_img5.src = "../img/auction/done_digi_5.jpg";
                end_img5.style.width = "70%";
                end_img6.src = "../img/auction/done_digi_6.jpg";
                end_img6.style.width = "70%";

                
                document.getElementById('end_title1').innerText = "틈새";
                document.getElementById('end_title2').innerText = "결합";
                document.getElementById('end_title3').innerText = "마틴";
                document.getElementById('end_title4').innerText = "소라";
                document.getElementById('end_title5').innerText = "파란";
                document.getElementById('end_title6').innerText = "조각";
                
                document.getElementById('end_price1').innerText = "낙찰가: 209,001 원";
                document.getElementById('end_price2').innerText = "낙찰가: 360,064 원";
                document.getElementById('end_price3').innerText = "낙찰가: 278,200 원";
                document.getElementById('end_price4').innerText = "낙찰가: 459,768 원";
                document.getElementById('end_price5').innerText = "낙찰가: 203,200 원";
                document.getElementById('end_price6').innerText = "낙찰가: 278,500 원";
                break;
            case "digital" :
                end_img1.src = "../img/auction/end_7.png";
                end_img1.style.width = "70%";
                end_img2.src = "../img/auction/end_8.jpg";
                end_img2.style.width = "70%";
                end_img3.src = "../img/auction/end_9.jpg";
                end_img3.style.width = "70%";
                end_img4.src = "../img/auction/end_10.jpg";
                end_img4.style.width = "70%";
                end_img5.src = "../img/auction/end_11.jpg";
                end_img5.style.width = "70%";
                end_img6.src = "../img/auction/end_12.jpg";
                end_img6.style.width = "70%";
                

                document.getElementById('end_title1').innerText = "제목변경테스트";
                document.getElementById('end_title2').innerText = "황야";
                document.getElementById('end_title3').innerText = "닻";
                document.getElementById('end_title4').innerText = "여튼쩌는제목";
                document.getElementById('end_title5').innerText = "잉어";
                document.getElementById('end_title6').innerText = "자전거";
                
                document.getElementById('end_price1').innerText = "낙찰가: 432,908 원";
                document.getElementById('end_price2').innerText = "낙찰가: 184,751 원";
                document.getElementById('end_price3').innerText = "낙찰가: 777,742 원";
                document.getElementById('end_price4').innerText = "낙찰가: 293,123 원";
                document.getElementById('end_price5').innerText = "낙찰가: 231,462 원";
                document.getElementById('end_price6').innerText = "낙찰가: 944,512 원";
                break;
            case "real" :
                end_img1.src = "../img/auction/end_13.jpg";
                end_img1.style.width = "70%";
                end_img2.src = "../img/auction/end_14.jpg";
                end_img2.style.width = "70%";
                end_img3.src = "../img/auction/end_15.jpg";
                end_img3.style.width = "70%";
                end_img4.src = "../img/auction/end_16.jpg";
                end_img4.style.width = "70%";
                end_img5.src = "../img/auction/end_17.jpg";
                end_img5.style.width = "70%";
                end_img6.src = "../img/auction/end_18.jpg";
                end_img6.style.width = "70%";

                document.getElementById('end_title1').innerText = "레몬";
                document.getElementById('end_title2').innerText = "스플래툰";
                document.getElementById('end_title3').innerText = "아아아";
                document.getElementById('end_title4').innerText = "죽이는달이다";
                document.getElementById('end_title5').innerText = "이정표";
                document.getElementById('end_title6').innerText = "골목";
                
                document.getElementById('end_price1').innerText = "낙찰가: 702,908 원";
                document.getElementById('end_price2').innerText = "낙찰가: 384,321 원";
                document.getElementById('end_price3').innerText = "낙찰가: 432,842 원";
                document.getElementById('end_price4').innerText = "낙찰가: 729,123 원";
                document.getElementById('end_price5').innerText = "낙찰가: 403,462 원";
                document.getElementById('end_price6').innerText = "낙찰가: 111,512 원";
                break;
        }
      } 
  </script>
</head>
<body>
<?php
      include("Header.php");
    ?> 

   <article>

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
            <input type="radio" name="new_pic" id="all" onclick="draw_new_Img(this)">
            <span>전체</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" id="digital" onclick="draw_new_Img(this)">
              <span>디지털</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" id="real" onclick="draw_new_Img(this)">
              <span>실물</span>
          </label>
        </div>

        <div class = "container">
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_1.jpg" class="bottom" id="new_img1">
                    </div>
                    <div class="content">
                        <h1 id = "new_title1">엎질러진 자연</h1>
                        <p id="new_price1">현재가: 209,001 원</p>
                        <h2 id = "new_time1">68:49:12</h2>
                        <div class = "status">
                            <a href="../HTML/auction/new_1.html" class="btn">입찰</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_2.jpg" class="bottom" id="new_img2">
                    </div>
                    <div class="content">
                        <h1 id = "new_title2">노을</h1>
                        <p id="new_price2">현재가: 360,064 원</p>
                        <h2 id = "new_time2">67:33:57</h2>
                        <div class = "status">
                            <a href="../HTML/auction/new_2.html" class="btn">입찰</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_3.jpg" class="bottom" id="new_img3">
                    </div>
                    <div class="content">
                        <h1 id = "new_title3">목도리냥</h1>
                        <p id="new_price3">현재가: 278,200 원</p>
                        <h2 id = "new_time3">65:04:28</h2>
                        <div class = "status">
                            <a href="../HTML/auction/new_3.html" class="btn">입찰</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_4.png" class="bottom" id="new_img4">
                    </div>
                    <div class="content">
                        <h1 id = "new_title4">우리 집 앞</h1>
                        <p id="new_price4">현재가: 459,768 원</p>
                        <h2 id = "new_time4">62:39:39</h2>
                        <div class = "status">
                            <a href="" class="btn">입찰</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_5.png" class="bottom" id="new_img5">
                    </div>
                    <div class="content">
                        <h1 id = "new_title5">우리 집 앞</h1>
                        <p id="new_price5">현재가: 459,768 원</p>
                        <h2 id = "new_time5">62:39:39</h2>
                        <div class = "status">
                            <a href="" class="btn">입찰</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_6.png" class="bottom" id="new_img6">
                    </div>
                    <div class="content">
                        <h1 id = "new_title6">우리 집 앞</h1>
                        <p id="new_price6">현재가: 459,768 원</p>
                        <h2 id = "new_time6">62:39:39</h2>
                        <div class = "status">
                            <a href="" class="btn">입찰</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="end_pic">
        <div class="textbox_h">
            <h2>종료 작품</h2>
        </div>
        <div class="pick_btn"> 
          <label class="pick_end">
              <input type="radio" name="end_pic" id="all" onclick="draw_end_Img(this)">
              <span>전체</span>
          </label>
          <label class="pick_end" >
              <input type="radio" name="end_pic" id="digital" onclick="draw_end_Img(this)">
              <span>디지털</span>
          </label>
          <label class="pick_end">
              <input type="radio" name="end_pic" id="real" onclick="draw_end_Img(this)">
              <span>실물</span>
          </label>
        </div>
        
        <div class = "container">
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_1.jpg" class="bottom" id="new_img1">
                    </div>
                    <div class="content">
                        <h1 id = "new_title1">엎질러진 자연</h1>
                        <p id="new_price1">현재가: 209,001 원</p>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_2.jpg" class="bottom" id="new_img2">
                    </div>
                    <div class="content">
                        <h1 id = "new_title2">노을</h1>
                        <p id="new_price2">현재가: 360,064 원</p>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_3.jpg" class="bottom" id="new_img3">
                    </div>
                    <div class="content">
                        <h1 id = "new_title3">목도리냥</h1>
                        <p id="new_price3">현재가: 278,200 원</p>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_4.png" class="bottom" id="new_img4">
                    </div>
                    <div class="content">
                        <h1 id = "new_title4">우리 집 앞</h1>
                        <p id="new_price4">현재가: 459,768 원</p>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_5.png" class="bottom" id="new_img5">
                    </div>
                    <div class="content">
                        <h1 id = "new_title5">우리 집 앞</h1>
                        <p id="new_price5">현재가: 459,768 원</p>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../img/auction/new_6.png" alt="">
                    </div>
                    <div class="content">
                        <h1 id = "new_title6">우리 집 앞</h1>
                        <p id="new_price6">현재가: 459,768 원</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </article>

    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->
</body>
</html>