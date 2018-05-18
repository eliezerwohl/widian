<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
    <title>
      <?php bloginfo('name'); ?>
    </title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link
    rel='stylesheet' id='sb-font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css?v=<?php $theme = wp_get_theme( ); echo $theme->version; ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nonMin.css?v=<?php $theme = wp_get_theme( ); echo $theme->version; ?>"> -->
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117906079-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117906079-1');
    </script>
  </head>
  <body <?php body_class(); ?>>
    <nav id="navbar" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
          <a  class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">
            <div class="section-logo mobile">
              <div class="parent">
                <h1><span class="iefix"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo">Nicola Counseling Services</span></h1>
                <h4>LLC</h4>
                <div class="line-container"><span class="logo-line"></span></div>
              </div>
            </div>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
              wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                // 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="section-logo visible-sm visible-lg visible-md">
      <a href="<?php echo home_url(); ?>">
        <h1><span class="iefix"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo">Nicola Counseling Services</span></h1>
        <h4>LLC</h4>
          <div class="line-container"><span class="logo-line"></span></div>
      </a>
    </div>
  <div id="main">
