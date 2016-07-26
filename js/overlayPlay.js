jQuery(document).ready(function($) {
                       
  $(".overlay").click(function() {
    var title = this.children[0];
    var role = this.children[1];
    var playButton = this.children[2];
    var thumbnail = this.nextElementSibling;
    var iframe = this.previousElementSibling;
    var player = $f(iframe);
    
    $(playButton).hide();
    $(this).addClass("overlayPlaying");
    $(title).addClass("titlePlaying");
    $(role).addClass("rolePlaying");  
    $(thumbnail).fadeOut("fast");
    player.api('play');
    
  });
                                     
});

