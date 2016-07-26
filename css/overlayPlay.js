$(".playButton").click(function() {
  var overlay = this.parentNode;
  var title = overlay.children[0];
  var role = overlay.children[1];
  var thumbnail = overlay.nextElementSibling;
  var iframe = overlay.previousElementSibling;
  var player = $f(iframe);
  
 
  $(this).hide();
  $(overlay).addClass("overlayPlaying");
  $(title).addClass("titlePlaying");
  $(role).addClass("rolePlaying");  
  $(thumbnail).fadeOut("fast");
  player.api('play');
  
});

