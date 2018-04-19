<?php /* Template Name: Videos*/ ?>
<?php get_header(); ?>
<div class="section background-img scroll">
  <div class="container">
    <h1><?php the_field("video_headline");?></h1>
  </div>
</div>
<div class="section wellness">
  <div class="container">
    <?php the_field("video_text");?>
  </div>
</div>
<?php if( have_rows( 'content') ){ ?>
  <?php while ( have_rows( 'content') ) { the_row();  ?>
  <div class="section">
    <div class="container">
      <div class='row video-holder'>
        <div class="col-md-offset-2 col-md-8 col-sm-12">
          <div class="embed-responsive embed-responsive-16by9">
            <?php the_sub_field("video"); ?>
          </div>
        </div>
      </div>
      <?php the_field("video"); ?>
      <?php the_sub_field("text"); ?>
    </div>
  </div>
  <?php }; ?>
<?php  } ?>

<?php get_footer(); ?>
