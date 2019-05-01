$("#btn-top").hide();

$(window).scroll(function() {
    if ($(this).scrollTop() >= $(this).height()){
      $("#btn-top").fadeIn("hidden");
     }
    else{
      $("#btn-top").fadeOut("hidden");
     }
 });

$("#btn-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
