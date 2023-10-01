<html lang="en">
<head>
    <title>작품 페이지</title>
    <link rel="stylesheet" href="../css/best_1.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
    <?php
        include("Header.php");
    ?>


  <article>
    <div class="art_auction_info">
        <?php
            $sql = "SELECT * FROM Art where artid = '{$_GET['aid']}'";
            $result = mysqli_query($conn, $sql);
            if ($result === false) {    //오류 여부
                echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
                echo mysqli_error($conn);
            ?>
            <script>
                location.href = "main.php";
            </script>
            <?php
            }
                $art = mysqli_fetch_array($result);

                //이미지 경로 찾기
                $sql = "select img_path from image where art_img_id = '{$art['art_img_id']}'";
                $result = mysqli_query($conn, $sql);
                $ttmp = mysqli_fetch_array($result);
                $image_path = $ttmp['img_path'];

                //작가명 가져오기
                $sql = "select artist_name from artist where artist_code = '{$art['artist_code']}'";
                $result = mysqli_query($conn, $sql);
                $artist = mysqli_fetch_array($result);
        ?>
        <img src="<?=$image_path?>" width="50%">
        <div class="art_auction_info_right">
        <div class="art_info_text_box">
            <div class="title"><?=$art['name']?></div>
            <div class="artist"><?=$artist['artist_name']?></div>
            <div class="category">#<?=$art['material']?> #<?=$art['art_type']?> </div>
            <div class="current_price">낙찰가: <?=number_format($art['current_price'])?> 원</div>
        </div>
        <div class="art_auction_btns">
            <!-- <button class="openBtn" type="button">
                <label>입찰 하기</label>
            </button>
            <button class="likes" type="button">
                <img src="../img/likes.png" width="80%" alt="대체 텍스트" onclick="" >
            </button>
            <button class="report" type="button">
                <img src="../img/report.png" width="70%"  alt="대체 텍스트" onclick="" >
            </button>
          </div> -->
        </div>
      
  </div>
  <div class="art_introduce">
      <div class="top">작품 소개</div>
      <hr/>
      <div><?=$art['descript']?></div>
  </div>
  <div class="artist_introduce">
      <div class="top">작가 소개</div>
      <hr/>
      <div>2023년 새로 데뷔한 신인작가, 내면에 감춰진 마음을 표현하는 작가이며</div>
      <div>지금은 잦은 스케줄과 과제로 인해 심신이 지쳐있는 상태다.</div>
      <div>2024년 서일대학교 소프트웨어공학과를 졸업할 예정이지만 이 상태론 어림도 없을 것 같다.</div>
      <div>대표작으론 코딩으로 예술하기, JAVA라는 작품이 있다.</div>
  </div>
  <div class="art_caution">
      <div class="top">주의 사항</div>
      <hr/>
      <div>작품에 포함된 구성품을 반드시 확인해주세요. 당사는 응찰자의 구성품 미확인에 대한 책임을 지지 않습니다</div>
      <div>컨디션은 작품만을 대상으로 하며 액자, 족자, 병풍, 좌대, 케이스 등 작품 구성품의 상태는 포함하지 않습니다.</div>
      <div>온라인으로 게재된 이미지로 작품의 일부 컨디션을 확인할 수 있으나 실제 상태를 정확하게 반영하지 못할 수 있으며 작품의 색상, 밝기 등이 실물과 다르게 보일 수 있습니다.</div>
      <div>실물을 확인하지 않아 발생되는 문제에 대한 책임은 응찰자에게 있으며, 이와 같은 유의사항을 반드시 확인하시고 신중히 응찰해 주시길바랍니다.</div>
  </div>
  <div class="artist_other_art">
      <div class="top">작가의 다른 작품</div>
      <hr/>
      <?php
        $sql = "SELECT ar1.*, a.*, i.img_path
                FROM art AS ar1
                JOIN artist AS a ON ar1.artist_code = a.artist_code
                JOIN art AS ar2 ON a.artist_code = ar2.artist_code
                JOIN image AS i ON ar1.art_img_id = i.art_img_id
                WHERE ar1.artid = '{$_GET['aid']}'
                AND ar2.artid <> '{$_GET['aid']}'
                ORDER BY registration_date LIMIT 0, 6";
        $result = mysqli_query($conn, $sql);

        if ($result === false) {
            echo "작품 찾기에 문제가 생겼습니다. 관리자에게 문의해주세요.";
            echo mysqli_error($conn);
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $image_path = $row['img_path']; // $row를 사용하여 이미지 경로 가져오기
                ?>
                <div class="product-works">
                    <img src="<?=$image_path?>" width="90%" class="bottom" style="vertical-align: text-bottom;">
                </div>
                <?php
            }
        }
        ?>

</article>

    <footer> <!--  footer 시작 -->
      <div class="footer-Background">
      
      </div>
     </footer> <!-- footer 끝 -->

    <script>

        $(document).ready(function(){
            $(".footer-Background").load("/html/Footer.html");
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

        
        const bidInsertForm = document.querySelector("#bid-insert-form");
        const nextbtn = document.querySelector("#next_btn");

        nextbtn.addEventListener("click", function(e) {
            <?php
            if(!isset($_SESSION['user'])){
            ?>
                alert("로그인이 필요한 항목입니다.");
                window.location = "login.php";
            <?php
            }else{
            ?>
                location.replace("/user/mypageForm.jsp");
                bidInsertForm.submit();
            <?php
            }
            ?>
        });

    </script>
</body>
</html>