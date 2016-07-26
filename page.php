<?php get_header();?>
    <div id="wrapper">
      <div class="spacer"></div>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <div class="post">
          <div class="videoWrapper">
            <iframe src="https://player.vimeo.com/video/151407387?api=1?" wmode="opaque" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <div class="overlay">
              <h2 class="title"><?php the_title(); ?></h2>
              <p class="role"><?php the_post(); ?></p>
              <img src="/img/playButton.png" class="playButton">
            </div>
            <img src="/img/al-you.png" class="thumbnail">
          </div>
          <p class="videoDescription"><?php the_content(); ?>
  </p>
          <hr class="vimeoLine">
        </div>
      
      <?php endwhile; else : ?>
	     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

<?php get_footer();?>