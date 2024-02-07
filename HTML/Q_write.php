<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Q_write.css">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="../js/Q_write.js"></script>
    <title>문의 하기</title>
</head>
<body>
<?php
      include("Header.php");
      if (!isset($_SESSION['user'])) {
        // 사용자가 로그인되어 있지 않으면 알림 창 띄우기
        echo "<script>alert('로그인이 필요합니다.'); window.location.href = 'login.php';</script>";
        exit; // 로그인이 필요하므로 스크립트를 종료
    }
    ?>

    <article>
      <form action="Q_writeProcess.php" method="post"  enctype="multipart/form-data">
      <div class="Q-Write-Backgoround">
        <div class="Q-Write-Title">
          <h1>문의 하기</h1>
        </div>
  
        
        <div class="Q-Write-Frist">
          <div class="Q-Write-Type">
            문의 유형
          </div>
    
            <div class="Q-Write-Type-Select">
              <select name="Q_Write_Type_Select" id="Q_Write_Type_Select">
                <option value="회원정보">회원정보</option>
                <option value="포인트">포인트</option>
                <option value="작품">작품</option>
                <option value="배송">배송</option>
              </select>
            </div>
        </div>
        
  
        <div class="Q-Write-Secound">
          <div class="Q-Write-SvTitle">
            제목
          </div>

          <div class="Q-Write-SvInput">
            <input type="text" id="Q_Write_SvInput" name="Q_Write_SvInput">
          </div>

        </div>

        <div class="Q-Write-Thrid">
          <div class="Q-Write-Content">
            내용
          </div>

          <div class="Q-Write-CoInput">
            <textarea name="Q_Write_CoInput" id="Q_Write_CoInput" cols="30" rows="10"  placeholder="내용을 입력하세요"></textarea>
          </div>
        </div>

        <div class="Q-Write-Fourth">
          <div class="Q-Write-Attachment">
            첨부파일
          </div>

          <div class="Q-Write-File">
            <input class="Q-Write-File-name" value="첨부파일" placeholder="첨부파일">
            <label>
              <input type="file" id="Q_Write_File" name="Q_Write_File" accept="image/png, image/jpeg, image/jpg" multiple>
              파일찾기
            </label> 
          </div>
        </div>

        <div class="Q-Write-Fifth">
          <div class="Q-Write-Alarm">
            답변 등록 알림
          </div>

          <div class="Q-Write-Email">
            <div class="Q-Write-Email-Check">
              <input type="checkbox">이메일 수신
            </div>

            <div class="Q-Write-Email-Guide">
              답변등록 시 회원정보에 등록한 이메일로 안내가 발송됩니다.
            </div>
          </div>
        </div>

        <div class="Q-Write-Sixth">
          <div class="Q-Write-Up">
            <button type="submit">저장</button>
          </div>

          <div class="Q-Write-Cancel">
            <button type="submit">취소</button>
          </div>
        </div>
      </div>
      </form>

    </article>
    


    <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
      </div>
    </footer>  <!-- footer 끝 -->
</body>
</html>