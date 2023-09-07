<<<<<<< HEAD

$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
});


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
=======
$(document).ready(function(){
    $(".Header").load("../html/Header.html");
});

$(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
});
>>>>>>> c9f367d8ee90bc66d63de39b88413b62015bba73
