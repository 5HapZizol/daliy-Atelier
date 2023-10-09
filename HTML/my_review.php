<!DOCTYPE html>
<html lang="en">
<head>
    <title>내 작품 리뷰 페이지</title>
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
                <div class="menu-btn2"><button>최근 리뷰순</button><span class="menu-animation"></span></div>
                <div class="separator"></div>
                <div class="menu-btn3"><button>가격순</button><span class="menu-animation"></span></div>
                <div class="separator"></div>
                <div class="menu-btn3"><button>별점순</button><span class="menu-animation"></span></div>
            </div><!--menu_type-->

            <div class="reviewss">
                <?php
                $sql_review = "SELECT
                                r.*,
                                a.current_price,
                                a.name,
                                DATE_FORMAT(r.Review_number, '%y-%m-%d') AS Formatted_Review_number,
                                i.img_path
                            FROM review r
                            INNER JOIN art a ON r.artId = a.artid
                            INNER JOIN image i ON a.art_img_id = i.art_img_id;
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
            $sql_review = "SELECT
                                r.*,
                                a.current_price,
                                a.name,
                                DATE_FORMAT(r.Review_number, '%y-%m-%d') AS Formatted_Review_number,
                                i.img_path
                            FROM review r
                            INNER JOIN art a ON r.artId = a.artid
                            INNER JOIN image i ON a.art_img_id = i.art_img_id;
                            ";

            $result_review = mysqli_query($conn, $sql_review);
            if ($result_review === false) {
                echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                echo mysqli_error($conn);
            }

            $index = 1; // 모달 고유 ID를 위한 인덱스 변수 추가
            while($row = mysqli_fetch_array($result_review)){
            ?>
            <div class="popup hidden"  data-modal-id="modal<?= $index ?>">
                <div class="dim"></div>
                <div class="popupBox">
                    <div class="btnBox"><button class="close_btn">닫기</button></div>
                    <div class="popup_2">
                        <div class="pic_section" style="display: contents;">
                            <div class="pop_work">
                                <img src="<?= $row['img_path']; ?>" style="width: 600px; height: 550px; object-fit: cover; margin-top: 30px; margin-right: 10px;"> 
                            </div>
                        </div>
                        <div class="pop_detail">
                            <div class="consumer"> 구매자 : <?= $row['Userid']?> 님</div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                            <div class="date">작성 날짜 : <?= $row['Formatted_Review_number']?></div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                            <div class="review_detail">
                                <div class="review" style="font-size: 1.15em; color: black; font-family: math;">
                                    <?=$row['Review_descript']?>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 0.5em;"></div>
                            <div class="bid_price" style="font-size: 1.4em; margin: 0.3em;">낙찰가 : <?= number_format($row['current_price']);?>원</div>
                            <div class="divider" style="margin-top: 0.5em;"></div>
                            <br>
                            <div class="title"><?=$row['name']?></div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                            <div class="category">#자연 #초자연 #밝은 #바다 #디지털아트</div>
                            <div class="divider" style="margin-top: 0.5em; margin-bottom: 0.5em;"></div>
                            <img class="re_star" src="../img/star.png">
                        </div><!--pop_detail-->
                    </div>
                </div>
            </div>
            <?php
            $index++; // 인덱스 증가
            }
            ?>


          <?php
            if (mysqli_num_rows($result_review) === 0) {
              echo '<div></div>';
          } else { ?>
            <div class="Artist-Introduce-Button">
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>6</button>
                <button>7</button>
                <button>8</button>
                <button>9</button>
                <button>10</button>
                <button>></button>
                <button>>></button>
            </div>
            <?php
               }
            ?>
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

        </script>
    </body>
</html>
