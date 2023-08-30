<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/endlessScroll.css"></link>
    <link type="text/css" rel="stylesheet" href="../css/totalart.css"></link>
    <link type="text/css" rel="stylesheet" href="../css/filter.css"></link>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/endlessScroll.js"></script>
    <title>실물 아트 경매</title>
</head>
<body>
<?php
      include("Header.php");
    ?>

    <article>
      <!--본문 시작-->
    
    <div style="margin-top: 200px;">
            
      <div class="page_top">
          <span class="page_name">실물 아트 경매</span>
          <p class="page_path">경매 > 전체 > 실물</p>
          <br>
          <hr class="hr_1">
      </div>
  
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
  </div>
  <!--사진 넣는 부분-->


  <div class = "contianer">
      <section>
        <!--box_1이 박스 한 개-->
          <div class = "box_1">
            <div class="second-box">
              <div class="img_list">
                <ul style="padding: 0;">
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_1.jpg" width="90%" class="img_size-fix">
                        <h1>엎질러진 자연</h1>
                        <p>현재가: 209,001 원</p>
                        <h2>68:49:12</h2>
                        <div class="status"><a href="../HTML/auction/new_1.html"> 입찰 </a></div>
                    </img>
                  </li>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_2.jpg" width="90%" class="img_size-fix">
                        <h1>노을</h1>
                        <p>현재가: 360,064 원</p>
                        <h2>67:33:57</h2>
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
  
          <div class = "box_1">
            <div class="second-box">
              <div class="img_list">
                <ul style="padding: 0;">
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_4.png" width="90%" class="img_size-fix">
                        <h1>우리 집 앞</h1>
                        <p>현재가: 459,768 원</p>
                        <h2>62:39:39</h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_5.png" width="90%" class="img_size-fix">
                        <h1>멍때림</h1>
                        <p>현재가: 203,200 원</p>
                        <h2>68:49:12</h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_6.png" width="90%" class="img_size-fix">
                        <h1>골목</h1>
                        <p>현재가: 203,200 원</p>
                        <h2>68:49:12</h2>
                        <div class="status"><a href=""> 입찰 </a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class = "box_1">
            <div class="second-box">
              <div class="img_list">
                <ul style="padding: 0;">
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_1.jpg" width="90%" class="img_size-fix">
                        <h1>엎질러진 자연</h1>
                        <p>현재가: 209,001 원</p>
                        <h2>68:49:12</h2>
                        <div class="status"><a href="../HTML/auction/new_1.html"> 입찰 </a></div>
                    </img>
                  </li>
                  <li>
                    <div class="img_list_info">
                        <img src="../img/auction/new_2.jpg" width="90%" class="img_size-fix">
                        <h1>노을</h1>
                        <p>현재가: 360,064 원</p>
                        <h2>67:33:57</h2>
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





    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
       
        </div>
    </footer>  <!-- footer 끝 -->

    <script>
      $(document).ready(function(){
        $(".Header").load("/html/Header.html");
      });

      $(document).ready(function(){
          $(".footer-Background").load("/html/Footer.html");
      });
    </script>
</body>
</html>