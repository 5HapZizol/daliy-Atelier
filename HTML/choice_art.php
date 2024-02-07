<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="../css/choice_art.css">   
    
    <script>
      

      $(document).ready(function(){
          $(".footer-Background").load("../HTML/Footer.html");
      });



      function next_new_Img(obj) {
      var new_img1 = document.getElementById("new_img_1");
      var new_img2 = document.getElementById("new_img_2");
      var new_img3 = document.getElementById("new_img_3");
      var new_img4 = document.getElementById("new_img_4");
      var new_img5 = document.getElementById("new_img_5");
      var new_img6 = document.getElementById("new_img_6");
      var new_img6 = document.getElementById("new_img_7");
      switch(obj.id){
          case "all_1" :
              new_img_1.src = "../img/auction/new_1.jpg";
              new_img_1.style.width = "90%";
              new_img_2.src = "../img/auction/new_3.jpg";
              new_img_2.style.width = "90%";
              new_img_3.src = "../img/auction/done_digi_4.jpg";
              new_img_3.style.width = "90%";
              new_img_4.src = "../img/auction/done_real_3.jpg";
              new_img_4.style.width = "90%";
              new_img_5.src = "../img/auction/new_2.jpg";
              new_img_5.style.width = "90%";
              new_img_6.src = "../img/auction/new_4.png";
              new_img_6.style.width = "90%";
              new_img_7.src = "../img/auction/new_6.png";
              new_img_7.style.width = "90%";

              document.getElementById('title_new1').innerText = "엎질러진 자연";
              document.getElementById('title_new2').innerText = "목도리냥";
              document.getElementById('title_new3').innerText = "바다다";
              document.getElementById('title_new4').innerText = "내 속마음";
              document.getElementById('title_new5').innerText = "노을";
              document.getElementById('title_new6').innerText = "우리집 앞";
              document.getElementById('title_new7').innerText = "옛날엔 이랬어";

              document.getElementById('price_new1').innerText = "현재가: 209,001 원";
              document.getElementById('price_new2').innerText = "현재가: 278,200 원";
              document.getElementById('price_new3').innerText = "현재가: 49,000 원";
              document.getElementById('price_new4').innerText = "현재가: 360,064 원";
              document.getElementById('price_new5').innerText = "현재가: 99,000 원";
              document.getElementById('price_new6').innerText = "현재가: 459,768 원";
              document.getElementById('price_new7').innerText = "현재가: 99,000  원";

              document.getElementById('time_new1').innerText = "18:49:12";
              document.getElementById('time_new2').innerText = "75:04:28";
              document.getElementById('time_new3').innerText = "50:33:57";
              document.getElementById('time_new4').innerText = "10:33:57";
              document.getElementById('time_new5').innerText = "27:33:57";
              document.getElementById('time_new6').innerText = "62:39:39";
              document.getElementById('time_new7').innerText = "32:12:00";

              document.getElementById('bid_1').innerText = "입찰";
              document.getElementById('bid_2').innerText = "입찰";
              document.getElementById('bid_3').innerText = "입찰";
              document.getElementById('bid_4').innerText = "입찰";
              document.getElementById('bid_5').innerText = "입찰";
              document.getElementById('bid_6').innerText = "입찰";
              document.getElementById('bid_7').innerText = "입찰";
              
              document.getElementById('disable3').style.backgroundColor = "#b0aeae";
              document.getElementById('disable4').style.backgroundColor = "#b0aeae";
              document.getElementById('disable5').style.backgroundColor = "#b0aeae";
              document.getElementById('disable6').style.backgroundColor = "#b0aeae";
              document.getElementById('disable7').style.backgroundColor = "#b0aeae";
              break;
              
              case "end_ing" :

             new_img_1.src = "../img/auction/new_1.jpg";
             new_img_1.style.width = "90%";
             new_img_2.src = "../img/auction/done_real_3.jpg";
             new_img_2.style.width = "90%";
             new_img_3.src = "";
             new_img_3.style.width = "90%";
             new_img_4.src = "";
             new_img_4.style.width = "90%";
             new_img_5.src = "";
             new_img_5.style.width = "90%";
             new_img_6.src = "";
             new_img_6.style.width = "90%";
             new_img_7.src = "";
             new_img_7.style.width = "90%";

            document.getElementById('title_new1').innerText = "엎질러진 자연";
            document.getElementById('title_new2').innerText = "내 속마음";
            document.getElementById('title_new3').innerText = "";
            document.getElementById('title_new4').innerText = "";
            document.getElementById('title_new5').innerText = "";
            document.getElementById('title_new6').innerText = "";
            document.getElementById('title_new7').innerText = "";

            document.getElementById('price_new1').innerText = "현재가: 209,001 원";
            document.getElementById('price_new2').innerText = "현재가: 278,200 원";
            document.getElementById('price_new3').innerText = "";
            document.getElementById('price_new4').innerText = "";
            document.getElementById('price_new5').innerText = "";
            document.getElementById('price_new6').innerText = "";
            document.getElementById('price_new7').innerText = "";

            document.getElementById('time_new1').innerText = "18:49:12";
            document.getElementById('time_new2').innerText = "15:04:28";
            document.getElementById('time_new3').innerText = "";
            document.getElementById('time_new4').innerText = "";
            document.getElementById('time_new5').innerText = "";
            document.getElementById('time_new6').innerText = "";
            document.getElementById('time_new7').innerText = "";

            document.getElementById('bid_1').innerText = "입찰";
            document.getElementById('bid_2').innerText = "입찰";
            document.getElementById('bid_3').innerText = "";
            document.getElementById('bid_4').innerText = "";
            document.getElementById('bid_5').innerText = "";
            document.getElementById('bid_6').innerText = "";
            document.getElementById('bid_7').innerText = "";

            document.getElementById('disable3').style.backgroundColor = "#fff";
            document.getElementById('disable4').style.backgroundColor = "#fff";
            document.getElementById('disable5').style.backgroundColor = "#fff";
            document.getElementById('disable6').style.backgroundColor = "#fff";
            document.getElementById('disable7').style.backgroundColor = "#fff";

            break;
           }
      }
    </script>
    <title>찜 작품 페이지</title>
</head>
<body>
    <?php
        include("Header.php");
        ?>

    <div style="margin-top: 200px;">
         
  <article>
    <br>
         <div class="page_top_1">
            <span class="page_name_1">찜 작품</span>
            <p class="page_path_1">마이페이지 > 찜 작품</p>
            <br>
            <hr class="hr_1_1">
        </div>
        <div class="pick_btn">
            <label class="pick_new">
                <input type="radio" name="new_pic"id="all_1" onclick="next_new_Img(this)">
                <span>전체 작품</span>
            </label>
            <label class="pick_new">
                <input type="radio" name="new_pic" id="end_ing" onclick="next_new_Img(this)">
                <span>종료 임박</span>  
            </label>
            <br>
            <br>
            <br>
            
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
  </article>

 <!-- footer 시작 -->
 <footer>  
  <div class="footer-Background">
    
  </div>
</footer>  <!-- footer 끝 -->
</body>
</html>