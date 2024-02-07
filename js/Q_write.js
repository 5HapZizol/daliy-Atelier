
$(document).ready(function(){
    $(".footer-Background").load("../HTML/Footer.html");
});


// 파일 입력(input) 요소의 변경 이벤트를 감지합니다.
$(document).ready(function() {
    $('#Q_Write_File').on('change', function() {
        // 선택한 파일을 가져옵니다.
        var selectedFile = this.files[0];

        // 파일 이름을 표시할 입력 상자 요소를 찾습니다.
        var fileNameInput = $('.Q-Write-File-name');

        // 파일 이름을 입력 상자에 표시합니다.
        fileNameInput.val(selectedFile ? selectedFile.name : 'Attachment');
    });
});
