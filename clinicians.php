<?php /* Template Name: Clincians */ ?>
<?php get_header(); ?>
<div class="section profile no-padding">
  <?php if (get_field("full_size_photo") ) { ?>
  <style>
  .page-template-clinicians .profile .background-img {
  	background-image: url(<?php the_field("full_size_photo"); ?>);
  }
  </style>
  <div class="background-img no-scroll">
  </div>
  <?php } ?>
  <?php if (get_field("mobile_photo"))  { ?>
  <div class="mobile-pic visible-xs text-center">
    <img alt="<?php the_field('name'); ?>" src="<?php the_field('mobile_photo'); ?>">
  </div>
  <?php }  ?>
  <div class="light-blue">
    <div class="container">
       <h1><?php the_field("name"); ?></h1>
       <?php the_field("bio"); ?>
    </div>
  </div>
</div>
<?php if( have_rows( 'work') ){ ?>
<div class="section background-img other-work">
  <div class="container">
    <h2>Other Work</h2>
  </div>
</div>
<div class="section work">
  <div class="container">
    <?php while ( have_rows( 'work') ) { the_row();  ?>
      <?php the_sub_field("text"); ?>
    <?php }; ?>
  </div>
</div>
<?php  } ?>
<?php if( get_field("facebook_link") || get_field("email_link") || get_field("linkedin_link") || get_field("youtube_link") ){ ?>
<div class="section social">
  <div class="container">
    <div class="img-holder">
      <?php if( get_field("facebook_link")  ){ ?>
        <a target="_blank" href="<?php the_field('facebook_link') ; ?>"><img  alt="facebook icon" src="<?php bloginfo('template_url'); ?>/img/fb.png"></a>
      <?php } ?>
      <?php if( get_field("linkedin_link")  ){ ?>
        <a target="_blank" href="<?php the_field('linkedin_link') ; ?>"><img  alt="linkedin icon" src="<?php bloginfo('template_url'); ?>/img/linkedin.png"></a>
      <?php } ?>
      <?php if( get_field("email_link")  ){ ?>
        <a target="_blank" href="mailto:<?php the_field('email_link') ; ?>"><img  alt="email icon" src="<?php bloginfo('template_url'); ?>/img/email.png"></a>
      <?php } ?>
      <?php if( get_field("youtube_link")  ){ ?>
        <a target="_blank" href="<?php the_field('youtube_link') ; ?>"><img  alt="youtube icon" src="<?php bloginfo('template_url'); ?>/img/youtube.png"></a>
      <?php } ?>
    </div>
  </div>
</div>
<?php }; ?>
<?php if( get_field("psy_today") ){ ?>
<div class="section psy-today">
  <div class="container">
    <div class="img-holder">
      <?php the_field("psy_today"); ?>
    </div>
  </div>
</div>
<?php }; ?>
<?php get_footer(); ?>
