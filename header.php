<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shrunkit
 */

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


		<?php $favicon_upload =  get_field('favicon_upload','options'); 
		if($favicon_upload):  ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_upload['url']; ?>" />
		<?php endif; ?>
		
		

		

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <header>  

	

	<?php $section_visibility =  get_field('section_visibility','options'); 
	if($section_visibility):  ?>

		<?php $background_color =  get_field('background_color','options'); 
	  ?>
      	<div class="top-header" style="background: <?php echo get_field('background_color','options'); 
	  ?>;"> 
			<div class="container"> 
				<div class="shrunkit-left"> 
					<ul class="social-icons"> 

						

					<?php $social_icons = get_field('social_icons','options'); ?>
					
						 <?php $facebook = $social_icons['facebook_url']; 
						 if($facebook):  ?> 
						<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>

						<?php endif; ?>


						<?php $twitter = $social_icons['twitter_url']; 
						 if($twitter):  ?> 
						<li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>

						<?php $linkedin = $social_icons['linkedin_url']; 
						 if($linkedin):  ?> 
						<li><a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a></li>
						<?php endif; ?>


						<?php $instagram = $social_icons['instagram_url']; 
						 if($instagram):  ?> 
						<li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
						<?php endif; ?>


						<?php $google = $social_icons['google_url']; 
						 if($google):  ?> 
						<li><a href="<?php echo $google; ?>"><i class="fab fa-google"></i></a></li>
						<?php endif; ?>
						


					</ul>
				</div>
				<div class="shrunkit-right"> 
					<ul class="social-icons"> 

						<?php $right_side_contact = get_field('right_side_contact','options'); ?>

						<?php $mobile = $right_side_contact['mobile_number']; 
						 if($mobile):  ?> 
						<li><a href="tel:<?php echo $mobile; ?>"><i class="fas fa-phone-alt"></i><span><?php echo $mobile; ?></span></a></li>
						<?php endif; ?>

						<?php $email = $right_side_contact['email_address']; 
						 if($email):  ?> 
						<li><a href="mailto:<?php echo $email; ?>"><i class="fas fa-envelope"></i><span><?php echo $email; ?></span></a></li>
						<?php endif; ?>


					</ul>
				</div>
			</div>
      	</div>
	<?php endif; ?>




		<nav class="navbar navbar-expand-lg navbar-light bg-light header-top-fixed">
		  <div class="container"> 



		<?php $logo_upload =  get_field('logo_upload','options'); 
		if($logo_upload):  ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_upload['url'] ?>" alt="<?php echo $logo_upload['title'] ?>" /></a>
		  <?php endif; ?>

			<div class="toogle-button"> 
				<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
			</div>
			
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php wp_nav_menu(array(
				'theme_location'	=> 'main-menu',
				'menu_class'		=> 'navbar-nav',
				'fallback_cb'		=> 'default_menu',
			));?>

		
		  </div>
		  </div>
		</nav>
	   </header>
		
	   <?php if(!is_front_page()):  ?>

	   	<?php $page_banner =  get_field('page_banner','options'); 
		if($page_banner):  ?>
		<div class="page-banner" style="background-image: url(<?php echo $page_banner['url']; ?>); min-height: 250px;"></div>
		<?php endif; ?>



		<?php endif; ?>
