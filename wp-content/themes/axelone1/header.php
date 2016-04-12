<!DOCTYPE html>
<html>
<head>

    <title>Axel'One</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> ../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> style.css"/>
    <?php wp_head(); ?>

</head>

<body>
<header class="nav">
    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
</header>