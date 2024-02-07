
$(document).ready(function(){
    $(".Author-login-form").hide();

$(".login-tab .Author-Login").click(function () {
    $(".login-tab div").css({"background-color":"#cfcfcf", "border-bottom":"1px solid #000"});
    $(this).css({"background-color":"#ffffff", "border-bottom":"1px solid #fff"});
    $(".General-login-form, .Author-login-form").toggle();
});

$(".login-tab .General-Login").click(function () {
    $(".login-tab div").css({"background-color":"#cfcfcf", "border-bottom":"1px solid #000"});
    $(this).css({"background-color":"#ffffff", "border-bottom":"1px solid #fff"});
    $(".Author-login-form, .General-login-form").toggle();
});

    $(".footer-Background").load("../HTML/Footer.html");
});




// 
let spanOption = document.querySelectorAll(".sign span");

spanOption.forEach(function (span) {
    span.addEventListener("click", function (e) {
        
        //Remove class active
        e.target.parentElement.querySelectorAll(".active").forEach(function (element) {
            element.classList.remove("active");
        });
        //Add class active
        e.target.classList.add("active");
      
       if (e.target.classList.contains("sign-in")) {
         
        document.querySelector(".sign-in-form").classList.add("active");
    }}
    )
})