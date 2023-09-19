
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

    $(".footer-Background").load("../html/Footer.html");
});