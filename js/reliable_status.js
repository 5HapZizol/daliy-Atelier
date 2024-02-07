
$(document).ready(function(){
  $(".footer-Background").load("../HTML/Footer.html");
});

$(document).ready(function() {
    $('.Tap-Choice div').on('click', function() {
      const target = this;
      $('.Tap-Choice div').removeClass('active');
      $(target).addClass('active');
    });

    // 페이지 로드 시 첫 번째 자식 요소인 "Bid status"를 기본으로 설정
    $('.Tap-Choice div:first-child').addClass('active');

    $(".bid_status_imminent").hide();
    $(".bid_status_end").hide();

    $(".Bid-Tap-btn1").click(function () {
      $(".bid_status").show();
      $(".bid_status_imminent").hide();
      $(".bid_status_end").hide();
    });

    $(".Bid-Tap-btn2").click(function () {
      $(".bid_status").hide();
      $(".bid_status_imminent").show();
      $(".bid_status_end").hide();
    });
    
    $(".Bid-Tap-btn3").click(function () {
      $(".bid_status").hide();
      $(".bid_status_imminent").hide();
      $(".bid_status_end").show();
    });
    
});
