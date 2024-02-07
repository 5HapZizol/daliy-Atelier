<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="..\CSS\notice.css">
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <title>공지사항</title>
    </head>

    <!--header 시작-->
    <?php
    include("Header.php");
    ?>
    <!--header 끝-->

    <!--본문 시작-->
    <body>
    <div style="margin-top: 150px;"></div>

    <section class="notice">
    <div class="page-title">
            <div class="container">
                <h3>공지사항</h3>
            </div>
        </div>

        <div id="board-search">
            <div class="container">
                <div class="search-window">
                    <form action="">
                        <div class="search-wrap">
                            <label for="search" class="blind">내용 검색</label>
                            <input id="search" type="search" name="" placeholder="검색어를 입력해주세요." value="">
                            <button type="submit" class="btn btn-dark">검색</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div id="board-list">
            <div class="container">
                <table class="board-table">
                    <thead>
                    <tr>
                        <th scope="col" class="th-num">번호</th>
                        <th scope="col" class="th-title">제목</th>
                        <th scope="col" class="th-date">등록일</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>고정글</td>
                        <th><a href="e_notice.php">[공지사항] 구매 전 안내사항</a></th>
                        <td>2023.06.15</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <th><a href="e_delivery.php">[공지사항] 추석연휴 배송 안내</a></th>
                        <td>2023.09. 07</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <th>
                        <a href="#">[진행중인 이벤트]살살 불어오는 가을바람! 어떤 그림을 장식해볼까?</a>
                        </th>
                        <td>2023.07.13</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <th>
                        <a href="#">[종료된 이벤트]덥다 더워! 본격적으로 더워지는 여름맞이 이벤트!</a>
                        </th>
                        <td>2023.07.13</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <th>
                        <a href="#">[종료된 이벤트]1000번째 구매자는 누구?</a>
                        </th>
                        <td>2023.05.18</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <th><a href="#">[종료된 이벤트]따사로운 봄맞이 이벤트</a></th>
                        <td>2023.04.12</td>
                    </tr>

                    
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    </body>

    <footer>  
      <div class="footer-Background"></div>
    </footer>  <!-- footer 끝 -->
    <script>
     

    $(document).ready(function(){
        $(".footer-Background").load("../HTML/Footer.html");
    });
    </script>
</html>