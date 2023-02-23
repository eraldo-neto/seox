<?php 
	get_header();
?>
<div class="archive-page">
	<?php
		$found_posts = $GLOBALS['wp_query']->found_posts; 
	?> 	

    <?php get_template_part('template-part/taxonomie/hero'); ?>
	<?php get_template_part('template-part/common/post-grid'); ?>
</div>

<?php 
	get_footer();
?>
