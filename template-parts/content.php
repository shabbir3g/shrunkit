<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

?>



<article> 
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<span>Posted By : <?php the_author(); ?> |    Date : <?php the_date('d-m-Y'); ?></span>
	<p><?php echo wp_trim_words(get_the_content(), 150, '</p>
	<a class="read-more" href="'.get_the_permalink().'">Read More</a>'); ?>
	<div class="social-share">  

		
		<div class="meta">  
			
		<?php comments_popup_link('<a href="#"><span>No</span> Comment</a>','<a href="#"><span>1</span> Comment</a>','<a href="#"><span>%</span> Comments</a>','shabbircomment','<span class="disabled">Comments Are Disabled</span>'); ?>
			
		
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


