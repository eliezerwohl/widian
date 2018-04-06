<?php /* Template Name: Psychotherapy */ ?>
<?php get_header(); ?>
<div class="section section-menu  service-section background-img scroll">
  <div class="container">
    <div class="holder"><h2><a href="#individual">Individual<br>Therapy</a></h2></div>
    <div class="holder"><h2><a href="#couples">Couples<br>Therapy</a></h2></div>
    <div class="holder"><h2><a href="#making">Making The<br>Transition<br>Group</a></h2></div>
  </div>
</div>
<div class="section services">
  <div class="container">
    <h1>Services</h1>
    <?php the_field("main"); ?>
  </div>
</div>
<div class="section services-2">
  <div class="container">
    <div id="individual"><?php the_field("individual"); ?></div>
    <div id="couples"><?php the_field("couples"); ?></div>
    <div id="making"><?php the_field("making"); ?></div>
  </div>
</div>
<div class="section rates">
  <div class="container">
    <h2>Rates</h2>
    <?php the_field("rates"); ?>
  </div>
</div>
<div class="section insurance">
  <div class="container">
    <h2>Insurance</h2>
    <?php the_field("insurance"); ?>
  </div>
</div>
<div class="section cancellation">
  <div class="container">
    <h2>Cancellation Policy</h2>
    <?php the_field("cancellation"); ?>
  </div>
</div>
<?php get_footer(); ?>
