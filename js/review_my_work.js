  
  $(document).ready(function(){
    $(".footer-Background").load("../html/Footer.html");
  });
  
  $(document).ready(function () {
    // 페이지 로드 시 현재 정렬 방식에 해당하는 버튼에만 active 클래스 추가
    const currentSort = getParameterByName('sort');
    if (currentSort === 'price') {
        $('.menu_type div:contains("가격순")').addClass('active');
    } else if (currentSort === 'rating') {
        $('.menu_type div:contains("별점순")').addClass('active');
    } else if (currentSort === '') {
        $('.menu_type div:contains("전체")').addClass('active'); // "전체" 버튼 추가
    } else {
        $('.menu_type div:contains("최근 리뷰순")').addClass('active');
    }

    // 각 div 클릭하면 정렬 방식을 변경하고 페이지를 리로드
    $('.menu_type div').on('click', function () {
        const buttonText = $(this).text();
        if (buttonText === "최근 리뷰순") {
            sortReviewsByRecent();
        } else if (buttonText === "가격순") {
            sortReviewsByPrice();
        } else if (buttonText === "별점순") {
            sortReviewsByRating();
        } else if (buttonText === "전체") {
            sortReviewsByAll();
        }
    });

    // URL에서 특정 매개변수의 값을 가져오는 함수
    function getParameterByName(name) {
        const url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
        const results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return "";
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // "전체" 버튼 클릭 시 정렬 방식을 URL에 추가하고 페이지를 1로 설정하여 리로드
    function sortReviewsByAll() {
        updateURLParameter('sort', '');
    }
});

