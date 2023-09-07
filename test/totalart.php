<?php 
  $conn = mysqli_connect("127.0.0.1", "root", "pma5hapzizol", "daily-art", "3306");
  //$conn = mysqli_connect(주소, 아이디, "비밀번호", DB 스키마 이름, 포트);

  //if($pageNumber < 1) $pageNumber = 1;
  //$pageCount  = $_GET['pageCount']??6;//페이지당 몇개씩 보여줄지, 없으면 6
  //$startLimit = ($pageNumber-1)*$pageCount;//쿼리의 limit 시작 부분
  //$firstPageNumber  = $_GET['firstPageNumber'];


  //$sql = "select * from art";
  //$sql .= $search_where;
  //$order = " order by pid desc";//마지막에 등록한걸 먼저 보여줌
  //$limit = " limit $startLimit, $pageCount";
  //$query = $sql.$order.$limit;
  //echo "query=>".$query."<br>";
  //$result = $mysqli->query($query) or die("query error => ".$mysqli->error);
  //while($rs = $result->fetch_object()){
  //    $rsc[]=$rs;
  //}

  //한페이지 당 보일 작품 개수
  $art_num = 6;

  //맨 처음 접속할 경우 처음부터 출력 시작할 수 있도록
  if(!isset($start)) $start = 0;

  //테이블 전체개수
  $sql = "select count(*) as cnt from art";
  $result = mysqli_query($conn, $sql);
  $tmp = mysqli_fetch_array($result);
  $total = $tmp['cnt'];
?>
<html lang="en"><head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/endlessScroll.css"></link>
    <link type="text/css" rel="stylesheet" href="../css/totalart.css"></link>
    <link type="text/css" rel="stylesheet" href="../css/filter.css"></link>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>전체 경매</title>
</head>
<body>
    <header>    <!-- 헤더 시작-->
        <div class="Header">
          </div>
        </header>   <!-- 헤더 끝 -->

    <article>
      <!--본문 시작-->
    <div>

      <!-- <div class = "rudfh"> -->
        <div class="page_top">
          <span class="page_name">전체 경매</span>
          <p class="page_path">홈 >경매 > 전체</p>
          <br>
          <hr class="hr_1">
      </div>
      <!-- </div> -->
  
      <!--filter 시작-->
      <div class = "box">
        <div>
            
            <span><b>구분</b></span>
            <!--버튼 누를 때마다 페이지 변환-->
            <div class="pick_btn">
                <label class="pick_new">
                    <input type="radio" name="digi-anal" value="total">
                    <span><a href="/html/totalart.html" style="
                        color: inherit;
                        text-decoration: none;">전체</a></span>
                </label>
                <label class="pick_new">
                    <input type="radio" name="digi-anal" value="digital">
                    <span><a href="/html/digitalart.html" style="
                        color: inherit;
                        text-decoration: none;">디지털</a></span>
                </label>
                <label class="pick_new">
                    <input type="radio" name="digi-anal" value="real">
                    <span><a href="/html/analogart.html" style="
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
  
    <div class = "contianer">
      <section>
        <!--box_1이 박스 한 개-->
          <div class = "box_1">
            <div class="second-box">
              <div class="img_list">
                <ul style="padding: 0;">
                  <?php
                    $sql = "SELECT * FROM Art ORDER BY registration_date limit 0, 5";
                    $result = mysqli_query($conn, $sql);
                    if ($result === false) {    //오류 여부
                      echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                      echo mysqli_error($conn);
                    }
                    while($art = mysqli_fetch_array($result)){
                      //이미지 경로 찾기
                      $sql = "select img_path from image where art_img_id = '{$art['art_img_id']}'";
                      $result = mysqli_query($conn, $sql);
                      $ttmp = mysqli_fetch_array($result);
                      $image_path = $ttmp['img_path'];

                      //타이머를 위한 시간 차이 구하기
                      $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                      $datetime2 = new DateTime($art['closing_time']);
                      $interval = $datetime1->diff($datetime2);
                  ?>
                  <li>
                    <div class="img_list_info">
                        <img src="<?=$image_path?>" width="90%" class="img_size-fix">
                        <h1><?=$art['name']?></h1>
                        <p>현재가: <?=$art['current_price']?> 원</p>
                        <h2><?=$interval->format('%d day : %h hours : %i minutes')?></h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                  <?php }
                  ?>
                  <?php
                    $sql = "SELECT * FROM Art ORDER BY registration_date limit 1, 2";
                    $result = mysqli_query($conn, $sql);
                    if ($result === false) {    //오류 여부
                      echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                      echo mysqli_error($conn);
                    }
                    while($art = mysqli_fetch_array($result)){
                      //이미지 경로 찾기
                      $sql = "select img_path from image where art_img_id = '{$art['art_img_id']}'";
                      $result = mysqli_query($conn, $sql);
                      $ttmp = mysqli_fetch_array($result);
                      $image_path = $ttmp['img_path'];

                      //타이머를 위한 시간 차이 구하기
                      $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                      $datetime2 = new DateTime($art['closing_time']);
                      $interval = $datetime1->diff($datetime2);
                  ?>
                  <li>
                    <div class="img_list_info">
                        <img src="<?=$image_path?>" width="90%" class="img_size-fix">
                        <h1><?=$art['name']?></h1>
                        <p>현재가: <?=$art['current_price']?> 원</p>
                        <h2><?=$interval->format('%d day : %h hours : %i minutes')?></h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                  <?php }
                  ?>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_3.jpg" width="90%" class="img_size-fix">
                        <h1>목도리냥</h1>
                        <p>현재가: 278,200 원</p>
                        <h2>65:04:28</h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_3.jpg" width="90%" class="img_size-fix">
                        <h1>목도리냥</h1>
                        <p>현재가: 278,200 원</p>
                        <h2>65:04:28</h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </section>
    </div>
    </article>
    <?php
      $pages = $total / $art_num;
    ?>
    <footer>  <!-- footer 시작 -->
      <div class="footer-Background">
      
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
      $(document).ready(function(){
        $(".Header").load("../html/Header.html");
      });

    $(document).ready(function(){
        $(".footer-Background").load("../html/Footer.html");
     });
    </script>
</body>
</html>