<?php /* Template Name: Emergency Contacts */ ?>
<?php get_header(); ?>
<div class="section emg">
  <div class="container">
    <h1><?php the_field("emergency_headline"); ?></h1>
    <span class="emergency"><?php the_field("emergency_text"); ?></span>
  </div>
</div>
<?php if( have_rows( 'content') ){ ?>
  <?php while ( have_rows( 'content') ) { the_row();  ?>
    <div class="section">
      <div class="container">
        <h2><?php the_sub_field("title"); ?></h2>
        <div class="list">
        <?php $rowCount = count(get_sub_field('main')); ?>
        <?php if( have_rows( 'main') ){ ?>
          <?php $subCounter = 0 ; $counter = 0;  ?>
            <?php while ( have_rows( 'main') ) { the_row(); $counter++; $subCounter++;  ?>
              <?php if ($subCounter == 1){  ?>
                <div class="row">
              <?php } ?>
              <div class="col-sm-3 col-xs-12"><?php the_sub_field("text"); ?></div>
              <?php if (($subCounter == 4) || ($counter == $rowCount)) { $subCounter = 0; ?>
                </div>
              <?php } ?>
            <?php }; ?>
          <?php  } ?>
          </div>
        </div>
      </div>
  <?php }; ?>
<?php  } ?>
<?php get_footer(); ?>
