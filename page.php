<?php get_header(); ?>
 <!-- Page Header -->
    <?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
    <?php endwhile; ?>
<?php get_footer(); ?>