<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php language_attributes(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
    <?php
        if(function_exists('wp_body_open')) {
            wp_body_open(); 
        } 
    ?>
<div id="site">
    <header id="nav-bar" class="navigation">
        <?php get_template_part('template-parts/header/nav-bar') ?>
    </header>
    <div id="content">

