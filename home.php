<?php 

	get_header(); 
	
?>
	<article id="copy">
		<div class="col span2 center">
		<a name="copytop" id="copytop" class="clear"></a><?php 
		if (have_posts()):
			if (have_posts()): 
				the_post();
				get_template_part("formats/single",get_post_format());
			endif;
		endif; ?>
		</div>
	</article>
	
<?php get_footer(); ?>
