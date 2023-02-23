<div class="post-grid container">
    <?php get_template_part('template-part/common/advertisement'); ?>
    <?php
        while( have_posts() ): the_post();
            get_template_part('template-part/common/post-card');
        endwhile;
        wp_reset_postdata();
    ?>
</div>