<?php  
/*
Plugin Name: Nicescrollbar WP
Description: Tiny plugin to add colorful and fancy scroll bar in your WordPress site
Plugin URI: https://github.com/ifte510/Nicescrollbar-WP
Author: Ontorok
Author URI: http://www.ifte-hsn.com
Version: 1.0
Text Domain: nswp
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'NSWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'NSWP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


if(! class_exists( 'TitanFramework' ) ){
	require_once( NSWP_PLUGIN_DIR.'options/titan-framework-embedder.php' );
}
require_once(NSWP_PLUGIN_DIR.'nicescrollbar-options.php');
register_deactivation_hook(__FILE__, function(){
	delete_option('nswp_options' );
});



function nicescrollbar_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'jquery-nicescroll', NSWP_PLUGIN_URL.'js/jquery.nicescroll.min.js', array( 'jquery' ), '3.6.0', true);
}
add_action( 'wp_enqueue_scripts', 'nicescrollbar_scripts' );


add_action('wp_footer','nicescroll_wp_script' );
function nicescroll_wp_script(){

	$nswp_value = TitanFramework::getInstance( 'nswp' );
	?>
	<script>

		jQuery(document).ready(function($) {
			$("html").niceScroll({
				cursorcolor 		: '<?php echo $nswp_value->getOption( "nswp-cursor-color" ); ?>',
				cursoropacitymin 	: '<?php echo $nswp_value->getOption( "nswp-cursor-opacity-min" ); ?>',
				cursoropacitymax 	: '<?php echo $nswp_value->getOption( "nswp-cursor-opacity-max" ); ?>',
				hidecursordelay 	: '<?php echo $nswp_value->getOption( "nswp-hide-cursor-delay" ); ?>',
				cursorwidth  		: '<?php echo $nswp_value->getOption("nswp-cursor-width")."px"; ?>',
				cursorborder 		: '<?php echo $nswp_value->getOption("nswp-border-width")."px"; ?> solid <?php echo $nswp_value->getOption("nswp-border-color"); ?>',
				cursorborderradius 	: '<?php echo $nswp_value->getOption("nswp-border-radious")."px"; ?>',
				scrollspeed  		: '<?php echo $nswp_value->getOption("nswp-scroll-speed"); ?>',
				mousescrollstep   	: '<?php echo $nswp_value->getOption("nswp-mouse-scroll-step"); ?>',
				touchbehavior    	: <?php echo ($nswp_value->getOption("nswp-touchbehavior")=="1")?"true":"false"; ?>,
				hwacceleration     	: <?php echo ($nswp_value->getOption("nswp-hwacceleration")=="1")?"true":"false"; ?>,
				boxzoom      		: <?php echo ($nswp_value->getOption("nswp-boxzoom")=="1")?"true":"false"; ?>,
				grabcursorenabled   : <?php echo ($nswp_value->getOption("nswp-grab-cursor-enabled")=="1")?"true":"false"; ?>,
				autohidemode   		: <?php echo ($nswp_value->getOption("nswp-auto-hide-mode")=="1")?"true":"false"; ?>,
				bouncescroll   		: <?php echo ($nswp_value->getOption("nswp-bounce-scroll")=="1")?"true":"false"; ?>,
				horizrailenabled   	: <?php echo ($nswp_value->getOption("nswp-horizrail-enabled")=="1")?"true":"false"; ?>,
				railalign   		: '<?php echo $nswp_value->getOption("nswp-railalign"); ?>',
				railvalign   		: '<?php echo $nswp_value->getOption("nswp-railvalign"); ?>',
				enablemousewheel   	: '<?php echo $nswp_value->getOption("nswp-enable-mousewheel"); ?>',
				smoothscroll   		: '<?php echo $nswp_value->getOption("nswp-smooth-scroll"); ?>'

			});
		});
		
	</script>
	<?php
}

?>