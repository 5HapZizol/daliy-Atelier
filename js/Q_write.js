
$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");

    displayFileNames();

  // 파일 입력 상자(change 이벤트)가 변경될 때마다 displayFileNames 함수 호출
  $('#Q_Write_File').change(displayFileNames);
});


function displayFileNames() {
    const fileInput = $('#Q_Write_File')[0];
    const fileNameDisplay = $('.Q-Write-File-name');
    
    // 파일이 선택되었을 때만 처리
    if (fileInput.files.length > 0) {
      let fileNames = [];
      for (let i = 0; i < fileInput.files.length; i++) {
        fileNames.push(fileInput.files[i].name);
      }
      fileNameDisplay.val(fileNames.join(', '));
    } else {
      fileNameDisplay.val('첨부파일');
    }
  }
  
  

// $(function () {

//     $(".Q-Write-Up button").click(function() {
//     var Q_Write_SvInput = document.getElementById('Q_Write_SvInput').textContent;
//     var Q_Write_CoInput = document.getElementById('Q_Write_CoInput').textContent;

//     // <select>에서 선택한 값을 가져옵니다.
//     var Q_Write_Type_Select = document.getElementById('Q_Write_Type_Select');
//     var selectedValue = Q_Write_Type_Select.options[Q_Write_Type_Select.selectedIndex].value;

//     // AJAX를 사용하여 데이터를 서버로 전송합니다.
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "Q_writeProcess.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             // 서버 응답을 처리합니다.
//             console.log(xhr.responseText);
//         }
//     };
    
//     // 데이터를 PHP로 전송합니다.
//     var data = "Q_Write_SvInput=" + encodeURIComponent(Q_Write_SvInput) +
//                "&Q_Write_CoInput=" + encodeURIComponent(Q_Write_CoInput) +
//             //    "&value3=" + encodeURIComponent(value3) +
//                "&selectedValue=" + encodeURIComponent(selectedValue);
//     xhr.send(data);
//     });
// });
