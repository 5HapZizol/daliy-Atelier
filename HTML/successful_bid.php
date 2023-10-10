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

    if (mysqli_num_rows($result) === 0) {
        echo '<div class="no-Bid-Art">낙찰된 작품이 없습니다.</div>';
    } else {
        while ($row = mysqli_fetch_array($result)) {
            // 각 작품마다 이미지를 가져오기 위해 쿼리 수정
            $sql2 = "SELECT i.img_path, ar.artId
                     FROM artist AS a
                     JOIN art AS ar ON a.artist_code = ar.artist_code
                     JOIN image AS i ON ar.art_img_id = i.art_img_id
                     WHERE a.userid = '{$user_id}' AND ar.artId = '{$row['artId']}'";
            $result2 = mysqli_query($conn, $sql2);
            $ttmp = mysqli_fetch_array($result2);
            $image_path = $ttmp['img_path'];

            $artId = $row['artId'];
            $sql_check_review = "SELECT * FROM review WHERE artId = '$artId' AND Userid = '$user_id'";
            $result_check_review = mysqli_query($conn, $sql_check_review);

            echo '<div class="product-works">';
            echo '<img src="' . $image_path . '" alt="">';

            echo '<div class = "btnss">';
            // "자세히 보기" 버튼
            echo '<button class="btn" type="button" onclick="location.href=\'best_1.php?aid=' . $row['artId'] . '\'">🔍︎자세히 보기</button>';

            if (mysqli_num_rows($result_check_review) > 0) {
                // 이미 리뷰가 작성된 경우 "리뷰 수정하기" 버튼 생성
                echo '<button class="btn" type="button" onclick="location.href=\'write_review.php?aid=' . $row['artId'] . '\'">🖍리뷰 수정하기</button>';
            } else {
                // 리뷰가 작성되지 않은 경우 "리뷰 쓰기" 버튼 생성
                echo '<button class="btn" type="button" onclick="location.href=\'write_review.php?aid=' . $row['artId'] . '\'">🖍리뷰 쓰기</button>';
            }
            echo '</div>';
          echo '</div>';
        }
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
