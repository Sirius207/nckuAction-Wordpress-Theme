<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title>
        <?php
            if (is_home()) {
                bloginfo('name');
                echo ' - ';
                bloginfo('description');
            } else {
                wp_title(' - ', true, 'right');
                bloginfo('name');
            } 
        ?>
        </title>
        <!-- facebook-og-meta -->
        <meta name="og:title" content="<?php bloginfo('name'); ?>">
        <meta name="og:description" content="<?php bloginfo('description'); ?>">
        <meta name="og:type" content="website">
        <meta name="og:image" content="<?php bloginfo('template_directory') ?>/assets/image/nckuaction.png">
        <?php wp_head(); ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!-- Bootstrape-3.3.1 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    </head>
    <body>
        