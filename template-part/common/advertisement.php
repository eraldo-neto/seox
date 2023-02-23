<?php
$categories = get_categories();

$categoryLink = get_category_link( $categories[0]->term_id );
?>

<div class="advertisement">
    <p>publicidade</p>
    <a href="<?= $categoryLink ?>" aria-label="publicidade">
        <div class="image"></div>
    </a>
</div>