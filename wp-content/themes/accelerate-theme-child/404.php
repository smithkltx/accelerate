<?php
/**
 * The template for displaying the 404 page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<section class="error-page">
	<div class="site-content">
		<div class='error-message'>
			<p>Oh no! Our mistake! Maybe you were looking for our <u><a href="<?php echo home_url(); ?>/blog">blog</a></u>. Or it's always fun to return <u><a href="<?php echo home_url(); ?>">home</a></u>!!</p>
		</div>
	</div><!-- .container -->
</section><!-- .home-page -->

<?php get_footer(); ?>
