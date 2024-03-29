<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reliable_status.css">
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="../js/reliable_status.js"></script>

    <title>입찰현황</title>
</head>
<body>
    <?php
      include("Header.php");
      include 'bidCheckProcess.php';
    ?>


      <article>
        <div class="Bid-Range">
          <div id="TitleBid">
            <h1>입찰 현황</h1>
          </div>

          <div class="Tap-Choice">
              <div class="Bid-Tap-btn1"><button type="button" name="button1">입찰현황</button><span class="Tap-animation"></span></div>
              <div class="Bid-Tap-btn2"><button type="button" name="button2">종료임박</button><span class="Tap-animation"></span></div>
              <div class="Bid-Tap-btn3"><button type="button" name="button3">종료</button><span class="Tap-animation"></span></div>
          </div>
          <hr>  
            <div class="bid_status">
              <?php
              //세션값 받아오기
                $user_id = $_SESSION['user'];
                $sql = "SELECT * from art
                        where ARTID IN (SELECT DISTINCT artid 
                                        FROM bid
                                        WHERE userid = '{$user_id}'
                                        ORDER BY bid_time )
                              and closing_time > CURDATE();";
                $result = mysqli_query($conn, $sql);
                if ($result === false) {    //오류 여부
                  echo "낙찰 작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                  echo mysqli_error($conn);
                }
                while($row = mysqli_fetch_array($result)){
                  //이미지 경로 찾기
                  $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
                  $result2 = mysqli_query($conn, $sql);
                  $ttmp = mysqli_fetch_array($result2);
                  $image_path = $ttmp['img_path'];
                  
                  //타이머를 위한 시간 차이 구하기
                  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                  $datetime2 = new DateTime($row['closing_time']);
                  $interval = $datetime1->diff($datetime2);

                  //작가명 가져오기
                  $sql = "select artist_name from artist where artist_code = '{$row['artist_code']}'";
                  $result3 = mysqli_query($conn, $sql);
                  $artist = mysqli_fetch_array($result3);

                  //내 경매 가격 가져오기
                  $sql = "SELECT DISTINCT artid, MAX(bid_price) as max_price
                          FROM bid
                          WHERE userid = '{$user_id}' and artid ='{$row['artId']}'";
                  $result4 = mysqli_query($conn, $sql);
                  $my_bid = mysqli_fetch_array($result4);
              ?>
              <div class="Bid-List">
                <div class="Bid-Art-Image">
                  <img src="<?=$image_path?>">
                </div>

                <div class="Bid-Information">
                  <div class="Bid-First">
                    <div><?=$row['name']?></div>
                    <div><?=$artist['artist_name']?></div>
                    <div>시작가 <?=$row['start_price']?>원</div>
                  </div>
                  
                  <div class="Bid-Line"></div>

                  <div class="Bid-Second">
                    <div>TIMER</div>
                    <div><?=$interval->format('%d %h:%i')?></div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Third">
                    <div>현재 최고가</div>
                    <div><?=number_format($row['current_price'])?>원</div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Fourth">
                    <div>내 경매가: <?=number_format($my_bid['max_price'])?> 원</div>
                    <div><button type="button" onclick="location.href='../HTML/best_1.php?aid=<?=$row['artId']?>'">가격 올리기</button></div>
                  </div>
                </div>

              </div>
            <?php
            }
            ?>
          </div>

          <div class="bid_status_imminent">
              <?php
              //세션값 받아오기
                $user_id = $_SESSION['user'];
                $sql = "SELECT * from art
                        where ARTID IN (SELECT DISTINCT artid 
                                        FROM bid
                                        WHERE userid = '{$user_id}'
                                        ORDER BY bid_time )
                              and closing_time > CURDATE()
                              and closing_time <=(CURDATE()+INTERVAL 3 DAY);";
                $result = mysqli_query($conn, $sql);
                if ($result === false) {    //오류 여부
                  echo "낙찰 작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                  echo mysqli_error($conn);
                }
                while($row = mysqli_fetch_array($result)){
                  //이미지 경로 찾기
                  $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
                  $result2 = mysqli_query($conn, $sql);
                  $ttmp = mysqli_fetch_array($result2);
                  $image_path = $ttmp['img_path'];
                  
                  //타이머를 위한 시간 차이 구하기
                  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                  $datetime2 = new DateTime($row['closing_time']);
                  $interval = $datetime1->diff($datetime2);

                  //작가명 가져오기
                  $sql = "select artist_name from artist where artist_code = '{$row['artist_code']}'";
                  $result3 = mysqli_query($conn, $sql);
                  $artist = mysqli_fetch_array($result3);

                  //내 경매 가격 가져오기
                  $sql = "SELECT DISTINCT artid, MAX(bid_price) as max_price
                          FROM bid
                          WHERE userid = '{$user_id}' and artid ='{$row['artId']}'";
                  $result4 = mysqli_query($conn, $sql);
                  $my_bid = mysqli_fetch_array($result4);
              ?>
              <div class="Bid-List">
                <div class="Bid-Art-Image">
                  <img src="<?=$image_path?>">
                </div>

                <div class="Bid-Information">
                  <div class="Bid-First">
                    <div><?=$row['name']?></div>
                    <div><?=$artist['artist_name']?></div>
                    <div>시작가 <?=$row['start_price']?>원</div>
                  </div>
                  
                  <div class="Bid-Line"></div>

                  <div class="Bid-Second">
                    <div>TIMER</div>
                    <div><?=$interval->format('%d %h:%i')?></div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Third">
                    <div>현재 최고가</div>
                    <div><?=number_format($row['current_price'])?>원</div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Fourth">
                    <div>내 경매가: <?=number_format($my_bid['max_price'])?> 원</div>
                    <div><button type="button" onclick="location.href='../HTML/best_1.php?aid=<?=$row['artId']?>'">가격 올리기</button></div>
                  </div>
                </div>

              </div>
            <?php
            }
            ?>
          </div>

          <div class="bid_status_end">
              <?php
              //세션값 받아오기
                $user_id = $_SESSION['user'];
                $sql = "SELECT * from art
                        where ARTID IN (SELECT DISTINCT artid 
                                        FROM bid
                                        WHERE userid = '{$user_id}'
                                        ORDER BY bid_time )
                                        and closing_time < CURDATE();";
                $result = mysqli_query($conn, $sql);
                if ($result === false) {    //오류 여부
                  echo "낙찰 작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                  echo mysqli_error($conn);
                }
                while($row = mysqli_fetch_array($result)){
                  //이미지 경로 찾기
                  $sql = "select img_path from image where art_img_id = '{$row['art_img_id']}'";
                  $result2 = mysqli_query($conn, $sql);
                  $ttmp = mysqli_fetch_array($result2);
                  $image_path = $ttmp['img_path'];
                  
                  //타이머를 위한 시간 차이 구하기
                  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
                  $datetime2 = new DateTime($row['closing_time']);
                  $interval = $datetime1->diff($datetime2);

                  //작가명 가져오기
                  $sql = "select artist_name from artist where artist_code = '{$row['artist_code']}'";
                  $result3 = mysqli_query($conn, $sql);
                  $artist = mysqli_fetch_array($result3);

                  //내 경매 가격 가져오기
                  $sql = "SELECT DISTINCT artid, MAX(bid_price) as max_price
                          FROM bid
                          WHERE userid = '{$user_id}' and artid ='{$row['artId']}'";
                  $result4 = mysqli_query($conn, $sql);
                  $my_bid = mysqli_fetch_array($result4);
              ?>
              <div class="Bid-List">
                <div class="Bid-Art-Image">
                  <img src="<?=$image_path?>">
                </div>

                <div class="Bid-Information">
                  <div class="Bid-First">
                    <div><?=$row['name']?></div>
                    <div><?=$artist['artist_name']?></div>
                    <div>시작가 <?=$row['start_price']?>원</div>
                  </div>
                  
                  <div class="Bid-Line"></div>

                  <div class="Bid-Second">
                    <div>TIMER</div>
                    <div>-<?=$interval->format('%d %h:%i')?></div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Third">
                    <div>현재 최고가</div>
                    <div><?=number_format($row['current_price'])?>원</div>
                  </div>

                  <div class="Bid-Line"></div>
      
                  <div class="Bid-Fourth">
                    <div>내 경매가: <?=number_format($my_bid['max_price'])?> 원</div>
                  </div>
                </div>

              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </article>

      <footer>  <!-- footer 시작 -->
        <div class="footer-Background">
          
        </div>
      </footer>  <!-- footer 끝 -->
      <script>
        
      </script>
</body>
</html>