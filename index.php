<?php get_header(); ?>

<?php if( have_posts()) :
while(have_posts()) : the_post(); ?>
   <h3><?php the_title(); ?> </h3>
   <small>Posten on: <?php the_time(); ?>, in <?php the_category(); ?> </small>
    <p> <?php the_content(); ?> </p>
    <hr>
  <?php endwhile;
endif;
?>

<?php get_footer(); ?>

