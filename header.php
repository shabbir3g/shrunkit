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
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		
		
		

		

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <header>  
      	<div class="top-header"> 
			<div class="container"> 
				<div class="shrunkit-left"> 
					<ul class="social-icons"> 
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google"></i></a></li>
					</ul>
				</div>
				<div class="shrunkit-right"> 
					<ul class="social-icons"> 
						<li><a href="#"><i class="fas fa-phone-alt"></i><span>+123-97465</span></a></li>
						<li><a href="#"><i class="fas fa-envelope"></i><span>demo@emial.com</span></a></li>
					</ul>
				</div>
			</div>
      	</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light header-top-fixed">
		  <div class="container"> 
			<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
		  
			<div class="toogle-button"> 
				<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
			</div>
			
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php wp_nav_menu(array(
				'theme_location'	=> 'main-menu',
				'menu_class'		=> 'navbar-nav',
				'fallback_cb'		=> 'default_menu',
			));?>

		<!--	<ul class="navbar-nav">
			  <li><a href="index.html">Home</a></li>
			  <li class="current-menu-item"><a href="news.html">News</a></li>
			  <li><a href="products.html">Product Inventory</a></li>
			  <li><a href="sale.html">Sale</a> </li>
			  <li><a href="legal.html">Legal </a></li>
			  <li><a href="contact.html">Contact</a></li>
			</ul> -->





			<!--<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form> -->
		  </div>
		  </div>
		</nav>
	   </header>

	   <?php if(!is_front_page()):  ?>
		<div class="page-banner"></div>
		<?php endif; ?>
