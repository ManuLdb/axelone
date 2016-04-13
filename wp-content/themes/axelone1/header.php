<!DOCTYPE html>
<html>
<head>

    <title>Axel'One</title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body>
<header class="nav">
    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
</header>