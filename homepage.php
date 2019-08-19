<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shrunkit
	
	template name: Home Page

 */

get_header(); ?>


		<div class="slider-area"> 
			<div class="owl-carousel owl-theme">



				<?php $home_slider = get_field('home_slider'); 
					if($home_slider):

					foreach($home_slider as $slider):  ?>
			    <div class="item"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-8"> 

								<?php echo $slider['left_text']; ?>
								
							</div>
							<div class="col-md-4"> 

								<img src="<?php echo $slider['right_image']['url']; ?>" alt="">
							</div>
						</div>
					</div>
				</div>
				
				<?php endforeach; endif; ?>


			</div>
		</div>
		<section class="welcome-section"> 
			<div class="container">
				<?php $welcome_title = get_field('welcome_title'); 
						if($welcome_title): ?>
					<h4 class="pacifico-title"><?php echo $welcome_title; ?></h4>
					<?php endif; ?>
				<div class="row"> 
					<div class="col-md-6 welcome-content">

						<?php $welcome_left = get_field('welcome_left'); 
						if($welcome_left): ?>

						<?php echo $welcome_left; ?>


						<?php endif; ?>

					</div>
					<div class="col-md-6 welcome-man"> 
						<?php $welcome_right_image = get_field('welcome_right_image'); 
						if($welcome_right_image): ?>
						<img src="<?php echo $welcome_right_image['url']; ?>" alt="">
						<?php endif; ?>

					</div>
				</div>
			</div>

		</section>


		<section class="product-gallery-section"> 
			<div class="container">
				
				<?php $our_best_title = get_field('our_best_title'); 
					if($our_best_title): ?>
				<h4 class="pacifico-title"><?php echo $our_best_title ?></h4>
				<?php endif; ?>



				<?php $product_gallery_title = get_field('product_gallery_title'); 
					if($product_gallery_title): ?>
				<div class="gallery-title"> 
					<div class="shrunkit-left product-title">
					<?php echo $product_gallery_title ; ?> 
						
					</div>
					<div class="shrunkit-right indicator-button"> 
						
						<a class="customPrevBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-left"></i></a>
						<a class="customNextBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
				<?php endif; ?>




			<?php $product_gallery_shortcode = get_field('product_gallery_shortcode'); 
					if($product_gallery_shortcode): ?>
			<?php echo do_shortcode("$product_gallery_shortcode"); ?>

			<?php endif; ?>





			</div>
		</section>


		
	<?php $subscribe_now_code = get_field('subscribe_now_code'); 
			if($subscribe_now_code): ?>
   		<section class="join-us-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-8 col-sm-12 left-subs"> 


					<?php echo $subscribe_now_code; ?>

					


					</div>
					<div class="col-md-4 col-sm-0"> 
						
					</div>
				</div>
			</div>

   		</section>

   		<?php endif; ?>


   		<?php $section_title_blog = get_field('section_title_blog'); 
				if($section_title_blog): ?>
		<section class="blog-area"> 
			<div class="container"> 
				
				<div class="blog-title"> 
					<?php echo $section_title_blog; ?>
					
				</div>
				
				<div class="row"> 

					<?php 

						$posthome = new WP_Query(array(
							'post_type'				=> 'post',
							'posts_per_page'		=> 3,

						));





						while ( $posthome->have_posts() ) :$posthome->the_post(); ?>

					<div class="col-md-4 single-blog homeblog"> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="blog-content"> 
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<h4>Date : <?php the_time('j F Y'); ?></h4>
							<hr> 
							<p><?php echo wp_trim_words(get_the_content(), 17, '</p>
							<a class="read-more" href="'.get_the_permalink().'">Read More</a>'); ?>

						</div>
					</div>
				<?php endwhile; 	?>






				</div>
			</div>
		</section>
	<?php endif; ?>



<?php get_footer();

