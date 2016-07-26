jQuery(document).ready(function($) {
                       
  var $top;
  var $duration = 200;

  //header animation  
  if ($(window).width() > 650) {

    $(window).scroll(function() { 
      $top = $("html").scrollTop() || $("body").scrollTop();
      if ($top >= 50) {
        $(".headerLine").addClass("hrScrolled", $duration);
        $("h1").html("AUSTIN GARDNER");
        $(".center").addClass("headerScrolled", $duration);
        $("nav").addClass("navScrolled", $duration);
        $("h1").addClass("h1Scrolled");
      } else {
        $("h1").removeClass("h1Scrolled");
        $("nav").removeClass("navScrolled", $duration);
        $(".center").removeClass("headerScrolled", $duration);
        $("h1").html("AUSTIN<br>GARDNER");
        $(".headerLine").removeClass("hrScrolled", $duration);
      };
    }); 
  } else {
      $("h1").html("AUSTIN GARDNER");
      $(".center").addClass("headerScrolled");
      $("nav").addClass("navScrolled");
      $("h1").addClass("h1Scrolled");
  }
  
  //bold nav
  var URL = window.location.href;
  if (URL === "http://taustingardner.com/") {
    var active = document.getElementsByClassName("link")[0];
  } else if (URL === "http://taustingardner.com/contact/") {
    var active = document.getElementsByClassName("link")[1];
  } else if (URL === "http://taustingardner.com/resume/") {
    var active = document.getElementsByClassName("link")[2]; 
  }
                       
  $(active).attr("id", "active");
                       
});
