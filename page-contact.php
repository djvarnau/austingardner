<?php 
/*
  Template Name: Contact Page
*/


get_header();?>

    <div id="contactWrapper">
      <div class="spacer"></div>
      
      <?php
      
        $args = array(
          'post_type' => 'contact'
        );

        $query = new WP_Query($args);
        
      ?>
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <?php $image_upload = get_post_meta($post->ID, 'logo', true); ?>
      
      
      
        <img src="<?php echo the_field('contact_picture'); ?>" alt="Austin Gardner" id="contactPic">
        <div id="contactText">
          <p id="bio"><?php the_field('bio'); ?>
  </p>
        
      <?php endwhile; endif; wp_reset_postdata();?>
        
        <a href="mailto:taustingardner@gmail.com"><p id="email">TAUSTINGARDNER [AT] GMAIL [DOT] COM</p></a>
        <hr id="contactLine">
        <div id="logos">
          <a href="http://www.vimeo.com/taustingardner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/vimeo.png" alt="Vimeo logo" id="vimeoLogo"></a>
          <a href="http://www.instagram.com/austingardner"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png" alt="Instagram logo" id="vimeoLogo"></a>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>