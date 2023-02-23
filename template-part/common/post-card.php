<?php
    $featured_img = seox_get_image_attributes( get_post_thumbnail_id(), 'full' );
    $date = get_the_date('d ' . __('\d\e','seox') . ' F, Y');
?>
<div class="post-card fixed-container">
    <a href="<?= get_the_permalink() ?>" class="link-card-img">
        <div class="card-img">
            <img
                src="<?= $featured_img['src'] ?>"
                <?= $featured_img['srcset'] ? 'srcset="' . $featured_img['srcset'] . '"' : '' ?>
                alt="<?= $featured_img['alt'] ?>"
                title="<?= $featured_img['title'] ?>"
            ></img>
        </div>
    </a>
    <div class="card-content">
        <div>
            <a href="<?= get_the_permalink() ?>" class="link-card-info">
                <h3 class="title title-basic"><?= get_the_title() ?></h3>
            </a>
        </div>
        <div class="card-meta">
            <div class="date d-flex">
                <?= file_get_contents( get_template_directory_uri() . '/assets/clock.svg' ) ?>
                <p><?= $date ?></p>
            </div>
        </div>
    </div>
</div>