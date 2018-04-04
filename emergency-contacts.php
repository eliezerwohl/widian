<?php /* Template Name: Emergency Contacts */ ?>
<?php get_header(); ?>
<div class="section">
  <div class="container">
    <h1>Emergency Contacts</h1>
    <p class="emergency">IF you or a loved one is having a psychiatric emerge</p>
  </div>
</div>
<?php if( have_rows( 'content') ){ ?>
  <?php while ( have_rows( 'content') ) { the_row();  ?>
  <div class="section">
    <div class="container">

      <h3><?php the_sub_field("title"); ?></h3>
      <div class="list">
      <?php if( have_rows( 'main') ){ ?>
        <?php while ( have_rows( 'main') ) { the_row();  ?>
          <?php the_sub_field("text"); ?>
        <?php }; ?>
      <?php  } ?>
      </div>
    </div>
  </div>
  <?php }; ?>
<?php  } ?>

<?php get_footer(); ?>
