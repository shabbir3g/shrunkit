<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shrunkit
 */

get_header(); ?>

	
<section class="news-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-9">
						
						
						

						<?php
					if ( have_posts() ) : ?>


					<div class="top-title"></div>
						<div class="title-area"> 
							<h4>Our</h4>
							<h3>BLOG DETAILS</h3>
						</div>


						<?php 

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							
							get_template_part( 'template-parts/content');

						endwhile;

						the_posts_pagination();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
						


						
					</div>
					<div class="col-md-3"> 
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>

	

<?php get_footer();
