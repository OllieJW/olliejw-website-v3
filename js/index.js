$(window).scroll(function() {
  $(".sun").css({
    "bottom": ($(window).scrollTop() + 100) + "px",
  });
});

$(document).ready(function() {
  $('header .toggle').click(function(){
    $('.header__container').toggle("slow");
  })
});