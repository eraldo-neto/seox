<div class="d-flex justify-content-between share">
    <a href="whatsapp://send?text=<?= the_title() ?>" 
    aria-label="whatsapp logo compartilhar"
    data-param-text="<?= the_excerpt(); ?>"
    data-action="share/whatsapp/share"
    target="_blank"
    rel="noopener">
        <?= file_get_contents( get_template_directory_uri() . '/assets/whatsapp.svg' ) ?>
    </a>
    <a target="_blank"
    href="https://t.me/share/url?url=<?= get_the_permalink() ?>&text=<?= the_title() ?>"
    aria-label="telegram logo compartilhar"
    rel="noopener">
        <?= file_get_contents( get_template_directory_uri() . '/assets/telegram.svg' ) ?>
    </a>
    <a target="_blank" 
    href="<?= 'https://www.facebook.com/sharer/sharer.php?' . get_the_permalink() ?>"
    rel="noopener"
    aria-label="facebook logo compartilhar">
        <?= file_get_contents( get_template_directory_uri() . '/assets/facebook.svg' ) ?>
    </a>
    <a target="_blank"
    href="https://twitter.com/intent/tweet?<?= get_the_permalink() ?>"
    aria-label="twitter logo compartilhar"
    rel="noopener">
        <?= file_get_contents( get_template_directory_uri() . '/assets/twitter.svg' ) ?>
    </a>
</div>