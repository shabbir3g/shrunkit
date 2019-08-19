<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shrunkit
 */

?>

	<?php $section_visibility_footer =  get_field('section_visibility_footer','options'); 
	if($section_visibility_footer):  ?>
      <footer class="footer-area" style="background: <?php echo  get_field('background_color_footer','options'); ?>">
        	<div class="container"> 


				<?php $left_text_footer =  get_field('left_text_footer','options'); 
				if($left_text_footer):  ?>
				<div class="shrunkit-left"> 
					<p><?php echo  $left_text_footer; ?></p>
	        	</div>
				<?php endif; ?>



					<?php $right_text_footer =  get_field('right_text_footer','options'); 
					if($right_text_footer):  ?>
	        	<div class="shrunkit-right"> 
					<p><?php echo  $right_text_footer; ?></p>
	        	</div>
				<?php endif; ?>



        	</div>
      </footer>
	<?php endif; ?>
	

	<?php wp_footer(); ?>
      
     <script id="dsq-count-scr" src="//shrunkit.disqus.com/count.js" async></script>
    </body>
</html>
