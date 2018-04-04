<?php /* Template Name: Making The Transition */ ?>
<?php get_header(); ?>
<div class="section background-img section-menu">
  <div class="container">
    <h1>Making the Transition Group</h1>
    <div class="row sections">
      <div class="col-md-12">
        <span class="service-section"><a href="#">About</a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#">Registration and Fees</a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#">location</a>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#">what to bring</a>
        </span>
        <span class="divider">|</span></span>
        <span class="service-section"><a href="#">cancellations</a>
        </span>
      </div>
    </div>
  </div>
</div>
<div id="about" class="section">
  <div class="container">
    <h2>About The Group</h2>
    <p>The transition from high school to college can be very exciting. It can also become a challenge for many students. Whether it is making new friends, balancing various demands, creating a new routine, or asking for help, this transition can be demanding.</p>
    <?php if( have_rows( 'about') ){ ?>
    <?php while ( have_rows( 'about') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><i class="fa fa-angle-up"></i></div>
  </div>
</div>
<div class="section background-img  mindful">
  <div class="container">

  </div>
</div>
<div id="registration" class="section">
  <div class="container">
    <h2>Registration & Fees</h2>
    <?php if( have_rows( 'registration') ){ ?>
    <?php while ( have_rows( 'registration') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><i class="fa fa-angle-up"></i></div>
  </div>
</div>
<div class="section background-img life">
  <div class="container">

  </div>
</div>
<div id="bring" class="section">
  <div class="container">
    <h2>Registration & Fees</h2>
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
    <h2>Registration & Fees</h2>
    <?php if( have_rows( 'location') ){ ?>
    <?php while ( have_rows( 'location') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><i class="fa fa-angle-up"></i></div>
  </div>
</div>
<div id="cancellations" class="section">
  <div class="container">
    <h2>Registration & Fees</h2>
    <?php if( have_rows( 'cancellations') ){ ?>
    <?php while ( have_rows( 'cancellations') ) { the_row();  ?>
      <h4><?php the_sub_field("title"); ?><div class="line"></div></h4>
      <?php the_sub_field("text"); ?>
      <?php }; ?>
    <?php  } ?>
    <div class="up-holder"><i class="fa fa-angle-up"></i></div>
  </div>
</div>
<div class="section">
  <div class="container">
    <h2>Questions?</h2>
    <h4>Please contact Dr. Widian Nicola at (360) 904-9363 or via email at drwidiannicola@gmail.com should you have any questions.</h4>
  </div>
</div>
<?php get_footer(); ?>
