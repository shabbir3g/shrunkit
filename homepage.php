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
			    <div class="item"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-8"> 
								<h2>Fat Burning</h2>
								<h1>SUPPLIMENT</h1>
								<h3>Feel Lighter . Feel Strong</h3>
								<a href="#">Contact Us</a>
							</div>
							<div class="col-md-4"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/slide-image-01.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="item"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-8"> 
								<h2>Fat Burning</h2>
								<h1>SUPPLIMENT</h1>
								<h3>Feel Lighter . Feel Strong</h3>
								<a href="#">Contact Us</a>
							</div>
							<div class="col-md-4"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/slide-image-01.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="item"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-8"> 
								<h2>Fat Burning</h2>
								<h1>SUPPLIMENT</h1>
								<h3>Feel Lighter . Feel Strong</h3>
								<a href="#">Contact Us</a>
							</div>
							<div class="col-md-4"> 
								<img src="<?php echo get_template_directory_uri(); ?>/images/slide-image-01.png" alt="">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<section class="welcome-section"> 
			<div class="container">
					<h4 class="pacifico-title">Welcome</h4>
				<div class="row"> 
					<div class="col-md-6 welcome-content"> 
						<h2>We Have 10 Years <br>
						of <span>Experience</span></h2>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
						<ul>
							<li>Perspiciatis unde omnis iste natus error sit</li>
							<li>Excepteur sint occaecat cupidatat non proident sunt in culpa </li>
							<li>Perspiciatis unde omnis iste natus error sit</li>
						</ul>
						<div class="row">  
							<div class="col-md-12"> 
								<a class="get-started" href="#">Get Started</a> <span class="separetor">|</span> <a class="play-button" href="#"><i class="fas fa-play"></i></a> <span>Watch Intro Video</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 welcome-man"> 
						<img src="<?php echo get_template_directory_uri(); ?>/images/welcome-man.png" alt="">

					</div>
				</div>
			</div>

		</section>


		<section class="product-gallery-section"> 
			<div class="container">
				<h4 class="pacifico-title">Our Best</h4>
				<div class="gallery-title"> 
					<div class="shrunkit-left product-title"> 
						<h2>Product <span>Gallery</span></h2>
					</div>
					<div class="shrunkit-right indicator-button"> 
						
						<a class="customPrevBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-left"></i></a>
						<a class="customNextBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="owl-carousel owl-theme">
			    <div class="item"> 
					<div class="product-cont"> 
						<div class="single-product"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/p-1.png" alt="">
							<div class="image-button"> 
								<a href="#">Sold</a>
								<a href="#">Order Now</a>
							</div>
						</div>
						<div class="bottom-product"> 
							<div class="product-name shrunkit-left"> 
								<a href="#">Product Name Here</a>
							</div>
							<ul class="rating shrunkit-right"> 
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half-alt"></i></li>
								<li><i class="far fa-star"></i></li>
							</ul>
						</div>
					</div>
			    </div>
			    <div class="item"> 
					<div class="product-cont"> 
						<div class="single-product"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/p-2.png" alt="">
							<div class="image-button"> 
								<a href="#">Sold</a>
								<a href="#">Order Now</a>
							</div>
						</div>
						<div class="bottom-product"> 
							<div class="product-name shrunkit-left"> 
								<a href="#">Product Name Here</a>
							</div>
							<ul class="rating shrunkit-right"> 
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half-alt"></i></li>
								<li><i class="far fa-star"></i></li>
							</ul>
						</div>
					</div>
			    </div>
			    <div class="item"> 
					<div class="product-cont"> 
						<div class="single-product"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/p-3.png" alt="">
							<div class="image-button"> 
								<a href="#">Sold</a>
								<a href="#">Order Now</a>
							</div>
						</div>
						<div class="bottom-product"> 
							<div class="product-name shrunkit-left"> 
								<a href="#">Product Name Here</a>
							</div>
							<ul class="rating shrunkit-right"> 
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half-alt"></i></li>
								<li><i class="far fa-star"></i></li>
							</ul>
						</div>
					</div>
			    </div>
			   <div class="item"> 
					<div class="product-cont"> 
						<div class="single-product"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/p-4.png" alt="">
							<div class="image-button"> 
								<a href="#">Sold</a>
								<a href="#">Order Now</a>
							</div>
						</div>
						<div class="bottom-product"> 
							<div class="product-name shrunkit-left"> 
								<a href="#">Product Name Here</a>
							</div>
							<ul class="rating shrunkit-right"> 
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half-alt"></i></li>
								<li><i class="far fa-star"></i></li>
							</ul>
						</div>
					</div>
			    </div>
				

				</div>



			</div>
		</section>

   		<section class="join-us-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-8 col-sm-12 left-subs"> 
						<h2>Join our mailing list and get free tips </h2>
						<h4>Get your health back fast</h4>
						<from class="row"> 
							<div class="col-md-6"> 
								<input type="email" placeholder="Enter you email">
							</div>
							<div class="col-md-6"> 
								<input type="submit" value="Subscribe Now">
							</div>
						</from>
					</div>
					<div class="col-md-4 col-sm-0"> 
						
					</div>
				</div>
			</div>

   		</section>
		<section class="blog-area"> 
			<div class="container"> 
				<div class="blog-title"> 
					<h4 class="pacifico-title">Our Blog</h4>
					<h2>Latest <span>Articles</span></h2>
				</div>
				<div class="row"> 
					<div class="col-md-4 single-blog"> 
						<img src="<?php echo get_template_directory_uri(); ?>/images/b-1.png" alt="">
						<div class="blog-content"> 
							<h2><a href="#">Headline Goes Here</a></h2>
							<h4>Date : 22 May 2019</h4>
							<hr> 
							<p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim id est.</p>
							<a class="read-more" href="#">Read More</a>

						</div>
					</div>
					<div class="col-md-4 single-blog"> 
						<img src="<?php echo get_template_directory_uri(); ?>/images/b-2.png" alt="">
						<div class="blog-content"> 
							<h2><a href="#">Headline Goes Here</a></h2>
							<h4>Date : 22 May 2019</h4>
							<hr> 
							<p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim id est.</p>
							<a class="read-more" href="#">Read More</a>

						</div>
					</div>
					<div class="col-md-4 single-blog"> 
						<img src="<?php echo get_template_directory_uri(); ?>/images/b-3.png" alt="">
						<div class="blog-content"> 
							<h2><a href="#">Headline Goes Here</a></h2>
							<h4>Date : 22 May 2019</h4>
							<hr> 
							<p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim id est.</p>
							<a class="read-more" href="#">Read More</a>

						</div>
					</div>
				</div>
			</div>
		</section>




<?php get_footer();
