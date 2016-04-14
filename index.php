<?php 

	get_header(); 
	
?>	<article id="copy" class="col span2 first">
	<a name="copytop" id="copytop" class="clear"></a><?php 
	while(have_posts()):
		if (have_posts()): 
			the_post();
			the_content();
		endif;
	endwhile; ?>
	</article>
	
<?php get_footer(); ?>
