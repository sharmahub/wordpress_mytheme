<?php
/**
 * The header of the theme.
 *
 * This is the template that displays all of the header section.
 */
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <!-- menu in the header -->
    <?php 
        wp_nav_menu( array(
            // 'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu'
            'theme_location' => 'primary'
        ) );
    ?>
    
    <h3>this is the header of the theme</h3>