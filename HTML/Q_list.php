<?php
    include '../server.php'; 

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }

    // 현재 페이지 번호 추적
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $items_per_page = 10; // 한 페이지당 보여줄 항목 수

    // 전체 항목 수 가져오기
    $sql_total = "SELECT COUNT(*) AS total FROM Q_write";
    $result_total = mysqli_query($conn, $sql_total);
    $total_items = mysqli_fetch_assoc($result_total)['total'];

    // 전체 페이지 수 계산
    $total_pages = ceil($total_items / $items_per_page);

    // 현재 페이지에 맞는 데이터 가져오기
    $offset = ($current_page - 1) * $items_per_page;
    $sql = "SELECT Q_write_id, Q_write_select, Q_write_title, DATE_FORMAT(Q_write_time, '%y-%m-%d') AS Q_write_time, user_id FROM Q_write ORDER BY Q_write_id DESC LIMIT $offset, $items_per_page";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="/css/Q_list.css">
    <title>1대 1 문의</title>
</head>

<body>
  
<?php
      include("Header.php");
?>

<div style="margin-top: 200px;">
  <article>
    <div>
      <div class="page_top">
        <span class="page_name">1대 1 문의</span>
        <p class="page_path">서비스 > 1대 1 문의</p>
        <br>
        <hr class="hr_1">
    </div>
    
    <div class = "container">
        <div class = "title">
            <button class="btn_Q" onclick="location.href='Q_write.php'">문의하기</button>
        </div>
    </div>

    <div class = "container">
        <table class = "Qlist_table" align = "center">
            <thead class="tb_head">
                <tr>
                    <th>번호</th> <th>구분</th> <th>제목</th> <th>작성자 ID</th> <th>작성일</th> <th>상태</th>
                </tr>    
            </thead>

        <?php while ($Q_write_item = mysqli_fetch_assoc($result)): ?>
    <tr onclick="location.href='write_form.php?Qid=<?= $Q_write_item['Q_write_id'] ?> '">    
        <td><?= $Q_write_item['Q_write_id'] ?></td>
        <td><?= $Q_write_item['Q_write_select'] ?></td>
        <td><?= strlen($Q_write_item['Q_write_title']) > 20 ? mb_substr($Q_write_item['Q_write_title'], 0, 20, "utf-8") . "..." : $Q_write_item['Q_write_title'] ?></td>
        <td><?= preg_replace('/(?<=\w)\w(?=\w)/', '*', $Q_write_item['user_id']) ?></td>
        <td><?= $Q_write_item['Q_write_time'] ?></td>
        <td class="Q_stay">대기</td>
    </tr>
<?php endwhile; ?>

            </div>
        </tbody>
        </table>
    </div>

    <div style="margin-top: 50px;"></div>
<div class="Artist-Introduce-Button">
    <?php if ($current_page > 1): ?>
        <a href="?page=<?= $current_page - 1 ?>" class="pagination-button"><</a>
    <?php endif; ?>
    
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <?php if ($i == $current_page): ?>
            <span class="current-page"><?= $i ?></span>
        <?php else: ?>
            <a href="?page=<?= $i ?>" class="pagination-button"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    
    <?php if ($current_page < $total_pages): ?>
        <a href="?page=<?= $current_page + 1 ?>" class="pagination-button-next">></a>
        <a href="?page=<?= $total_pages ?>" class="pagination-button">>></a>
    <?php endif; ?>
</div>




  
  
  <div style="margin-bottom:  100px;">
    </div>
  </article>
  
  <!-- footer 시작 -->
  <footer>  
    <div class="footer-Background">
    </div>
  </footer>  <!-- footer 끝 -->

  <script>
    

  $(document).ready(function(){
      $(".footer-Background").load("../html/Footer.html");
  });
  </script>
</body>
</html>
