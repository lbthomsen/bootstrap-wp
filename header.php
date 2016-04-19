<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lars Boegild Thomsen">

    <title><?php bloginfo( 'description' ); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <header class="row">
            Header goes here
        </header>

    </div>

            <nav class="navbar navbar-default">
        <div class="container">
                <?php 
                    wp_nav_menu( array( 
                        'menu' => 'main-menu', 
                        'theme_location' => 'main-menu', 
                        'depth' => 2, 
                        'container' => 'div', 
                        'container-class', 'collapse navbar-collapse', 
                        'container-id' => 'bs-example-navbar-collapse-1', 
                        'menu_class' => 'nav navbar-nav', 
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
                        'walker' => new wp_bootstrap_navwalker()) 
                    ); 
                ?>
        </div>
            </nav>
    
    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>
        </div>

<!--+
    | vim: ts=4 et nowrap autoindent
    +-->
