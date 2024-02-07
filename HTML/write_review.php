<?php
    include("Header.php");
    $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : null;

    if (!$user_id) {
        echo '<script>alert("로그인이 필요합니다. 권한이 없습니다.");</script>';
        header("Location: ../index.php");
        exit;
    }

    $sql = "SELECT * FROM art WHERE artid = '{$_GET['aid']}'";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    }

    $row = mysqli_fetch_array($result);

    $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
    $result2 = mysqli_query($conn, $sql);
    $ttmp = mysqli_fetch_array($result2);
    $image_path = $ttmp['img_path'];

    // 이전 리뷰 내용과 별점을 가져옵니다.
    $sql_previous_review = "SELECT * FROM review WHERE artId = '{$_GET['aid']}' AND Userid = '$user_id'";
    $result_previous_review = mysqli_query($conn, $sql_previous_review);
    $previousReviewContent = "";
    $previousReviewStar = 1; // 별점 기본값

    if ($result_previous_review && mysqli_num_rows($result_previous_review) > 0) {
        $row_previous_review = mysqli_fetch_array($result_previous_review);
        $previousReviewContent = $row_previous_review['Review_descript'];
        $previousReviewStar = $row_previous_review['star_ratings'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>작품 리뷰쓰기</title>
    <link rel="stylesheet" href="../css/write_review.css">   
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script>
        const drawStar = (target) => {
            const starElement = document.querySelector('.star span');
            if (starElement) {
                const widthPercentage = `${target.value * 10}%`;
                starElement.style.width = widthPercentage;
            }
        }

        $(document).ready(function(){
            $(".footer-Background").load("../HTML/Footer.html");
        });
    </script>
</head>
<body>
    <?php
    include("Header.php");
    ?>

    <article>
        <form action="write_reviewProcess.php?aid=<?=$row['artId']?>" method="POST" enctype="multipart/form-data">
            <div class="page_top">
                <span class="page_name">리뷰 쓰기</span>
            </div>

            <div class="review_box">
                <div class="review_img">
                    <img src="<?=$image_path?>" alt="작품 이미지">
                </div>
    
                <div class="write_box">
                    <div class="write_name"><?= $row['name']; ?></div>
                    <div class="write_categrie">#입체 #현재 #감성 #디지털아트</div>
                    <div class="contour"></div>
                    <div class="write_price"><?= number_format($row['current_price']); ?>원</div>
                    <div class="contour_1"></div>

                    <!-- 별점 -->
                    <span class="star">
                        ★★★★★
                        <span>★★★★★</span>
                        <input type="range" name="review_Star" id="review_Star" oninput="drawStar(this)" value="<?=$previousReviewStar?>" step="1" min="0" max="10">
                    </span>

                    <div class="contour_2"></div>
                    <div class="write_w">내용</div>
                    <textarea name="review_CoInput" id="review_CoInput" class="write_detail" rows="50" cols="50"><?=$previousReviewContent?></textarea>
                </div>
            </div>

            <div class="btn-g">
                <button class="btn_1">올리기</button>
                <button class="btn_2">취소</button>
            </div>
        </form>
    </article>

    <footer>
        <div class="footer-Background"></div>
    </footer>
</body>
</html>
