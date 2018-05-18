<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="section contact-form background-img">
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
          <input type="hidden" name="location" value="Contact Page">
          <button id="theSubmit" class="btn btn-darkblue"><?php the_field("submit_button_text"); ?></button>
          <?php the_field("contact_main_text"); ?>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="map-container row">
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.4050590490815!2d-74.74663978511826!3d40.26675147267206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3e282d91fae75%3A0x8e950f01fdedd2ec!2s24+Rossa+Ave%2C+Lawrence+Township%2C+NJ+08648!5e0!3m2!1sen!2sus!4v1523295120222" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        <div class="col-sm-6">
          <div class="table">
            <div class="txt">
              <div class="inline-block">
              <p><span class="bold">Address:</span> <?php the_field('address','option'); ?></p>
              <p><span class="bold">Telephone:</span> <?php the_field('phone','option'); ?></p>
              <p><span class="bold">Email:</span> <?php the_field('email','option'); ?></p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section emergency italic">
    <div class="container">
      <p>If this is a medical emergency, please call 911.</p>
    </div>
  </div>



<?php get_footer(); ?>
