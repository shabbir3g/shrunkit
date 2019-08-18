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
 */

get_header(); ?>


	<section class="legal-page"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-9">


						<?php while ( have_posts() ) :the_post(); ?>
						
						<article> 
							<a href="#"><h2><?php the_title(); ?></h2></a>
							<?php the_content(); ?>
			
							
						</article>
						
					<?php endwhile; 	?>




						
					</div>
					<div class="col-md-3"> 
						<aside class="legal-sidebar"> 
							<h2>Top Products</h2>
							<div class="top-title"></div>

							<div class="single-pro-legal"> 
								<div class="product-legal"> 
									<img src="<?php echo get_template_directory_uri(); ?>/images/p-3.png" alt="">
									<span>$13</span>
								</div>
								<ul class="ratings"> 
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
								</ul>
								<a href="#">Vexin Regular (500mg)</a>
								<a href="#">Mild Intake 150 Pcs</a>
							</div>
							<div class="single-pro-legal"> 
								<div class="product-legal"> 
									<img src="<?php echo get_template_directory_uri(); ?>/images/p-2.png" alt="">
									<span>$13</span>
								</div>
								<ul class="ratings"> 
								<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
									<li><i class="far fa-star"></i></li>
								</ul>
								<a href="#">Vexin Regular (500mg)</a>
								<a href="#">Mild Intake 150 Pcs</a>
							</div>
							

						</aside>
					</div>
				</div>
			</div>
		</section>
	
	

<?php get_footer();
