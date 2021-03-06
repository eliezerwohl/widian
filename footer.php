</div>
<footer class="text-center">
	<span itemscope itemtype="http://schema.org/LocalBusiness">
	<meta itemprop="name" content="Nicola Counseling Services, LLC">
  <meta itemprop="image" content="<?php bloginfo('template_url'); ?>/img/logo.png">
  <span itemtype="http://schema.org/PostalAddress" itemscope itemprop="address">
  <meta itemprop="streetAddress" content="24 Rossa Avenue">
  <meta itemprop="addressLocality" content="Lawrenceville">
  <meta itemprop="addressRegion" content="NJ">
  <meta itemprop="postalCode" content= "08648"></span>
	<div class="contact">
		<a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span itemprop="email"><?php the_field("email", "option"); ?></span></a><span class="divider">|</span>
		<a class="contact-me" target="_blank" href="<?php the_field("google_map_link", "option"); ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field("address", "option"); ?></a><span class="divider">|</span>
		<a class="contact-me" target="_blank" href="tel:<?php echo str_replace(' ', '', get_field('phone', 'option')); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span itemprop="telephone"><?php the_field("phone", "option"); ?></span></a>
	</div></span>
	<div>
		<div class="bottom-contact">&copy; <?php echo date("Y"); ?> Nicola Counseling Services, LLC</div><div class="bottom-contact">Website by <a target="_blank" href="https://www.eandvdesign.com">E and V Design, LLC</a></div><div class="bottom-contact"><a href="<?php the_field('privacy_policy_pdf', 'option')?>">Privacy Policy</a></div>
	</div>
	<?php wp_footer(); ?>
	</footer>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php $theme = wp_get_theme( ); echo $theme->version; ?>"></script>
	<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/faq.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/making.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/contact.js"></script> -->
</body>
</html>
