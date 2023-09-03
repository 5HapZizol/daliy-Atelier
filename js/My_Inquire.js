<<<<<<< HEAD

=======
$(function(){
    $(".Header").load("../html/Header.html");
});
>>>>>>> c9f367d8ee90bc66d63de39b88413b62015bba73

$(function(){
    $(".footer-Background").load("../html/Footer.html");
});

$(document).ready(function() {
    $('.Tap-Choice div').on('click', function() {
      const target = this;
      $('.Tap-Choice div').removeClass('active');
      $(target).addClass('active');
    });

    // 페이지 로드 시 첫 번째 자식 요소인 "Bid status"를 기본으로 설정
    $('.Tap-Choice div:first-child').addClass('active');
  });

  $(document).ready(function() {
    // 초기에 답변을 숨김
    $(".Inquire-Answer").hide();
    $(".Inquire-Content").hide();
    
    // 버튼 클릭 시 아코디언 효과 적용
    $(".Question-Title button").click(function() {
      // 클릭한 버튼의 부모 요소에서 다음 형제 요소인 .Inquire-Answer를 토글(열고 닫음)
      $(this).closest('.Question-Body').find(".Inquire-Content, .Inquire-Answer").stop().slideToggle(300);

      var img = $(this).find(".Arrow-Event");
      if (img.attr('src') === '../img/arrow.png') {
        img.attr('src', '../img/arrow2.png'); // 클릭하면 다른 이미지로 변경
      } else {
        img.attr('src', '../img/arrow.png'); // 다시 클릭하면 원래 이미지로 변경
      }
    });
  });

  $(function(){
    $(".Question-Body").each(function() {
      // 현재 div 내에서 "Inquire-Answer" 클래스를 가진 div가 없다면 배경색 변경
      if ($(this).find(".Inquire-Answer").length === 0) {
          $(this).find(".Question-Title").css({"background-color": "#b3b3b3", "color": "#231f22" });
      }
  });
});