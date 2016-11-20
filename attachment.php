<?php

// attachment.php
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
    <p>this is coming from attachment.php</p>
  <p><?php the_content(); ?></p>

<?php endwhile; endif; ?>

<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>



<?php get_footer();?>
