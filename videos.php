<?php /* Template Name: Videos*/ ?>
<?php get_header(); ?>
<div class="section background-img scroll">
  <div class="container">
    <h1>Wellness Videos</h1>
  </div>
</div>
<div class="section wellness">
  <div class="container">
    <p>Lorem ipsum dolor sit amet, cu vide mnesarchum mel. Nam ad probo facilis minimum, alterum hendrerit consectetuer et vim. Vim et munere vituperata, et agam erat torquatos vel. Vocent reformidans instructior pro ex. Graeco mentitum sea an, ne percipit voluptaria interesset cum, cu vim idque fierent efficiendi.
      Lorem ipsum dolor sit amet, cu vide mnesarchum mel. Nam ad probo facilis minimum, alterum hendrerit consectetuer et vim. Vim et munere vituperata, et agam erat torquatos vel. Vocent reformidans instructior pro ex. Graeco mentitum sea an, ne percipit voluptaria interesset cum, cu vim idque fierent efficiendi.
    </p>
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
