var $top;
$duration = 200;

$(window).scroll(function() {
  
  $top = $("html").scrollTop() || $("body").scrollTop();

  if ($top >= 50) {
    $(".headerLine").addClass("hrScrolled", $duration);
    $("h1").html("AUSTIN GARDNER");
    $("header").addClass("headerScrolled", $duration);
    $("nav").addClass("navScrolled", $duration);
    $("h1").addClass("h1Scrolled");
  } else {
    $("h1").removeClass("h1Scrolled");
    $("nav").removeClass("navScrolled", $duration);
    $("header").removeClass("headerScrolled", $duration);
    $("h1").html("AUSTIN<br>GARDNER");
    $(".headerLine").removeClass("hrScrolled", $duration);
  };
});
