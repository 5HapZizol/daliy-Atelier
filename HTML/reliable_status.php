<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reliable_status.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/reliable_status.js"></script>

    <title>입찰현황</title>
</head>
<body>
    <?php
      include("Header.php");
    ?>


      <article>
        <div class="Bid-Range">
          <div id="TitleBid">
            <h1>입찰 현황</h1>
          </div>

          <div class="Tap-Choice">
            <div class="Bid-Tap-btn1"><button>입찰현황</button><span class="Tap-animation"></span></div>
            <div class="Bid-Tap-btn2"><button>종료임박</button><span class="Tap-animation"></span></div>
            <div class="Bid-Tap-btn3"><button>종료</button><span class="Tap-animation"></span></div>
          </div>
          <hr>  

          <div class="Bid-List">
            <div class="Bid-Art-Image">
              <img src="../img/Art0212.jpg">
            </div>

            <div class="Bid-Information">
              <div class="Bid-First">
                <div>바다 한 가운데</div>
                <div>지나가는개</div>
                <div>시작가 40,000원</div>
              </div>
              
              <div class="Bid-Line"></div>

              <div class="Bid-Second">
                <div>TIMER</div>
                <div>49:32:41</div>
              </div>

              <div class="Bid-Line"></div>
  
              <div class="Bid-Third">
                <div>현재 최고가</div>
                <div>194,490원</div>
              </div>

              <div class="Bid-Line"></div>
  
              <div class="Bid-Fourth">
                <div>내 경매가: 59,300원</div>
                <div><button>가격 올리기</button></div>
              </div>
            </div>

          </div>

          <div class="Bid-List">
            <div class="Bid-Art-Image">
              <img src="../img/Art0921.jpg">
            </div>

            <div class="Bid-Information">
              <div class="Bid-First">
                <div>백야</div>
                <div>aiaiia</div>
                <div>시작가 20,000원</div>
              </div>
              
              <div class="Bid-Line"></div>

              <div class="Bid-Second">
                <div>TIMER</div>
                <div>30:29:21</div>
              </div>

              <div class="Bid-Line"></div>
  
              <div class="Bid-Third">
                <div>현재 최고가</div>
                <div>56,000원</div>
              </div>

              <div class="Bid-Line"></div>
  
              <div class="Bid-Fourth">
                <div>내 경매가: 30,300원</div>
                <div><button>가격 올리기</button></div>
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