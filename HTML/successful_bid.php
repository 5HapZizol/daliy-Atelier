<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="../css/successful_bid.css">  
    <title>낙찰 작품 페이지</title>
</head>
<body>
<?php
      include("Header.php");
      include 'bidCheckProcess.php';
    ?>

    <article>
      <div> 
        <br>  
          <div class="page_top">
              <span class="page_name">낙찰 작품</span>
              <p class="page_path">마이페이지 > 낙찰작품</p>
              <hr class="hr_1">
          </div>
      <div class="product-list">

      <?php
      // 세션에서 userid 가져오기
$user_id = $_SESSION['user'];

$sql = "SELECT * FROM artist WHERE userid = '{$user_id}' ORDER BY registration_date LIMIT 0, 6";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
}

while ($row = mysqli_fetch_array($result)) {
    // 이미지 경로 가져오기
    $sql = "SELECT img_path FROM image WHERE art_img_id = '{$row['art_img_id']}'";
    $result2 = mysqli_query($conn, $sql);
    $ttmp = mysqli_fetch_array($result2);
    $image_path = $ttmp['img_path'];
?>
    <div class="product-works">
        <img src="<?=$image_path?>" alt="">
        <div class="btnss">
            <button class="btn" type="button" onclick="onclick=location.href='best_2.php?aid=<?=$row['artId']?>'">🔍︎자세히 보기</button>
            <button class="btn" type="button" onclick="location.href='write_review.php?aid=<?=$row['artId']?>'">🖍리뷰 쓰기</button>
        </div><!--btnss-->
    </div>
<?php
}
?>
      
          


      </div><!--product-list-->
      <br>
      <br>
      <br>
      <br>
   </div>
    </article>

     <!-- footer 시작 -->
    <footer>  
      <div class="footer-Background">
      </div>
    </footer>  <!-- footer 끝 -->

    <script>
       

      $(document).ready(function(){
          $(".footer-Background").load("../html/Footer.html");
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
    </script>
</body>
</html>