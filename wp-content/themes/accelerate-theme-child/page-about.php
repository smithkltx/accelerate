<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="our-services">
	<div class="site-content">
		<h5>Our services</h5>
		<div class = "about-page-summary"
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here's a brief overview of our offered services</p>
		</div>

		<ul class="aboutpage-our-services">

		 <?php while ( have_posts() ) : the_post();
		 		$service_image_1 = get_field("service_image_1");
				$service_title_1 = get_field("service_title_1");
				$service_1 = get_field("service_1");
				$service_image_2 = get_field("service_image_2");
				$service_title_2 = get_field("service_title_2");
				$service_2 = get_field("service_2");
				$service_image_3 = get_field("service_image_3");
				$service_title_3 = get_field("service_title_3");
				$service_3 = get_field("service_3");
				$service_image_4 = get_field("service_image_4");
				$service_title_4 = get_field("service_title_4");
				$service_4 = get_field("service_4");
				$size = "medium";
		 ?>
		 	<li class="individual-services">

				<div class = "service-image-odd">
		 			<figure>
						<?php echo wp_get_attachment_image($service_image_1, $size); ?>
					</figure>
				</div>
				<div class = "odd">
			 		<h2><?php echo $service_title_1; ?></h2>
			 		<p><?php echo $service_1; ?></p>
				</div>

				<div class = "even">
				 	<h2><?php echo $service_title_2; ?></h2>
				 	<p><?php echo $service_2; ?></p>
				</div>
				<div class = "service-image-even">
					<figure 2>
						<?php echo wp_get_attachment_image($service_image_2, $size); ?>
					</figure 2>
				</div>

				<div class = "service-image-odd">
					<figure 3>
						<?php echo wp_get_attachment_image($service_image_3, $size); ?>
					</figure 3>
				</div>
				<div class = "odd">
		 			<h2><?php echo $service_title_3; ?></h2>
		 			<p><?php echo $service_3; ?></p>
				</div>

				<div class = "even">
					<h2><?php echo $service_title_4; ?></h2>
					<p><?php echo $service_4; ?></p>
				</div>
				<div class = "service-image-even"
					<figure 4>
						<?php echo wp_get_attachment_image($service_image_4, $size); ?>
					</figure 4>
				</div>

		 	</li>
		 <?php endwhile; // end of the loop. ?>

		</ul>


	</div>

</section>

<section class = "about-interest">
	<div class = "interest-text">
		<h3>Interested in working with us?</h3>
	</div>
	<div class = "interest-button">
		<a class="button" href="<?php echo home_url(); ?>/contact-us"><h3>Contact Us</h3></a>
	</div>
</section>

<?php get_footer(); ?>
