<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php
            wp_title ( '>', true,'right' );
            bloginfo('name');
        ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-md" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="<?php bloginfo( "url" )?>">
            <img src="<?php echo get_template_directory_uri() . "/images/logo.png"?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-menu"> <?php add_navbar(); ?> </div>
    </div>
</nav>


