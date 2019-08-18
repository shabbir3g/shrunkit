<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shrunkit
 */

get_header(); ?>

	

<section class="news-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-9">
						
						
						


					<div class="top-title"></div>
						<div class="title-area"> 
							<h4>Our</h4>
							<h3>BLOG DETAILS</h3>
						</div>


				<?php while ( have_posts() ) :the_post(); ?>
				
				<article> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<span>Posted By : <?php the_author(); ?> |    Date : <?php the_date('d-m-Y'); ?></span>
						<?php the_content(); ?>
						<div class="social-share">  

							
							<div class="meta">  
							<?php comments_popup_link('No Comment','<a href="#"><span>1</span> Comment</a>','<a href="#"><span>%</span> Comments</a>','rohomtulllahvai','<span class="disabled">Comments Are Disabled</span>'); ?>
								
							
							</div>
							
								
							<div class="meta"> 
								<a href="#"><span><i class="fas fa-heart"></i></span> Like</a>
							</div>
							<div class="meta"> 
								<a href="#"><span><i class="fas fa-share-alt"></i></span> Share :</a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-google-plus"></i></a>
							</div>
						</div>
					</article>
							
							

				<?php		endwhile; 	?>


				<div id="disqus_thread"></div>
					<script>

					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					/*
					var disqus_config = function () {
					this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://shrunkit.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						


						
					</div>
					<div class="col-md-3"> 
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	

<?php get_footer();
