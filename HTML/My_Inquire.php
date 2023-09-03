<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/My_Inquire.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/My_Inquire.js"></script>
    <title>문의 사항</title>
</head>
<body>
<?php
      include("Header.php");
    ?> 

    <article>
        <div class="Inquire-Title">
            <h1>문의 사항</h1>
        </div>

        <div class="Tap-Choice">
            <div class="Inquire-Tap-btn"><button>질문전체</button><span class="Tap-animation"></span></div>
            <div class="Inquire-Tap-btn"><button>답변완료</button><span class="Tap-animation"></span></div>
        </div>
        <hr>

        <div class="Inquire-Main">
            <div class="Question-Body">
                <div class="Question-Title">
                    <div><span>Q.</span>배송현황은 어디서 확인할 수 있나요?</div>
                    <button><img src="../img/arrow.png" class="Arrow-Event"></button>
                </div>

                <div class="Inquire-Content">
                    <div>
                        <p>
                            제가 며칠전에 손예빈의 부질없는 여자 라는 작품을 경매에서 낙찰받았는데
                            언제즈음 받을 수 있는지 확인하고 싶어요.
                        </p>
                    </div>
                </div>

                <div class="Inquire-Answer">
                    <div>
                        <span>A.</span>네 고객님 그거는 어쩌구 저쩌구 알아서 찾으세요~~~
                    </div>
                </div>
            </div>

            <div class="Question-Body">
                <div class="Question-Title">
                    <div><span>Q.</span>고객센터는 왜 싸가지가 없나요?</div>
                    <button><img src="../img/arrow.png" class="Arrow-Event"></button>
                </div>

                <div class="Inquire-Content">
                    <div>
                        <p>
                            애쉬키들 너무 싹수없는것같아요 속상해요
                        </p>
                    </div>
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