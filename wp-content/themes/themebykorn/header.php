<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="wp-admin/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <!-- <h1><?php bloginfo('name'); ?></h1>
<h4><?php bloginfo('description'); ?></h4> -->
        <?php

        wp_nav_menu(array(
            'theme_location' => 'my-custom-menu',
            'container' => 'nav',
            'container_class' => 'custom-menu-class',
            'menu_class' => 'menu clearfix'

            

        ));
        ?>

    </header>

</body>

</html>