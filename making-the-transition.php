<?php /* Template Name: Making The Transition */ ?>
<?php get_header(); ?>
<div class="section background-img section-menu scroll">
  <div class="container">
    <h1><?php the_field("making_headline"); ?></h1>
    <div class="row sections">
      <div class="col-md-12">
        <span class="service-section"><a href="#about"><?php the_field("about_menu"); ?></a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#registration"><?php the_field("registration_menu"); ?></a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#location"><?php the_field("location_menu"); ?></a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#bring"><?php the_field("what_to_bring_menu"); ?></a>
        </span>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#cancellations"><?php the_field("cancellations_menu"); ?></a>
        </span>
      </div>
    </div>
  </div>
</div>
<div id="about" class="section">
  <div class="container">
    <h2><?php the_field("about_headline"); ?></h2>
    <?php the_field("about_text"); ?>
    <?php if( have_rows( 'about') ){ ?>
    <?php while ( have_rows( 'about') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><a href="#"><i class="fa fa-angle-up"></i></a></div>
  </div>
</div>
<div class="section background-img  mindful scroll">
</div>
<div id="registration" class="section">
  <div class="container">
    <h2><?php the_field("registration_headline"); ?></h2>
    <?php if( have_rows( 'registration') ){ ?>
    <?php while ( have_rows( 'registration') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><a href="#"><i class="fa fa-angle-up"></i></a></div>
  </div>
</div>
<div class="section background-img life scroll">
  <div class="container">
  </div>
</div>
<div id="bring" class="section">
  <div class="container">
    <h2><?php the_field("what_to_bring_headline"); ?></h2>
    <?php if( have_rows( 'bring') ){ ?>
    <?php while ( have_rows( 'bring') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
  </div>
</div>
<div id="location" class="section">
  <div class="container">
    <h2><?php the_field("location_headline"); ?></h2>
    <?php if( have_rows( 'location') ){ ?>
    <?php while ( have_rows( 'location') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><a href="#"><i class="fa fa-angle-up"></i></a></div>
  </div>
</div>
<div id="cancellations" class="section">
  <div class="container">
    <h2><?php the_field("cancellations_headline"); ?></h2>
    <?php if( have_rows( 'cancellations') ){ ?>
    <?php while ( have_rows( 'cancellations') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><a href="#"><i class="fa fa-angle-up"></i></a></div>
  </div>
</div>
<div class="section">
  <div class="container">
    <h2><?php the_field("questions_headline"); ?></h2>
    <?php the_field("questions_text"); ?>
</div>
<?php get_footer(); ?>
