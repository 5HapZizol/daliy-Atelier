// $(document).ready(function() {}); 를 $(function () {}); 로 줄여 쓸 수 있어요 !
$(function () {
	$('#gnb, .inner-menu, .hd_bg').mouseenter(function () {
	  $('.inner-menu, .hd_bg').stop().slideDown();
	});
  
	$('#gnb, .inner-menu, .hd_bg').mouseleave(function () {
	  $('.inner-menu, .hd_bg').stop().slideUp();
	});
  
	$('.mobile-button').click(function () {
	  alert('Hello World!');
	});
  });
  