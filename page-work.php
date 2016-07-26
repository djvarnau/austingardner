<?php
/*
  Template Name: Work Page
*/
?>


<?php get_header();?>
    <div id="wrapper">
      <div class="spacer"></div>
      
      <?php
      
        $args = array(
          'post_type' => 'portfolio piece'
        );

        $query = new WP_Query($args);
        
      ?>
      
      <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();>
      
        <div class="post">
          <div class="videoWrapper">
            <iframe src=<?php echo "https://player.vimeo.com/video/" .  "the_field('video')" . "?api=1?"; ?> wmode="opaque" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <div class="overlay">
              <h2 class="title"><?php the_field('title'); ?></h2>
              <p class="role"><?php the_field('role'); ?></p>
              <img src="/img/playButton.png" class="playButton">
            </div>
            <img src=<?php echo "the_field('thumbnail')"; ?> class="thumbnail">
          </div>
          <p class="videoDescription"><?php the_field('description'); ?>
  </p>
          <hr class="vimeoLine">
        </div>
      
      <?php endwhile; endif; wp_reset_postdata();?>

<?php get_footer();?>