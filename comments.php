<?php comment_form(array("class_submit"=>"button")); ?>

<?php 
	if(have_comments()): ?>
	<ul id="comments"> 
		<?php wp_list_comments(); ?>
	</ul>
	<?php paginate_comments_links() ; ?>
<?php else: ?> 
<?php endif; ?>
