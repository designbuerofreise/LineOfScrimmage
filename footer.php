	</section> <!-- content -->
	</div>
	<footer>
		<nav id="footer">
			<div class="wrap">
				<?php wp_nav_menu(array("theme_location"=>"footer")); ?>
				<p id="top">
					<a href="#">An den Anfang der Seite und zum Menü</a>
				</p>			
			</div>
		</nav>
	</footer>
	</div>
	<script type="text/javascript">
	<?php 
		echo file_get_contents(get_template_directory()."/js/jquery-1.10.2.min.js");
		echo file_get_contents(get_template_directory()."/js/jquery.bxslider/jquery.bxslider.min.js");
		echo file_get_contents(get_template_directory()."/js/Magnific-Popup-master/dist/jquery.magnific-popup.min.js");
		echo file_get_contents(get_template_directory()."/js/jquery.jpanelmenu.min.js");
		echo file_get_contents(get_template_directory()."/js/library-min.js");
	?>
	</script>
	<?php wp_footer(); ?>
</body>
</html>