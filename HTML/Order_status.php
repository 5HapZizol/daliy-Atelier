<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Order_status.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/Order_status.js"></script>
    <title>주문 조회</title>
</head>
<body>
<?php
      include("Header.php");
    ?>    

    <article>
        <div class="Ordered-Status-Title">
            <h1>주문 목록</h1>
        </div>

        <div class="Order-Menu-List">
            <div class="Order-Menu-Category">
                <div class="Order-Menu-Number">
                    주문번호
                </div>

                <div class="Order-Menu-Image">
                    이미지
                </div>

                <div class="Order-Menu-Name">
                    상품명
                </div>

                <div class="Order-Menu-Price">
                    낙찰가
                </div>

                <div class="Order-Menu-Status">
                    주문 상태
                </div> 
            </div>

            <div class="Order-Item">
                <div class="Order-Item-Number">
                    <div>2023.10.23</div>
                    <div>1932-6843-5423</div>
                </div>

                <div class="Order-Item-Image">
                    <img src="/img/Art0921.jpg">
                </div>

                <div class="Order-Item-Name">
                    <div>길가다 넘어져라 퉤</div>
                    <div>눈뽑부</div>
                </div>

                <div class="Order-Item-Price">
                    694,230원
                </div>

                <div class="Order-Item-Status">
                    <div>입금완료</div>
                    <div><button>취소 신청</button></div>
                </div>
            </div>

            <div class="Order-Item">
                <div class="Order-Item-Number">
                    <div>2023.10.23</div>
                    <div>1932-6843-5423</div>
                </div>

                <div class="Order-Item-Image">
                    <img src="/img/slide_pic_2.jpg">
                </div>

                <div class="Order-Item-Name">
                    <div>봄이 오는날 보이는</div>
                    <div>vialdisa</div>
                </div>

                <div class="Order-Item-Price">
                    294,020원
                </div>

                <div class="Order-Item-Status">
                    <div>입금대기</div>
                    <div><button>취소 신청</button></div>
                </div>
            </div>
        </div>
    </article>


    <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
        </div>
      </footer>  <!-- footer 끝 -->
</body>
</html>