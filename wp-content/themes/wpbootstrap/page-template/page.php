<?php
/*
Template Name: page-base
*/
?>

<?php get_header(); ?>
<div>
  <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>
  </div>
  <div>
  </div>
</div>
 
<?php get_footer(); ?>