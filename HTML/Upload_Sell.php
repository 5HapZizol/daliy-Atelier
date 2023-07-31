<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\CSS\Upload_Sell.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/header.js"></script>
    <script>
      $.fn.setPreview = function(opt){
          "use strict"
              var defaultOpt = {
                  inputFile: $(this),
                  img: null,
                  w: 200,
                  h: 'auto'
          };
          $.extend(defaultOpt, opt);
          
          var previewImage = function(){
              if (!defaultOpt.inputFile || !defaultOpt.img) return;
      
              var inputFile = defaultOpt.inputFile.get(0);
              var img       = defaultOpt.img.get(0);
      
              // FileReader
              if (window.FileReader) {
                  // image 파일만
                  if (!inputFile.files[0].type.match(/image\//)) return;
      
                  // preview
                  try {
                      var reader = new FileReader();
                      reader.onload = function(e){
                          img.src = e.target.result;
                          img.style.width  = defaultOpt.w+'px';
                          img.style.height = defaultOpt.h;
                          img.style.display = '';
                      }
                      reader.readAsDataURL(inputFile.files[0]);
                  } catch (e) {
                      // exception...
                  }
              // img.filters (MSIE)
              } else if (img.filters) {
                  inputFile.select();
                  inputFile.blur();
                  var imgSrc = document.selection.createRange().text;
      
                  img.style.width  = defaultOpt.w+'px';
                  img.style.height = defaultOpt.h+'px';
                  img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enable='true',sizingMethod='scale',src=\""+imgSrc+"\")";          
                  img.style.display = '';
              // no support
              } else {
                  // Safari5, ...
              }
          };
      
          // onchange
          $(this).change(function(){
              previewImage();
          });
      };
      
      
      $(document).ready(function(){
          var opt = {
              img: $('#img_preview'),
              w: 200,
              h: 200
          };
      
          $('#input_file').setPreview(opt);
      });
    </script>

    <title>Upload</title>
</head>

<body>
  <header>    <!-- 헤더 시작-->
    <div class="Header">
      <div class="Logo">
        <a href="main_Login.html"><img src="/img/Header_Image/Logo_2.png" /></a>
      </div>

      <div class="a12">
        <div class="Header-SignUp">
          <a href="main.html">로그아웃</a>
          <a href="#">구매 현황</a>
          <a href="MyPage.html">마이페이지</a>
        </div>

        <div class="Header-catalogue">
          <!--카테고리 시작-->
          <nav>
            <ul id="gnb">
              <li class="dept1">
                <a href="#">이벤트</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="#">이벤트 안내</a></li>
                  <li class="dept2"><a href="#">당첨자 발표</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">경매</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="totalart.html">전체</a></li>
                  <li class="dept2"><a href="digitalArt.html">디지털</a></li>
                  <li class="dept2"><a href="analogart.html">실물</a></li>
                  <li class="dept2"><a href="#">작가별 작품</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">소개글</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="artist_introduce.html">작가소개</a></li>
                  <li class="dept2"><a href="#">개발자 소개</a></li>
                </ul>
              </li>

              <li class="dept1">
                <a href="#">서비스</a>
                <ul class="inner-menu">
                  <li class="dept2"><a href="service.html">경매 진행방법</a></li>
                  <li class="dept2"><a href="Q_write.html">1:1문의</a></li>
                  <li class="dept2"><a href="Q_list.html">Q&A</a></li>
                </ul>
              </li>
            </ul>
          </nav>

          <!-- * 검색 영역 추가 * -->
          <div class="Header-search">
            <input type="text" />
            <button class="Header-search-Button">
              <img src="/img/Header_Image/search.png" />
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

    <div id = "title">
        <h2>내 작품 판매하기</h2>
        <hr class="hr_1">
    </div>

    <form action="UploadSellProcess.php" method="POST" id="upload-form" enctype="multipart/form-data">
      <img id="img_preview" style="display:none;"/>
      <div class ="up_file">
          <label for="file">파일 업로드하기</label>
          <input type="file" name="input_file" onchange="dropFile.handleFiles(this.files)" accept="image/png, image/jpeg, image/jpg">
      </div>


      <table class="main_1">
            <thead>
                <tr>
                    <td class="m1_1">작품이름</td>
                    <td class="name"><input type="text" name="Upname" size="20" style="width:100%;"></td>
                </tr>
            </thead>  

            <tbody>
                <!-- 작가는 세션을 통해 입력 -->

                <tr>
                    <td class = "m1_3">그림 종류</td>
                    <td><select class="stuff" name="art_type">
                        <option value="실물">실물</option>
                        <option value="디지털">디지털</option>
                        <option value="오브제">오브제</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>해시태그</td>
                    <td><input type="text" name="hash" size="20" style="width:100%;"></td>
                </tr>
            
                <tr>
                    <td>재료</td>
                    <td><input type="text" name="material" size="20" style="width:100%;"></td>
                </tr>

                <tr>
                    <td>작품설명</td>
                    <td><textarea name="info" rows="10" cols="60" style="width:100%; border: 1; resize: none;"></textarea></td>
                </tr>
            </tbody>
      </table>

      <hr class="hr_2">
      <h3>경매가 등록하기</h3>
      

      <table class="main_2">
          <tr>   
              <td>입찰가</td>
              <td id="sale"><input type="number" name="price" min = "1" size="20">원</td>
          </tr>

          <tr>
              <td>경매 시작 시간</td>
              <td id="s_start">
                <input type="datetime-local" id="date" name="start_d">
              </td>
          </tr>

          <tr>
              <td>경매 종료 시간</td>
              <td id="s_done">
                <input type="datetime-local" id="date" name="end_d">
            </td>
          </tr>
      </table>

      <div style="text-align: center;" id="bt_up">
	      <button type="submit">등록하기</button>
      </div>
    </form>

    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        <div class="footer-Left">
          <div class="footer-terms">
            <ul>
              <li>개인정보처리방침</li>
              <li>이용약관</li>
              <a href="service.html" style="text-decoration: none; color: white;"><li>서비스</li></a>
              <a href="center.html" style="text-decoration: none; color: white;"><li>고객센터</li></a>
            </ul>
          </div>

          <div class="footer-social-Icon">
            <img src="../img/footer_Icon_Image/Instagram.png" class="footer-Instagram"/>
            <img src="../img/footer_Icon_Image/Blog.png" class="footer-Blog"/>
            <img src="../img/footer_Icon_Image/FaceBook.png" class="footer-FaceBook"/>
          </div>  
        </div>
        
        <div class="footer-developer">
          <p>
            (주)서일대학교 소프트웨어공학과 | 학과 사무실:02-490-7398 | 주소: 서울특별시 중랑구 용마산로90길 28
          </p>
          <p>
            이메일: 202103631@office.seoil.ac.kr | 디자인: 202103631 전채영
          </p>
          <p>
            개인정보보호책임자: 전채영 | 쥐어터트리는 자: 손예빈 | 지져진 자: 김민주 | 영혼이 소멸한 자: 박서영 | 건들면  무는 자: 박성주
          </p>
        </div>
      </div>
    </footer>  <!-- footer 끝 -->
</body>
</html>