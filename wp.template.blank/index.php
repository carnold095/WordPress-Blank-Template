<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>
<div class="main-content">
<?php the_content(); ?>
</div>
<?php get_footer(); ?>