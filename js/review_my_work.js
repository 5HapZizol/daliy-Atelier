
  
  $(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
  });
  
  $(document).ready(function() {
      $('.menu_type div').on('click', function() {
        const target = this;
        $('.menu_type div').removeClass('active');
        $(target).addClass('active');
      });
  
      // 페이지 로드 시 첫 번째 자식 요소인 "Bid status"를 기본으로 설정
      $('.menu_type div:first-child').addClass('active');
    });