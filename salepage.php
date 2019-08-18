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
	
	template name: Sale Page

 */

get_header(); ?>



		<section class="news-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12">
						
						<?php 

						$salepage = new WP_Query(array(
							'post_type'				=> 'sale',
							'posts_per_page'		=> 3,

						));





						while ( $salepage->have_posts() ) :$salepage->the_post(); ?>
						<article> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a href="#"><h2><?php the_title(); ?></h2></a>
							<p><?php echo wp_trim_words(get_the_content(), 100, '</p>
							<a class="read-more" href="'.get_the_permalink().'">Read More</a>'); ?>
							
						</article>

						<?php endwhile; 	?>
						
					</div>
					
				</div>
			</div>
		</section>
	
	

<?php get_footer();
