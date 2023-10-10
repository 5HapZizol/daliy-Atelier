<!DOCTYPE html>
<html lang="en">
<head>
    <title>내가 쓴 리뷰 페이지</title>
    <link rel="stylesheet" href="../css/review_my_work.css"> 
    <link rel="stylesheet" href="../css/popupchang.css">  
    <link rel="stylesheet" href="../css/slider.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/review_my_work.js"></script>
</head>
<body>
    <?php
    include("Header.php");
    ?>

    <article>
        <br> 
        <div>
            <div class="page_top">
                <span class="page_name">내가 쓴 리뷰 보기</span>
                <p class="page_path">마이페이지 > 내 작품 리뷰보기</p>
                <hr class="hr_1">
            </div><!-- page top -->

            <div class="menu_type">
                <div class="menu-btn1"><button>전체</button><span class="menu-animation"></span></div>
                <div class="separator"></div>
                <div class="menu-btn2"><button onclick="sortReviewsByRecent()">최근 리뷰순</button><span class="menu-animation"></span></div>
                <div class="separator"></div>
                <div class="menu-btn3"><button onclick="sortReviewsByPrice()">가격순</button><span class="menu-animation"></span></div>
                <div class="separator"></div>
                <div class="menu-btn4"><button onclick="sortReviewsByRating()">별점순</button><span class="menu-animation"></span></div>
            </div><!--menu_type-->

            <div class="reviewss">
                <?php
                // 페이지 번호 및 페이지당 리뷰 개수 설정
                $items_per_page = 6;
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // URL에서 페이지 번호 가져오기

                // 정렬 방식 설정 (기본은 최신순)
                $sort = isset($_GET['sort']) ? $_GET['sort'] : 'recent';

                // 현재 페이지에 따른 OFFSET 계산
                $offset = ($current_page - 1) * $items_per_page;

                // 리뷰를 정렬하는 SQL 쿼리
                $sql_sort = '';
                if ($sort == 'price') {
                    $sql_sort = 'ORDER BY a.current_price DESC'; // 가격순 정렬
                } elseif ($sort == 'rating') {
                    $sql_sort = 'ORDER BY r.star_ratings DESC'; // 별점순 정렬
                } else {
                    $sql_sort = 'ORDER BY r.Review_number DESC'; // 최신순 정렬 (기본)
                }

                // 리뷰 가져오는 SQL 쿼리
                $sql_review = "SELECT
                    r.*,
                    a.current_price,
                    a.name,
                    DATE_FORMAT(r.Review_number, '%y-%m-%d') AS Formatted_Review_number,
                    i.img_path
                FROM review r
                INNER JOIN art a ON r.artId = a.artid
                INNER JOIN image i ON a.art_img_id = i.art_img_id
                $sql_sort
                LIMIT $items_per_page
                OFFSET $offset;
                ";

                $result_review = mysqli_query($conn, $sql_review);
                if ($result_review === false) {
                    echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                    echo mysqli_error($conn);
                }

                if (mysqli_num_rows($result_review) === 0) {
                  echo '<div class="no-reviews">리뷰한 작품이 없습니다.</div>';
              } else {
                while($row = mysqli_fetch_array($result_review)){
                ?>
                <div class="box" type="button" data-userid="<?= $row['Userid'] ?>" data-review-number="<?= $row['Formatted_Review_number'] ?>" data-review-descript="<?= $row['Review_descript'] ?>" data-current-price="<?= $row['current_price'] ?>" data-name="<?= $row['name'] ?>" data-categories="#자연 #초자연 #밝은 #바다 #디지털아트">
                    <div class="winning_bid"><img src="<?= $row['img_path']; ?>"></div>

                    <div class="contents">
                        <div class="detail"><?= strlen($row['Review_descript']) > 20 ? substr($row['Review_descript'], 0, 20) . '...' : $row['Review_descript'] ?></div>
                        <div class="bid_price">낙찰가 : <?= number_format($row['current_price']); ?>원</div>

                        <div class="title"><?= $row['name'] ?></div>
                        <div class="bid_rated"><?= $row['star_ratings'] ?> / 10</div>
                    </div>
                </div>
                <?php
                 }
               }
                ?>
            </div>

            <?php
            // 전체 리뷰 수 계산
            $sql_count_reviews = "SELECT COUNT(*) as total_reviews FROM review";
            $result_count_reviews = mysqli_query($conn, $sql_count_reviews);
            $row_count_reviews = mysqli_fetch_assoc($result_count_reviews);
            $total_reviews = $row_count_reviews['total_reviews'];

            // 총 페이지 수 계산
            $total_pages = ceil($total_reviews / $items_per_page);
            ?>

            <div class="Artist-Introduce-Button" style="margin-top: 50px;">
                <?php if ($current_page > 1): ?>
                    <a href="?page=<?= $current_page - 1 ?>&sort=<?= $sort ?>" class="pagination-button"><</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <?php if ($i == $current_page): ?>
                        <span class="current-page"><?= $i ?></span>
                    <?php else: ?>
                        <a href="?page=<?= $i ?>&sort=<?= $sort ?>" class="pagination-button"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages): ?>
                    <a href="?page=<?= $current_page + 1 ?>&sort=<?= $sort ?>" class="pagination-button-next">></a>
                    <a href="?page=<?= $total_pages ?>&sort=<?= $sort ?>" class="pagination-button">>></a>
                <?php endif; ?>
            </div>
        </article>

        <!-- footer 시작 -->
        <footer>  
            <div class="footer-Background"></div>
        </footer>  <!-- footer 끝 -->

        <script>
            $(document).ready(function () {
                $(".footer-Background").load("../html/Footer.html");
            });

            // 모달 팝업 열기 함수
            const reviewBoxes = document.querySelectorAll(".box");
            reviewBoxes.forEach((box, index) => {
                box.addEventListener("click", () => {
                    const modalId = `modal${index + 1}`;
                    const userid = box.getAttribute("data-userid");
                    const reviewNumber = box.getAttribute("data-review-number");
                    const reviewDescript = box.getAttribute("data-review-descript");
                    const currentPrice = box.getAttribute("data-current-price");
                    const name = box.getAttribute("data-name");
                    const categories = box.getAttribute("data-categories");
                    const imgPath = box.querySelector("img").getAttribute("src"); // 이미지 경로 가져오기
                    openModal(userid, reviewNumber, reviewDescript, currentPrice, name, categories, imgPath, modalId);
                });
            });

            // 모달 팝업 열기 함수 수정
            const openModal = (userid, reviewNumber, reviewDescript, currentPrice, name, categories, imgPath, modalId) => {
                // 헤더 숨기기
                document.querySelector(".Header").style.display = "none";

                // 새로운 모달 엘리먼트 생성
                const modal = document.createElement("div");
                modal.classList.add("popup");
                document.body.appendChild(modal);

                // 모달 내용 채우기
                modal.innerHTML = `
                    <div class="dim"></div>
                    <div class="popupBox">
                        <div class="btnBox"><button class="close_btn">닫기</button></div>
                        <div class="popup_2">
                            <div class="pic_section" style="display: contents;">
                                <div class="pop_work">
                                    <img src="${imgPath}" style="width: 600px; height: 550px; object-fit: cover; margin-top: 30px; margin-right: 10px;"> 
                                </div>
                            </div>
                            <div class="pop_detail">
                                <div class="consumer"> 구매자 : ${userid} 님</div>
                                <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                                <div class="date">작성 날짜 : ${reviewNumber}</div>
                                <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                                <div class="review_detail">
                                    <div class="review" style="font-size: 1.15em; color: black; font-family: math;">
                                        ${reviewDescript}
                                    </div>
                                </div>
                                <div class="divider" style="margin-top: 0.5em;"></div>
                                <div class="bid_price" style="font-size: 1.4em; margin: 0.3em;">낙찰가 : ${number_format(currentPrice)}원</div>
                                <div class="divider" style="margin-top: 0.5em;"></div>
                                <br>
                                <div class="title">${name}</div>
                                <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                                <div class="category">${categories}</div>
                                <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                                <img class="re_star" src="../img/star.png">
                            </div><!--pop_detail-->
                        </div>
                    </div>
                `;

                // 닫기 버튼과 배경 클릭 시 모달 닫기
                modal.querySelector(".close_btn").addEventListener("click", () => {
                    // 헤더 다시 표시
                    document.querySelector(".Header").style.display = "";
                    // 모달 닫기
                    modal.remove();
                });
            };

            // 낙찰가를 3자리마다 쉼표를 추가하는 함수
            const number_format = (number) => {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

             // 정렬 버튼을 클릭할 때 URL에 정렬 방식 추가 및 페이지 번호를 1로 설정하여 리로드
function updateURLParameter(param, value) {
    let currentUrl = window.location.href;
    let re = new RegExp("([?&])" + param + "=.*?(&|$)", "i");

    if (currentUrl.match(re)) {
        currentUrl = currentUrl.replace(re, '$1' + param + "=" + value + '$2');
    } else {
        currentUrl += currentUrl.includes('?') ? "&" : "?";
        currentUrl += param + "=" + value;
    }

    // 페이지 번호를 항상 1로 설정하고 URL 업데이트
    currentUrl = currentUrl.replace(/(\?|&)page=\d+/, '?');
    
    window.location.href = currentUrl;
}

    // "가격순" 버튼 클릭 시 정렬 방식을 URL에 추가하고 페이지를 1로 설정하여 리로드
    function sortReviewsByPrice() {
        updateURLParameter('sort', 'price');
    }

    // "별점순" 버튼 클릭 시 정렬 방식을 URL에 추가하고 페이지를 1로 설정하여 리로드
    function sortReviewsByRating() {
        updateURLParameter('sort', 'rating');
    }

    // "최근 리뷰순" 버튼 클릭 시 정렬 방식을 URL에 추가하고 페이지를 1로 설정하여 리로드
    function sortReviewsByRecent() {
        updateURLParameter('sort', 'recent');
    }
        </script>
    </body>
</html>
