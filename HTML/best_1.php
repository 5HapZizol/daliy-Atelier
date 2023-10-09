<html lang="en">
<head>
    <title>작품 페이지</title>
    <link rel="stylesheet" href="../css/best_1.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
    <?php
        include("Header.php");
        include ("bidCheckProcess.php");
    ?>


  <article>
    <div class="art_auction_info">
        <?php
            date_default_timezone_set('Asia/Seoul');
            $sql = "SELECT * FROM Art where artid = '{$_GET['aid']}'";
            $result = mysqli_query($conn, $sql);
            if ($result === false) {    //오류 여부
                echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                echo mysqli_error($conn);
            ?>
            <script>
                location.href = "main.php";
            </script>
            <?php
            }
                $art = mysqli_fetch_array($result);

                //이미지 경로 찾기
                $sql = "select img_path from image where art_img_id = '{$art['art_img_id']}'";
                $result = mysqli_query($conn, $sql);
                $ttmp = mysqli_fetch_array($result);
                $image_path = $ttmp['img_path'];

                //남은 시간 차 구하기
                $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                $datetime2 = new DateTime($art['closing_time']);
                $interval = $datetime1->diff($datetime2);

                if ($interval->format('%R') === '-') {
                    $interval = new DateInterval('PT0S'); // 0일 0시 0분
                }

                //작가명 가져오기
                $sql = "select artist_name from artist where artist_code = '{$art['artist_code']}'";
                $result = mysqli_query($conn, $sql);
                $artist = mysqli_fetch_array($result);
        ?>
        <img src="<?=$image_path?>" width="50%">
        <div class="art_auction_info_right">
        <div class="art_info_text_box">
            <div class="title"><?=$art['name']?></div>
            <div class="artist"><?=$artist['artist_name']?></div>
            <div class="category">#<?=$art['material']?> #<?=$art['art_type']?> </div>
            <div class="start_price">시작가: <?=number_format($art['start_price'])?> 원</div>
            <div class="left_time">남은시간: <?=$interval->format('%d일 %h:%i')?></div>
            <div class="current_price">현재 최고가: <?=number_format($art['current_price'])?> 원</div>
        </div>
        <?php if ($interval->format('%d:%h:%i') !== '0:0:0') { ?>
            <div class="art_auction_btns">
                <button class="openBtn" type="button">
                    <label>입찰 하기</label>
                </button>
                <button class="likes" type="button">
                    <img src="../img/likes.png" width="80%" alt="대체 텍스트" onclick="" >
                </button>
                <button class="report" type="button">
                    <img src="../img/report.png" width="70%"  alt="대체 텍스트" onclick="" >
                </button>
            </div>
            <?php } ?>
        
      </div>
      
  </div>
  <div class="art_introduce">
      <div class="top">작품 소개</div>
      <hr/>
      <div><?=$art['descript']?></div>
  </div>
  <div class="artist_introduce">
      <div class="top">작가 소개</div>
      <hr/>
      <div>2023년 새로 데뷔한 신인작가, 내면에 감춰진 마음을 표현하는 작가이며</div>
      <div>지금은 잦은 스케줄과 과제로 인해 심신이 지쳐있는 상태다.</div>
      <div>2024년 서일대학교 소프트웨어공학과를 졸업할 예정이지만 이 상태론 어림도 없을 것 같다.</div>
      <div>대표작으론 코딩으로 예술하기, JAVA라는 작품이 있다.</div>
  </div>
  <div class="art_caution">
      <div class="top">주의 사항</div>
      <hr/>
      <div>작품에 포함된 구성품을 반드시 확인해주세요. 당사는 응찰자의 구성품 미확인에 대한 책임을 지지 않습니다</div>
      <div>컨디션은 작품만을 대상으로 하며 액자, 족자, 병풍, 좌대, 케이스 등 작품 구성품의 상태는 포함하지 않습니다.</div>
      <div>온라인으로 게재된 이미지로 작품의 일부 컨디션을 확인할 수 있으나 실제 상태를 정확하게 반영하지 못할 수 있으며 작품의 색상, 밝기 등이 실물과 다르게 보일 수 있습니다.</div>
      <div>실물을 확인하지 않아 발생되는 문제에 대한 책임은 응찰자에게 있으며, 이와 같은 유의사항을 반드시 확인하시고 신중히 응찰해 주시길바랍니다.</div>
  </div>
  <div class="artist_other_art">
      <div class="top">작가의 다른 작품</div>
      <hr/>
      <ul>
          <li>
              <img src="../img/other_art_1.png" width="90%" class="bottom" style="
              vertical-align: text-bottom;">
          </li>
          <li>
              <img src="../img/other_art_2.png" width="90%" class="bottom" style="
              vertical-align: text-bottom;">
          </li>
          <li>
              <img src="../img/auction/new_3.jpg" width="90%" class="bottom" style="
              vertical-align: text-bottom;">
          </li>
          <li>
              <img src="../img/auction/best3.jpg" width="90%" class="bottom">
          </li>
          <li>
              <img src="../img/auction/new_1.jpg" width="90%" class="bottom">
          </li>
      </ul>
  </div>
  <div class="modal hidden">
    <div class="bg">

    </div>
    <div class="modalBox">
        <form action="BidInsertProcess.php?aid=<?=$_GET['aid']?>" method="POST" id="bid-insert-form">
            <div class="modalTop">
                <span>결제입력창</span>
            </div>
            <p>현재가: <?=number_format($art['current_price'])?>원</p>
            <p>마감일: <?=$datetime2->format('n/d(D) H:i')?> KST 순차마감</p>
            <div class="inputMoney">
                입찰가 : <input type="text" name="bid_price" placeholder="<?=number_format($art['current_price'])?> 이상">원
            </div>
            <div class="buttonBox">
                <button type="button" class="nextBtn" id="next_btn">확인</button>
                </form>
                <button type="button" class="closeBtn">닫기</button>
            </div>
    </div>
  </div>
  <div class="art_review">
    <div class="top">작가의 다른 작품 REVIEW</div>
    <hr>
    <br>
    <div class="review_box" type="button">
    <div class="box_img"><img src="../img/hpimage.jpg"></div>
    <div class="box_detail">
        <div class="reviewss_1" style="font-family: math;">
            가오에 살고 가오의 죽는다. 제가 원하던 그림입니다😇😇 방이 너무 횡해서 이번기회에 그냥 편한 마음으로 도전해봤는데 제가 낙찰. 받을 줄도 몰랐어요
        그림 너무 맘에 듭니다~</div>
         <div class="consumer_1"> 구매자 : dim 님</div>
         <img class="star_box" src="../img/R.png">
        </div>
    </div><!--리뷰박스-->

        <div class="jump"></div>


    <div class="review_box" type="button">
        <div class="box_img"><img src="../img/auction/end_12.jpg"></div>
        <div class="box_detail">
            <div class="reviewss_1" style="font-family: math;">
                너무 이뻐요!!  제가 원하는 느낌의 그림이에요 제가 이번에
                처음으로 카페를 운영하게 되어서 카페에 어울리는 시원한 그림을 찾고 있었는데...</div>
             <div class="consumer_1"> 구매자 : 내꺼 님</div>
             <img class="star_box" src="../img/R.png">
            </div>
        </div><!--리뷰박스-->

        <div class="jump"></div>

    <div class="review_box" type="button">
    <div class="box_img"><img src="../img/auction/best3.jpg"></div>
    <div class="box_detail">
        <div class="reviewss_1" style="font-family: math;">
            너무 이뻐요!!  제가 원하는 느낌의 그림이에요 제가 이번에
            처음으로 카페를 운영하게 되어서 카페에 어울리는 시원한 그림을 찾고 있었는데...</div>
         <div class="consumer_1"> 구매자 : whwdk 님</div>
         <img class="star_box" src="../img/R.png">
        </div>
    </div><!--리뷰박스-->   
    
    <div class="jump"></div>

    <div class="review_box" type="button">
        <div class="box_img"><img src="../img/auction/best4.jpg"></div>
        <div class="box_detail">
            <div class="reviewss_1" style="font-family: math;">
                너무 이뻐요!!  제가 원하는 느낌의 그림이에요 제가 이번에
                처음으로 카페를 운영하게 되어서 카페에 어울리는 시원한 그림을 찾고 있었는데...</div>
             <div class="consumer_1"> 구매자 : 구매자 님</div>
             <img class="star_box" src="../img/R.png">
            </div>
        </div><!--리뷰박스-->   

  </div>
  
  <div class="popup hidden">
    <div class="dim"></div>
  
   <div class="popupBox">
    <div class="btnBox"><button class="close_btn">닫기</button></div>
    <div class="popup_2">
        <div class="pic_section" style="display: contents;">
          <input type="radio" name="slide" id="slide_1" checked>
          <input type="radio" name="slide" id="slide_2">
          <input type="radio" name="slide" id="slide_3">
          <div class="SlideWrap">
        <ul class="SlideList">
        <!-- 슬라이드 영역 -->
        <li class="Slide_item">
          <a>
            <img src="../img/hpimage.jpg">
          </a>
        </li>
        <li class="Slide_item">
          <a>
            <img src="../img/art_auction_pic1.jpg">
          </a>
        </li>
        <li class="Slide_item">
          <a>
            <img src="../img/auction/end_11.jpg">
          </a>
        </li class="Slide_item">
        
        <!-- 좌,우 슬라이드 버튼 -->
        <div class="slide_control">
          <div>
            <label for="slide_3" class="Left"></label>
            <label for="slide_2" class="Right"></label>
          </div>
          <div>
            <label for="slide_1" class="Left"></label>
            <label for="slide_3" class="Right"></label>
          </div>
          <div>
            <label for="slide_2" class="Left"></label>
            <label for="slide_1" class="Right"></label>
          </div>
        </div>
        </ul>
         </div>
            </div>
    <div class="pop_detail">
        <div class="consumer"> 구매자 : dim 님</div>
        <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
        <div class="date">작성 날짜 : 2022.1.31</div>
        <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
        <div class="review_detail">
        <div class="review" style="font-size: 1.1em; color: black; font-family: math;">
    가오에 살고 가오의 죽는다. 제가 원하던 그림입니다😇😇 방이 너무 횡해서 이번기회에 그냥 편한 마음으로 도전해봤는데 제가 낙찰...</div>
    </div>   
        <div class="divider" style="margin-top: 0.5em;"></div>
        <div class="bid_price" style="font-size: 1.4em; margin: 0.3em;">낙찰가 : 100,000원</div>
        <div class="divider" style="margin-top: 0.5em;"></div>
        <br>
        <div class="title">어두운</div>
        <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
        <div class="category">#현실 #검은색 #디지털아트</div>
        <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
        <img class="re_star" src="../img/star.png">
        </div><!--pop_detail-->
        </div>
        </div>
    </div>
    </article>

    <footer> <!--  footer 시작 -->
      <div class="footer-Background">
      
      </div>
     </footer> <!-- footer 끝 -->

    <script>

        $(document).ready(function(){
            $(".footer-Background").load("/html/Footer.html");
        });
        const open = () => {
            document.querySelector(".modal").classList.remove("hidden");
        }
        
        const close = () => {
            document.querySelector(".modal").classList.add("hidden");
        }
        
        document.querySelector(".openBtn").addEventListener("click", open);
        document.querySelector(".closeBtn").addEventListener("click", close);
        document.querySelector(".bg").addEventListener("click", close);

        
        const bidInsertForm = document.querySelector("#bid-insert-form");
        const nextbtn = document.querySelector("#next_btn");

        nextbtn.addEventListener("click", function(e) {
            <?php
            if(!isset($_SESSION['user'])){
            ?>
                alert("로그인이 필요한 항목입니다.");
                window.location = "login.php";
            <?php
            }else{
            ?>
                location.replace("/user/mypageForm.jsp");
                bidInsertForm.submit();
            <?php
            }
            ?>
        });

    </script>
</body>
</html>