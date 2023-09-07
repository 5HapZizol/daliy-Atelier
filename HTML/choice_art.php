<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="../css/choice_art.css">   
    
    <script>
      

      $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
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
            <div class="img_list">
                <ul>
                    <li>
                        <div class="img_list_1">
                            <img src="../img/auction/new_1.jpg" width="90%" class="bottom" id="new_img_1">
                            <h1 id="title_new1">엎질러진 자연</h1>
                            <p id="price_new1">현재가: 209,001 원</p>
                            <h2 id="time_new1">18:49:12</h2>
                            <div class="status"><a href="../HTML/auction/new_1.html" id="bid_1"> 입찰 </a></div>
                        </div>
                    </li>
                    <li>
                        <div class="img_list_1">
                            <img src="../img/auction/new_3.jpg" width="90%" class="bottom" id="new_img_2">
                            <h1 id="title_new2">목도리냥</h1>
                            <p id="price_new2">현재가: 278,200 원</p>
                            <h2 id="time_new2">75:04:28</h2>
                            <div class="status"><a href="" id="bid_2"> 입찰 </a></div>
                        </div>
                    </li>
                    <li>
                        <div class="img_list_1">
                            <img src="../img/auction/done_digi_4.jpg" width="90%" class="bottom" id="new_img_3">
                            <h1 id="title_new3">바다다</h1>
                            <p id="price_new3">현재가: 49,000 원</p>
                            <h2 id="time_new3">50:33:57</h2>
                            <div class="status" id="disable3"><a href="" id="bid_3"> 입찰 </a></div>
                        </div>
                    </li>
                    <li>
                      <div class="img_list_1">
                          <img src="../img/auction/done_real_3.jpg" width="90%" class="bottom" id="new_img_4">
                          <h1 id="title_new4">내 속마음</h1>
                          <p id="price_new4">현재가: 99,000 원</p>
                          <h2 id="time_new4"  id="time_out2">10:33:57</h2>
                          <div class="status" id="disable4"><a href="" id="bid_4"> 입찰 </a></div>
                      </div>
                  </li>
                    <li>
                        <div class="img_list_1">
                            <img src="../img/auction/new_2.jpg" width="90%" class="bottom" id="new_img_5">
                            <h1 id="title_new5">노을</h1>
                            <p id="price_new5">현재가: 360,064 원</p>
                            <h2 id="time_new5">27:33:57</h2>
                            <div class="status" id="disable5"><a href="" id="bid_5"> 입찰 </a></div>
                        </div>
                    </li>
                    <li>
                        <div class="img_list_1">
                            <img src="../img/auction/new_4.png" width="90%" class="bottom" id="new_img_6">
                            <h1 id="title_new6">우리 집 앞</h1>
                            <p id="price_new6">현재가: 459,768 원</p>
                            <h2 id="time_new6">62:39:39</h2>
                            <div class="status" id="disable6"><a href="" id="bid_6"> 입찰 </a></div>
                        </div>
                    </li>
                    <li>
                      <div class="img_list_1">
                          <img src="../img/auction/new_6.png" width="90%" class="bottom" id="new_img_7">
                          <h1 id="title_new7">옛날엔 이랬어</h1>
                          <p id="price_new7">현재가: 99,000 원</p>
                          <h2 id="time_new7">32:12:30</h2>
                          <div class="status" id="disable7"><a href="" id="bid_7"> 입찰 </a></div>
                      </div>
                  </li>
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