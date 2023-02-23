<?php $term = get_queried_object();  ?>

<div class="hero">
    <div class="bar"></div>
    <div class="wrapper container">
        <h2 class="title"><?= $term ? $term->name : 'Seox' ?></h2>
        <?php get_template_part('template-part/common/share'); ?>
    </div>
</div>