<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/totalart.css"></link>
    <link type="text/css" rel="stylesheet" href="../css/filter.css"></link>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <title>실물 아트 경매</title>
</head>
<body>
  <?php
      include("Header.php");
      include 'bidCheckProcess.php';
    ?>

  <article>
    <!--본문 시작-->

  <div style="margin-top: 200px;">

    <div class="page_top">
      <span class="page_name">실물 아트 경매</span>
      <p class="page_path">홈 > 경매 > 실물</p>
      <br>
      <hr class="hr_1">
  </div>
  <!-- </div> -->

  <!--filter 시작-->
  <div class = "box_filter">
    <div>
      
      <span><b>구분</b></span>
      <!--버튼 누를 때마다 페이지 변환-->
      <div class="pick_btn">
          <label class="pick_new">
              <input type="radio" name="digi-anal" value="real">
              <span><a href="/html/analogart.php" style="
                  color: inherit;
                  text-decoration: none;">실물</a></span>
          </label>
      </div>
    </div>

    <div>
      
      <span><b>테마</b></span>
      
      <div class="pick_btn">
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="view">
              <span>풍경</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="person">
              <span>인물</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="jung">
              <span>정물</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="animal">
              <span>동물</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="abstract">
              <span>추상</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="popart">
              <span>팝아트</span>
          <!--디지털 아트에서는 필요없는 부분-->
          <label class="pick_new">
              <input type="radio" name="sel_btun" value="object">
              <span>오브제</span>
          </label>
      </div>
      
    </div>

    <div>
      <span><b>형태</b></span>
      <div class="pick_btn">
          <label class="pick_new">
              <input type="radio" name="form_btun" value="right">
              <span>정방형</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="colspan">
              <span>가로형</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="rowspan">
              <span>세로형</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="circle">
              <span>원형</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="set">
              <span>세트</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="3D">
              <span>입체/설치</span>
          <label class="pick_new">
              <input type="radio" name="form_btun" value="m">
              <span>미디어</span>
          </label>
      </div>
    </div>

   <div>
      <span><b>사이즈</b></span>
      <div class="pick_btn">
          <label class="pick_new">
              <input type="radio" name="new_pic" value="real">
              <span>1~10호</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" value="digital">
              <span>~30호</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" value="real">
              <span>~60호</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" value="real">
              <span>~80호</span>
          </label>
          <label class="pick_new">
              <input type="radio" name="new_pic" value="real">
              <span>100호+</span>
          </label>
      </div>
    </div>
      
    <div>
        <b>구매가격</b>
        <div class = "font_buy">직접입력</div>
        <input type="text" placeholder="10" class="search_text"> ~ <input type="text" placeholder="800" class="search_text"> 만원
        
        
        <button class="search_filter_btn">
            <img width=50% height="50%" src="/img/Header_Image/search.png"/>
        </button>
    </div>
    <span style="float: right;">
        <input type="text" placeholder="검색어 입력" class="search_text" style="width: 10em" >
        <span class = "btn-group">
            <button class="search_filter_btn">
                <img width=50% height="50%" src="/img/Header_Image/search.png"/>
            </button>
        </span>
    </span>
  </div>
    <!--filter 끝-->
  
    <div class="container">

      <div class="box-container">
         <?php
            $sql = "SELECT * FROM Art WHERE art_status = 0 AND art_type = '실물' ORDER BY registration_date limit 0, 6";
            $result = mysqli_query($conn, $sql);
            if ($result === false) {    //오류 여부
               echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
               echo mysqli_error($conn);
            }
            while($row = mysqli_fetch_array($result)){
               //이미지 경로 찾기
               $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
               $result2 = mysqli_query($conn, $sql);
               $ttmp = mysqli_fetch_array($result2);
               $image_path = $ttmp['img_path'];
               
               //타이머를 위한 시간 차이 구하기
               $datetime1 = new DateTime(date("Y-m-d H:i:s"));
               $datetime2 = new DateTime($row['closing_time']);
               $interval = $datetime1->diff($datetime2);

               //작가명 가져오기
               $sql = "select artist_name from artist where artist_code = '{$row['artist_code']}'";
               $artist_result = mysqli_query($conn, $sql);
               $artist = mysqli_fetch_array($artist_result);
         ?>
         <div class="box">
            <div class="image">
                <img src="<?=$image_path?>" width="90%" alt="">
            </div>
            <div class="content">
                <h3><?=$row['name']?></h3>
                <p>현재가: <?=number_format($row['current_price'])?> 원</p>
                <p><?=$interval->format('%a일 %H시간 %i분 %s초')?></p>
                <a href="../HTML/best_1.php?aid=<?=$row['artId']?>" class="btn">입찰</a>
                <div class="icons">
                    <span> <i class="fas fa-calendar"></i> <?=$datetime2->format('jS M, o')?> </span>
                    <span> <i class="fas fa-user"></i> by  <?=$artist['artist_name']?> </span>
                </div>
            </div>
         </div>
         <?php 
         }
         ?>
      </div>
   
      <div id="load-more"> load more </div>
      <script>
        $(document).ready(function(){
          $(".footer-Background").load("../HTML/Footer.html");
      });
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;
        
        loadMoreBtn.onclick = () =>{
           let boxes = [...document.querySelectorAll('.container .box-container .box')];
           for (var i = currentItem; i < currentItem + 3; i++){
              boxes[i].style.display = 'inline-block';
           }
           currentItem += 3;
        
           if(currentItem >= boxes.length){
              loadMoreBtn.style.display = 'none';
           }
        }
      </script>
        
   </div>


    </article>

  <footer>  <!-- footer 시작 -->
    <div class="footer-Background">
  </footer>  <!-- footer 끝 -->
</body>
</html>