<?php 
$date = get_the_date('d ' . __('\d\e','seox') . ' F, Y');
?>

<div class="hero container">
    <h2 class="title"><?= get_the_title() ?></h2>
    <div class="excerpt d-flex"><?= the_excerpt() ?></div>
    <div class="meta-wrapper">
        <div class="date d-flex">
            <?= file_get_contents( get_template_directory_uri() . '/assets/clock.svg' ) ?>
            <p><?= $date ?></p>
        </div>
        <?php get_template_part('template-part/common/share'); ?>
    </div>
</div>