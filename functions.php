<?php
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	//adds active class
	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
				$classes[] = 'active ';
		}
		return $classes;
	}
	add_theme_support( 'post-thumbnails' );
	if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	}
function add_jquery() {
    wp_enqueue_script( 'jquery' );
  }
  add_action('init', 'add_jquery');

	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'primary' ),
	) );
	add_action( 'wp_default_scripts', 'move_jquery_into_footer' );
function move_jquery_into_footer( $wp_scripts ) {
    if( is_admin() ) {
        return;
    }
    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
}
// if you want only logged in users to access this function use this hook
add_action('wp_ajax_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want both logged in and anonymous users to get the emails, use both hooks above

function mycustomtheme_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){
			    $first = strip_tags($_POST['first']);
					$last = strip_tags($_POST['last']);
			    $phone = strip_tags($_POST['phone']);
					$location = strip_tags($_POST['location']);
			    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			    $message = strip_tags($_POST['message']);
			    $formcontent="First Name: $first\n Last Name: $last\nEmail: $email\nPhone: $phone\nMessage: $message\nMessage Location: $location";
			    $subject = "Contact Form";
					wp_mail( the_field('email','option'), $subject, $formcontent);
			    // wp_mail("eliezerwohl@gmail.com", $subject, $formcontent);
					echo "good";
					die();
    }
    echo 'error';
    die();
}
require_once('wp-bootstrap-navwalker.php');
	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'Widian' ),
	) );

?>
