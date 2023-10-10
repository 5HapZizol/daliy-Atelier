<?php
    include '../server.php'; 

    if (!$conn) {
        die("데이터베이스 연결 오류: " . mysqli_connect_error());
    }
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

        <?php

            $sql = "SELECT Q_write_id, Q_write_select, Q_write_title, DATE_FORMAT(Q_write_time, '%y-%m-%d') AS Q_write_time FROM Q_write ORDER BY Q_write_id DESC LIMIT 0, 10";
            $result = mysqli_query($conn, $sql);

            $Q_write_data = []; // 데이터를 저장할 배열 생성
            $user_id = $_SESSION['user'];
            if ($result->num_rows > 0) {
                while ($Q_write = $result->fetch_array()) {
                    if (strlen($Q_write["Q_write_title"]) > 20) {
                        $Q_write["Q_write_title"] = mb_substr($Q_write["Q_write_title"], 0, 20, "utf-8") . "...";
                    }
                    // 데이터를 배열에 저장
                    $Q_write_data[] = $Q_write;
                }
            }
        ?>

        <tbody class="tb_body">
            <div class="done">
                <?php foreach ($Q_write_data as $Q_write_item): ?>
                    <tr>    
                        <td><?php echo isset($Q_write_item['Q_write_id']) ? $Q_write_item['Q_write_id'] : ''; ?></td>
                        <td><?php echo isset($Q_write_item['Q_write_select']) ? $Q_write_item['Q_write_select'] : ''; ?></td>
                        <td><?php echo isset($Q_write_item['Q_write_title']) ? $Q_write_item['Q_write_title'] : ''; ?></td>
                        <td><?php echo preg_replace('/(?<=\w)\w(?=\w)/', '*', $user_id); ?></td>
                        <td><?php echo isset($Q_write_item['Q_write_time']) ? $Q_write_item['Q_write_time'] : ''; ?></td>
                        <td class="Q_stay">대기</td>
                    </tr>
                <?php endforeach; ?>
            </div>
        </tbody>
        </table>
    </div>

    <div style = "margin-top: 50px;"></div>
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
