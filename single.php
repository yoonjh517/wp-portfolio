<?php get_header(); ?>

<h2>Single Post</h2>
<!-- if there is a registered post, show it -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
  <p><?php _e('Sorry, no posts matched your criteria.') ?></p>
<?php endif; ?>
<!-- show posts end -->
<?php get_footer(); ?>