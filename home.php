<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="section background-img about scroll">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2>About Us</h2>
        <p>Proudly serving Mercer, Middlesex, Hunterdon, Bucks counties and beyond, Nicola Counseling Services, LLC is a professional counseling agency formed to meet the needs of individuals and families. All our clinicians are licensed and offer personalized approaches to all those we serve. We believe that therapy can greatly improve connection, heal emotional wounds, improve self esteem, and foster safety and security. Our unique therapeutic approach is rooted in our understanding of attachment and interpersonal relational dynamics. Based on our clients' needs, our highly trained clinicians use various treatment modalities, but are chiefly interested in building authentic relationships with clients. </p>
          <a href="<?php echo home_url(); ?>/contact">
        <button class="btn btn-lightblue">Contact</button></a>
      </div>
    </div>
  </div>
</div>
<div class="section services text-center">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2>Services</h2>
        <a href="<?php echo home_url(); ?>/psychotherapy#individual"><p>Individual Therapy</p></a>
        <a href="<?php echo home_url(); ?>/psychotherapy#couples"><p>Couples Therapy</p></a>
        <a href="<?php echo home_url(); ?>/psychotherapy#making"><p>Making the Transition Group</p></a>
      </div>
      <div class="img-holder">
        <img src="<?php bloginfo('template_url'); ?>/img/noun-below.png">
      </div>
    </div>
  </div>
</div>
<div class="section background-img approach scroll">
  <div class="container">
    <div class='inner'>
      <div class="text">
        <h2>Approach</h2>
        <p>We all accrue wounding in the course of living. Finding the right therapist is the best way to find help to heal wounds. To support those who seek change, Nicola Counseling Services clinicians take an authentic, non-judgmental approach that is free of trend-driven techniques. By providing a safe and respectful space that values and nourishes the healing process, clients can expect non-pathologized care. Given that conflict comes in many forms, our therapeutic approach is equally personalized. We work well with people who appreciate a confidential and integrative approach that is pragmatic and tailored to unique experiences. We assist individuals who seek to learn new coping strategies and heal emotional bonds in order to feel safe, secure, and connected. We partner with clients who want to make positive changes in their lives. We are not in-network providers, but will work with your out-of-network benefits. This is the best way we can protect your privacy. Those without insurance or reimbursement can expect a reduced fee. We believe therapy works best when a high standard of confidentiality is met.
        </p>
            <p class="bold text-center italic">No matter where the journey has taken you, all are welcome here.</p>
      </div>
    </div>
  </div>
</div>
<div class="section clinicians">
  <div class="container">
    <div class="row">
      <h2>Clinicians</h2>
      <div class="col-md-6">
        <a href="<?php the_field('clinician_1_pagelink'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/img/profile-widian.jpg">
          <h4>Dr. Widian Nicola</h4>
        </a>
      </div>
      <div class="col-md-6">
        <a href="<?php the_field('clinician_2_pagelink'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/img/profile-clair.jpg">
          <h4>Clair Tattoli</h4>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="section project">
  <div class="container">
    <h2>Lived Experience Project</h2>
    <div class='row'>
      <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
        <img src="<?php bloginfo('template_url'); ?>/img/temp-pod.jpg">
      </div>
    </div>
    <p>The Lived Experience Project with Widian Nicola is a podcast show that
      explores unique and evocative narratives rarely heard in mainstream media.
       Each season focuses on a lesser known and marginalized population and
       how these oral histories unveil the often complex nature of the shared
        human condition. Through this, we hope to build communities infused with
        awareness and compassion.  To view a full list of podcasts, <a target="_blank" href='https://www.livedexperienceproject.org/'>click here</a></p>
  </div>
</div> -->
<div class="section contact-form background-img scroll">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Contact</h2>
        <div class="input-holder">
          <input type="text" placeholder="first name">
        </div>
        <div class="input-holder">
          <input type="text" placeholder="last name">
        </div>
        <div class="input-holder">
          <input type="text" placeholder="phone">
        </div>
        <div class="input-holder">
          <input type="text" placeholder="email">
        </div>
        <div class="input-holder">
          <textarea rows="10" placeholder="message"></textarea>
          <button class="btn btn-darkblue">Submit</div>
          <p class="italic">I am committed to your privacy. Do not include confidential or private information regarding your health condition in this form or any other form found on this website. This form is for general questions or messages. By clicking "send," you agree that the phone number you provide may be used to contact you (including autodialed or pre-recorded calls). Consent is not a condition of purchase.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
