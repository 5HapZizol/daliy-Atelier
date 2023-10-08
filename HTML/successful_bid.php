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
       // 세션에서 userid 가져오기
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : null;

        if (!$user_id) {
            // 사용자가 로그인되어 있지 않은 경우 권한이 없다는 알림창을 표시합니다.
            echo '<script>alert("로그인이 필요합니다. 권한이 없습니다.");</script>';
            // 이후 필요한 처리, 예를 들면 로그인 페이지로 이동하는 리디렉션 등을 수행할 수 있습니다.
            header("Location: main.php");
            exit; // 스크립트 실행 중지
        }

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

$current_time = date('Y-m-d H:i:s'); // 현재 시간을 가져옵니다.

$sql = "SELECT *
        FROM Art
        WHERE closing_time < '{$current_time}'
        ORDER BY registration_date
        LIMIT 0, 6";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
}

while ($row = mysqli_fetch_array($result)) {
    // 이미지 경로 가져오기
    $sql = "SELECT i.img_path
    FROM artist AS a
    JOIN art AS ar ON a.artist_code = ar.artist_code
    JOIN image AS i ON ar.art_img_id = i.art_img_id
    WHERE a.userid = '{$user_id}' ORDER BY registration_date LIMIT 0, 6";
    $result2 = mysqli_query($conn, $sql);
    $ttmp = mysqli_fetch_array($result2);
    $image_path = $ttmp['img_path'];
?>
    <div class="product-works">
        <img src="<?=$image_path?>" alt="">
        <div class="btnss">
            <button class="btn" type="button" onclick="onclick=location.href='best_1.php?aid=<?=$row['artId']?>'">🔍︎자세히 보기</button>
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