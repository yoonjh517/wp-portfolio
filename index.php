<?php get_header(); ?>
<!-- if there is a post, show post -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- showing posts ends here -->

<?php get_footer(); ?>