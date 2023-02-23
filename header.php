<!DOCTYPE html>
<html <?= get_language_attributes() ?>>

<head>
   	<meta charset="<?= bloginfo( 'charset' ) ?>" />
    <meta name="description" content="<?= bloginfo( 'description' ) ?>">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="<?= get_permalink() ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?= bloginfo( 'name' ) ?>" />
    <meta property="og:description"   content="<?= bloginfo( 'description' ) ?>" />
    <meta property="og:image"         content="<?= get_template_directory_uri() . '/assets/eraldo.png' ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php wp_head() ?>

</head>

<body <?php body_class() ?>>

<header class="header row">
    <a href="<?= get_home_url() ?>" aria-label="seox logo">
        <?= file_get_contents( get_template_directory_uri() . '/assets/logo.svg' ) ?>
    </a> 
</header>
