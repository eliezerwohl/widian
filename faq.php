<?php /* Template Name: Faq*/ ?>
<?php get_header(); ?>
<div class="section background-img scroll">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h1>FAQS & FORMS</h1>
      </div>
    </div>
  </div>
</div>
<?php if( have_rows( 'content') ){ ?>
<div class="section faqs">
  <div class="container">
    <div class='row'>
      <div class="col-md-12">
        <h2>FAQS</h2>
        <?php while ( have_rows( 'content') ) : the_row(); ?>
        <div class="faq-container">
          <div class="showHide">
            <p>
              <i class="toggleIcon fa fa-caret-right" aria-hidden="true"></i>
              <?php the_sub_field( 'question'); ?>
            </p>
          </div>
          <div class="answer">
            <p>
              <?php the_sub_field( 'answer'); ?>
           </p>
         </div>
       </div>
       <?php endwhile;  ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php if( have_rows( 'forms') ){ ?>
<div class="section forms">
  <div class="container">
    <div class='row'>
      <div class="col-md-12">
        <h2>Forms</h2>
        <p>Please print and complete the intake forms below prior to your first session.</p>
        <?php while ( have_rows( 'forms') ) { the_row();  ?>
          <a download href="<?php the_sub_field("file"); ?>"><span class="bold"><?php the_sub_field("text"); ?></span></a>
        <?php }; ?>
      </div>
    </div>
  </div>
</div>
<?php  } ?>




<?php get_footer(); ?>
