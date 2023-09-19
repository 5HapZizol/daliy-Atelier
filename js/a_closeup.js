//close 버튼 스크립트
const span = document.querySelector(".close");
const modal = document.querySelector(".modal");
span.addEventListener('click', ()=>{
  modalDisplay("none");
});
modal.addEventListener('click', ()=>{
  modalDisplay("none");
});
function modalDisplay(text){
  modal.style.display = text;
}

$(function(){
    // 	이미지 클릭시 해당 이미지 모달
      $(".imgC").click(function(){
        $(".modal").show();
        var imgSrc = $(this).children("img").attr("src");
        $(".modalBox img").attr("src", imgSrc);
      });

      /*
      $(".modal close").click(function(){
        $(".modal").hide();
      });
      */
     
      $(".modal").click(function (e) {
        if (e.target.className != "modal") {
          return false;
        } else {
          $(".modal").hide();
        }
      });
    });
