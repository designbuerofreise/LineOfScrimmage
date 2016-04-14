<?php 

	get_header(); 
	
?>
	<article id="copy"<?php post_class("article"); ?>>
		<a name="copytop" id="copytop" class="clear"></a>
			<h1 class="title">Nicht gefunden</h1>
				<div class="content">
					<p>Es tut uns leid. Die von Ihnen gesuchte oder aufgerufene Seite konnte leider nicht gefunden werden. Da wir die Informationen auf unserer Website ständig aktualisieren, kann das schon einmal passieren.</p>
					<h2>Wir helfen gerne weiter</h2>
					<p>Wir empfehlen, dass Sie noch einmal zur Startseite zurückgehen und hoffen, dass Sie von dort die Informationen finden. Gerne können Sie uns natürlich auch kontaktieren.</p>
					<ul>
						<li><a href="<?php bloginfo("url");?>">Zur Startseite</a></li>
						<li><a href="<?php bloginfo("url");?>/kontakt">Kontakt aufnehmen</a></li>
					</ul>
				</div>
	</article>
	
<?php get_footer(); ?>
