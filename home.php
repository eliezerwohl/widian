<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="section background-img about scroll">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2><?php the_field("about_us_headline"); ?></h2>
        <?php the_field("about_us"); ?>
        <a class="btn-link btn btn-lightblue" href="<?php the_field('about_us_button_link'); ?>">
          <?php the_field("about_us_button_text"); ?>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section services text-center">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2><?php the_field("services_headline"); ?></h2>
        <a href="<?php echo home_url(); ?>/counseling#individual"><p><?php the_field("individual_therapy_text"); ?></p></a>
        <a href="<?php echo home_url(); ?>/counseling#couples"><p><?php the_field("couples_therapy_text"); ?></p></a>
        <a href="<?php echo home_url(); ?>/counseling#making"><p><?php the_field("making_the_transition_group_text"); ?></p></a>
      </div>
      <div class="img-holder">
        <img src="<?php bloginfo('template_url'); ?>/img/noun-below.png" alt="project noun image">
      </div>
    </div>
  </div>
</div>
<div class="section background-img approach scroll">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2><?php the_field("approach_headline"); ?></h2>
        <?php the_field("approach_text"); ?>
      </div>
    </div>
  </div>
</div>
<div class="section clinicians">
  <div class="container">
    <div class="row">
      <h2><?php the_field("clinicians_headline"); ?></h2>
      <?php if (   get_field("clinician_2_text") && (!get_field("clinician_3_text"))  ) { ?>
      <div class="col-sm-6">
        <a href="<?php the_field('clinician_1_pagelink'); ?>">
          <?php $image = get_field('clinician_1_image'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
          <h4><?php the_field("clinician_1_text"); ?></h4>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="<?php the_field('clinician_2_pagelink'); ?>">
          <?php $image = get_field('clinician_2_image'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
          <h4><?php the_field("clinician_2_text"); ?></h4>
        </a>
      </div>
    <?php }  elseif (  get_field("clinician_3_text") ) { ?>
    <div class="col-md-4">
      <a href="<?php the_field('clinician_1_pagelink'); ?>">
        <?php $image = get_field('clinician_1_image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
        <h4><?php the_field("clinician_1_text"); ?></h4>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php the_field('clinician_2_pagelink'); ?>">
        <?php $image = get_field('clinician_2_image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
        <h4><?php the_field("clinician_2_text"); ?></h4>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php the_field('clinician_3_pagelink'); ?>">
        <?php $image = get_field('clinician_3_image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
        <h4><?php the_field("clinician_3_text"); ?></h4>
      </a>
    </div>
   <?php  } else { ?>
     <div class="col-sm-12">
       <a href="<?php the_field('clinician_1_pagelink'); ?>">
         <?php $image = get_field('clinician_1_image'); ?>
         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
         <h4><?php the_field("clinician_1_text"); ?></h4>
       </a>
     </div>
   <?php } ?>
  </div>
    <?php if( have_rows('additional_clinicians') ) { ?>
      <div class='row text-center showHide-home'>
        <span class="italic ">show all</span>
      </div>
      <?php $counter = 0; $totalCounter = 0; while ( have_rows( 'additional_clinicians') ) { the_row();
      $rowCount = count(get_field("additional_clinicians"));
      $image=get_sub_field( 'img'); $totalCounter++; $counter++; ?>
      <?php if ($counter == 1) { ?>
        <div class="row more-clinicians">
      <?php } ?>
      <div class="col-md-4">
        <a href="<?php the_field('link'); ?>">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
          <h4><?php the_sub_field("text"); ?></h4>
        </a>
      </div>
      <?php if ( ($counter == 3) || ($rowCount == $totalCounter ) ) { ?>
    </div>
  <?php $counter = 0; } ?>
  <?php }    ?>
  <?php }    ?>
  </div>
</div>
<div class="section contact-form background-img scroll">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_field("contact_headline"); ?></h2>
        <div class="input-holder">
          <input type="text" name="first" placeholder="first name">
        </div>
        <div class="input-holder">
          <input type="text" name="last" placeholder="last name">
        </div>
        <div class="input-holder">
          <input type="text" name="phone" placeholder="phone">
        </div>
        <div class="input-holder">
          <input type="text" name="email" placeholder="email">
        </div>
        <div class="input-holder">
          <textarea rows="10" name="message" placeholder="message"></textarea>
           <div id="agree-holder">
              <input id="agree" type="checkbox" name="agree" placeholder="email"><?php the_field("consent_text"); ?>
            </div>
        </div>
        <div class="input-holder">
          <span id="my_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>
          <div class="error">
            <p class="text-center"><?php the_field("fill_out_all_fields"); ?></p>
          </div>
          <div class="thank-you">
            <p class="text-center"><?php the_field("contact_thank_you_text"); ?></p>
          </div>
          <input type="hidden" name="location" value="Home Page">
          <button id="theSubmit" class="btn btn-darkblue"><?php the_field("submit_button_text"); ?></button>
          <?php the_field("contact_main_text"); ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
