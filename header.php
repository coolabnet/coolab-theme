<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Montserrat+Alternates:400,600,800" rel="stylesheet">
    <title>Coolab</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php if ( is_front_page() ) : ?>
    <section class="section-quemsomos">
    <header class='header-index'>
        <div class="navbar navbar-expand-md navbar-dark">
    <?php else: ?>
      <header class='navecacao'>
           <div class="navbar navbar-expand-md  navbar-dark  navbar-dark bg-dark"">
    <?php endif; ?>
            <div class="header-nav container d-flex ">
                <a class="navbar-brand col-2 " href="<?php echo home_url();?>">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/coolab_logo_branco.png" alt="" class="img-logo img-responsive">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <?php
                   wp_nav_menu(array(
                     'menu'=>'principal-home',
                     'menu_class'=>'navbar-nav mr-auto',
                     'theme_location'=>'menu_coolab',
                     'container'=>'div',
                     'container_class'=>'collapse navbar-collapse',
                     'container_id'=>'navbarSupportedContent'
                     ));
                 ?>


            </div>
             </header>
       