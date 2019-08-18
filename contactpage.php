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
	
	template name: Contact Page

 */

get_header(); ?>

<section class="contact-page"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-lg-9 col-md-7">
						<?php $contact_title = get_field('contact_title'); 
						if($contact_title): ?>
						<div class="con-title"> 
							<div class="top-title"></div>
							<?php echo $contact_title; ?>
							
						</div>
						<?php endif; ?>
							
						<?php $contact_form = get_field('contact_form'); 
						if($contact_form): ?>
						

						<?php echo $contact_form; ?>


						<?php endif; ?>


						
					</div>
					<div class="col-lg-3 col-md-5"> 
						<aside class="contact-sidebar"> 

						<?php $right_sidebar = get_field('right_sidebar'); 
						if($right_sidebar): ?>

							<?php echo $right_sidebar; ?>
								
							<?php endif; ?>

						</aside>
					</div>
				</div>


			</div>
		</section>


		<?php $google_maps_shrunkit = get_field('google_maps_shrunkit'); 
						if($google_maps_shrunkit): ?>

			<?php echo $google_maps_shrunkit; ?>
				
			<?php endif; ?>
	



		<section class="contact-logo"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12">
						
						<?php $logo_title = get_field('logo_title'); 
						if($logo_title): ?>


					<div class="con-title"> 
							<div class="top-title"></div>
							<?php echo $logo_title; ?>
							
						</div>


						<?php endif; ?>


		 				

						<div class="partner-logo"> 
							<ul class="row">

								<?php $partner_logo = get_field('partner_logo'); 
								if($partner_logo):

								foreach($partner_logo as $logo):  ?>

								<li class="col-md-2 col-sm-4 col-6"><a href="#"><img src="<?php echo $logo['url']; ?>" alt=""></a></li>

								<?php endforeach; endif; ?>



							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php get_footer();
