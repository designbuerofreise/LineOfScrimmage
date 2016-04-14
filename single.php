<?php 

	get_header(); 
	
	?><main><?php
	while(have_posts()):
		the_post();?>
		<article id="copy"<?php post_class("wide"); ?>>
			<?php 
				get_template_part("formats/single",get_post_format());
			?>
			<div class="clear"></div>
			<div id="skim">
				<div><?php previous_post_link("%link",'<span class="i">%</span> Vorheriger Beitrag');?></div>
				<div><?php next_post_link("%link",'Folgender Beitrag <span class="i">(</span>');?>&nbsp;</div>
			</div>
			<div id="discussion">
			<?php 
				comments_template();
			?>
			</div>
		</article>
	<?php endwhile; ?>
	</main>
		
<?php get_footer(); ?>
