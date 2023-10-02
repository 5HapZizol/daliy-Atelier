<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Upload_Sell.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <!--태그 관련 -->
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    
    <script>

        $(document).ready(function(){
            $(".footer-Background").load("../html/Footer.html");
        });

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
<?php
      include("Header.php");
      // 세션에서 사용자 정보 가져오기
    $user_id = $_SESSION['user'];

    // 사용자의 User_status를 확인
    $sql = "SELECT User_status FROM user WHERE Userid = '{$user_id}'";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo "사용자 정보를 가져오는데 문제가 발생했습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
        exit; // 오류 발생 시 중단
    }
    
    $row = mysqli_fetch_array($result);
    $user_status = $row['User_status'];
    
    // User_status가 1인 경우에만 페이지 허용
    if ($user_status != 1) {
        echo "<script>alert('권한이 없습니다.');</script>";
        echo "<script>window.location.href = 'main.php';</script>";
        exit;
    }
    ?>

    <article>
    <div style="margin-top: 200px;">
    <div id = "title">
        <h2>내 작품 판매하기</h2>
        <hr class="hr_1">
    </div>

    <form action="UploadSellProcess.php" method="POST" id="upload-form" enctype="multipart/form-data">
      <img id="img_preview" style="display:none;"/>
      <div class ="up_file">
          <label for="file"></label>
          <input type="file" id="input_file" name="input_image" onchange="dropFile.handleFiles(this.files)" accept="image/png, image/jpeg, image/jpg" style="margin-left: 0.1em;">
      </div>


      <table class="main_1">
            <thead>
                <tr>
                    <td class="m1_1">작품이름</td>
                    <td class="name"><input type="text" name="Upname" size="22" style="width:100%; border:none;"></td>
                </tr>
            </thead>  

            <tbody>
                <!-- 작가는 세션을 통해 입력 -->

                <tr>
                    <td class = "m1_3">그림 종류</td>
                    <td><select class="stuff" name="art_type" style="font-size:1em;">
                        <option value="실물">실물</option>
                        <option value="디지털">디지털</option>
                        <option value="오브제">오브제</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>해시태그</td>
                    <td><input type="text" id="tag" name="hash" size="22" style="width:100%; border:none;"></td>
                </tr>
            
                <tr>
                    <td style="text-align: center;">재료</td>
                    <td><input type="text" name="material" size="22" style="width:100%; border:none; margin-left:1em"></td>
                </tr>

                <tr>
                    <td>작품설명</td>
                    <td><textarea name="info" rows="10" cols="60" style="width:100%; border:none;"></textarea></td>
                </tr>
            </tbody>
      </table>

      <hr class="hr_2" style="margin-top: 2em;">
      <h3>경매가 등록하기</h3>
      

      <table class="main_2">
          <tr>   
              <td style="text-align: center;">입찰가</td>
              <td id="sale"><input type="number" name="price" min = "1" size="20" style="border:none;">원</td>
          </tr>

          <tr>
              <td>경매 시작 시간</td>
              <td id="s_start">
                <input type="datetime-local" id="date" name="start_d"  style="border:none;">
              </td>
          </tr>

          <tr>
              <td>경매 종료 시간</td>
              <td id="s_done">
                <input type="datetime-local" id="date" name="end_d"  style="border:none;">
            </td>
          </tr> 
      </table>

      <div style="text-align: center; margin-top:2em;  margin-bottom:2em;" id="bt_up">
	      <button class="BTN" type="submit">등록하기</button>
      </div>
    </form>
    </div>
    </article>

    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
        
      </div>
    </footer>  <!-- footer 끝 -->
</body>
</html>