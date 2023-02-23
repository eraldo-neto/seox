<?php 
	$featured_img = seox_get_image_attributes( get_post_thumbnail_id(), 'full' );
	get_header();
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>
			<article class="single-page top-header-distance">				
				<div class="single-header">
					<?php get_template_part( 'template-part/single/hero' ); ?>
				</div>
			    <main class="main-content container">
					<?php get_template_part('template-part/common/advertisement'); ?>
					<div class="content">
						<div class="feature-img">
							<img
								class="img"
								src="<?= $featured_img['src'] ?>"
								<?= $featured_img['srcset'] ? 'srcset="' . $featured_img['srcset'] . '"' : '' ?>
								alt="<?= $featured_img['alt'] ?>"
								title="<?= $featured_img['title'] ?>"
							></img>
						</div>
						<?php the_content(); ?>
					</div>
			    </main>
			</article>
		<?php endwhile;
	endif;
	get_footer(); 
?>