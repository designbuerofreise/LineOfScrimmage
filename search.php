<?php 

	get_header(); 
	
?>
	<aside id="aside">
	<?php
		get_sidebar();
	?>
	</aside>

	<article id="copy" >
		<div class="col span2 center">
		<a name="copytop" id="copytop" class="clear"></a><?php 
			?><ul><?php
			if (have_posts()):
				while (have_posts()): 
					the_post(); 
					?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php
				endwhile;?>
			</ul>
			<p>Sollten Ihnen diese Ergebnisse wider Erwarten nicht weiterhelfen, probieren Sie doch bitte einen anderen Suchbegriff oder wechseln Sie zur <a href="<?php echo home_url();?>">Startseite</a>.</p>
			<p>Gerne k&ouml;nnen Sie <a href="#">uns auch kontaktieren</a>.</p>
			<?php
			else:?>
				<p>Zu Ihrer Suchanfrage konnten wir keine Treffer ermittlen.</p>
				<p>Bitte probieren Sie doch einen anderen Suchbegriff oder wechseln Sie zur <a href="<?php echo home_url();?>">Startseite</a>.</p>
				<p>Gerne k&ouml;nnen Sie <a href="#">uns auch kontaktieren</a>.</p>
			<?php
			endif; ?>
		</div>
	</article>

	
<?php get_footer(); ?>
