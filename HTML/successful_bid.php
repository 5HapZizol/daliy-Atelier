<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="../css/successful_bid.css">  
    <title>낙찰 작품 페이지</title>
</head>
<body>
    <header>    <!-- 헤더 시작-->
        <div class="Header">
        </div>
      </header>   <!-- 헤더 끝 -->

    <article>
      <div> 
        <br>  
          <div class="page_top">
              <span class="page_name">낙찰 작품</span>
              <p class="page_path">마이페이지 > 낙찰작품</p>
              <hr class="hr_1">
          </div>
      <div class="product-list">

          <div class="product-works">
            <img src="../img/auction/done_digi_7.jpg">
            <div class="btnss">
              <button class="btn" type="button" onclick="onclick=location.href='best_5.html'">🔍︎자세히 보기</button>
              <button class="btn" type="button" onclick="location.href='write_review.html'">🖍리뷰 쓰기</button>
            </div><!--btnss-->
          </div>

          <div class="product-works">
            <img src="../img/auction/done_digi_3.jpg">
            <div class="btnss">
              <button class="btn" type="button" onclick="">🔍︎자세히 보기</button>
              <button class="btn" type="button" onclick="location.href='write_review.html'">🖍리뷰 쓰기</button>
            </div><!--btnss-->
          </div>

          <div class="product-works">
            <img src="../img/auction/new_14.png">
            <div class="btnss">
              <button class="btn" type="button" onclick="">🔍︎자세히 보기</button>
              <button class="btn" type="button" onclick="location.href='write_review.html'">🖍리뷰 쓰기</button>
            </div><!--btnss-->
          </div>
      </div><!--product-list-->
     <div class="product-list">

         <div class="product-works">
          <img src="../img/auction/done_digi_2.jpg">
          <div class="btnss">
            <button class="btn" type="button">🔍︎자세히 보기</button>
            <button class="btn" type="button" onclick="location.href='write_review.html'">🖍리뷰 쓰기</button>
          </div><!--btnss-->
        </div>

        <div class="product-works">
          <img src="../img/auction/done_digi_5.jpg">
          <div class="btnss">
            <button class="btn" type="button" onclick="">🔍︎자세히 보기</button>
            <button class="btn" type="button" onclick="location.href='write_review.html'">🖍리뷰 쓰기</button>
          </div><!--btnss-->
        </div>

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
          $(".Header").load("../html/Header.html");
      });

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