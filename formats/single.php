<div class="content">
<a name="copytop" id="copytop" class="clear"></a>
<?php
	$paged = (get_query_var('paged'))?get_query_var('paged'):1;
	the_post_thumbnail();
	the_title('<h1 class="title"><a href="'.get_permalink().'">',"</a></h1>");
	if($post->post_type=="post"):
	?>
	<?php
	endif;
	the_content(); ?>
	<div class="credits">
		<p>vom <time><a href="<?php the_permalink();?>"><?php echo get_the_date("d.m.Y",$post->ID);?></a></time></a></p>
		<ul><li>Kategorien:&nbsp;</li><?php wp_list_categories(array("title_li"=>"")); ?></ul>
	</div>
	<div class="clear"></div>
</div>
