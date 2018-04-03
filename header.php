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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link
    rel='stylesheet' id='sb-font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <nav id="navbar" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="" class="navbar-brand visible-xs" href="#home">
            <div class="section-logo mobile">
              <h1><span class="iefix"><img src="<?php bloginfo('template_url'); ?>/img/logo.png">Nicola Couseling Services</span></h1>
              <h4><span class="parent"><span class="logo-line"></span></span>LLC<span class="parent"><span class="logo-line"></span></span></h4>
            </div>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul  class="nav navbar-nav">
          <?php wp_nav_menu(array(
              'container' => false,
              'depth'           => 1,
             'items_wrap'      => '%3$s',
            )); ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!-- <div class="section-logo">
      <h1><span class="iefix"><img src="<?php bloginfo('template_url'); ?>/img/logo.png">Nicola Couseling Services</span></h1>
      <h4><span class="parent"><span class="logo-line"></span></span>LLC<span class="parent"><span class="logo-line"></span></span></h4>
    </div> -->
  <div id="main">
