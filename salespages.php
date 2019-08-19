<?php
/**

	
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
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<p><?php echo wp_trim_words(get_the_content(), 100, '</p>
							<a class="read-more" href="'.get_the_permalink().'">Read More</a>'); ?>
							
						</article>

						<?php endwhile; 	?>
						
					</div>
					
				</div>
			</div>
		</section>
	
	

<?php get_footer();
