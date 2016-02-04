<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'tf_create_options', 'nswp_create_options' );
function nswp_create_options() {

    $nswp_option_page = TitanFramework::getInstance( 'nswp' );

    $nswp_options = $nswp_option_page->createAdminPanel( array(
        'name' => __('Nicescrollbar WP Options','nswp')
    ));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-cursor-color',
 		'name'		=> __('Scrollbar Color','nswp'),
 		'desc'		=> __('Background color of the scrollbar.'),
 		'type'		=> 'color',
 		'default'	=> '#e74c3c',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-cursor-opacity-min',
 		'name'		=> __('Minimum Scrollbar Opacity','nswp'),
 		'desc'		=> __('Opacity of scrollbar when inactive.'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'1',
 		'step'		=>'0.1',
 		'default'	=> '0',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-cursor-opacity-max',
 		'name'		=> __('Maximum Scrollbar Opacity','nswp'),
 		'desc'		=> __('Opacity of scrollbar when active.'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'1',
 		'step'		=>'0.1',
 		'default'	=> '1',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-hide-cursor-delay',
 		'name'		=> __('Scrollbar Hiding Delay','nswp'),
 		'desc'		=> __('Set the delay in microseconds to fading out scrollbar','nswp'),
 		'type'		=> 'number',
 		'min'		=> '200',
 		'max'		=> '5000',
 		'step'		=>'50',
 		'default'	=> '400',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-cursor-width',
 		'name'		=> __('Scrollbar Width','nswp'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'100',
 		'step'		=>'1',
 		'unit'		=>'px',
 		'default'	=> '5',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-border-color',
 		'name'		=> __('Scrollbar Border Color','nswp'),
 		'desc'		=> __('Border color of scrollbar'),
 		'type'		=> 'color',
 		'default'	=> '#fff',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-border-width',
 		'name'		=> __('Scrollbar Border Width','nswp'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'100',
 		'step'		=>'1',
 		'unit'		=>'px',
 		'default'	=> '0',
 	));


 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-border-radious',
 		'name'		=> __('Scrollbar Border Radious','nswp'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'100',
 		'step'		=>'1',
 		'unit'		=>'px',
 		'default'	=> '0',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-scroll-speed',
 		'name'		=> __('Scrolling Speed','nswp'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'1000',
 		'step'		=>'1',
 		'default'	=> '60',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-mouse-scroll-step',
 		'name'		=> __('Scrolling Speed with Mouse Wheel','nswp'),
 		'type'		=> 'number',
 		'min'		=>'0',
 		'max'		=>'1000',
 		'step'		=>'1',
 		'unit'		=>'px',
 		'default'	=> '40',
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-touchbehavior',
 		'name'		=> __('Enable cursor-drag','nswp'),
 		'desc'		=> __('Enable cursor-drag scrolling like touch devices in desktop computer','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> false,
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-hwacceleration',
 		'name'		=> __('Use Hardware Acceleration','nswp'),
 		'desc'		=> __('Use hardware accelerated scroll when supported','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> true,
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-boxzoom',
 		'name'		=> __('Enable Boxzoom','nswp'),
 		'desc'		=> __('Enable zoom for box content','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> false,
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-grab-cursor-enabled',
 		'name'		=> __('Display "grab" icon','nswp'),
 		'desc'		=> __('Display "grab" icon for div','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> true,
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-auto-hide-mode',
 		'name'		=> __('Auto Hide Scrollbar','nswp'),
 		'desc'		=> __('Scrollbar auto hide','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> true
 	));


 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-bounce-scroll',
 		'name'		=> __('Enable Bouncescroll','nswp'),
 		'desc'		=> __('Enable Bouncescroll','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> false
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-horizrail-enabled',
 		'name'		=> __('Enable Horizontal Scrollbar','nswp'),
 		'desc'		=> __('Enable Horizontal Scrollbar','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> false
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-railalign',
 		'name'		=> __('Vertical Scrollbar Alignment','nswp'),
 		'type'		=> 'select',
 		'options'	=>array(
 					'right'	=> __('Right','nswp'),
 					'left'	=> __('Left','nswp'),
 						),
 		'default'	=> 'right'
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-railvalign',
 		'name'		=> __('Horizontal Scrollbar Alignment','nswp'),
 		'type'		=> 'select',
 		'options'	=>array(
 					'bottom'=> __('Bottom','nswp'),
 					'top'	=> __('Top','nswp'),
 						),
 		'default'	=> 'bottom'
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-enable-mousewheel',
 		'name'		=> __('Enable Scroll With Mouse Wheel','nswp'),
 		'desc'		=> __('Enable Scroll With Mouse Wheel','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> true
 	));

 	$nswp_options->createOption(array(
 		'id'		=> 'nswp-smooth-scroll',
 		'name'		=> __('Enable Smooth Scroll','nswp'),
 		'desc'		=> __('Enable Smooth Scroll','nswp'),
 		'type'		=> 'checkbox',
 		'default'	=> true
 	));

     $nswp_options->createOption( array(
        'type' => 'save'
    ) );
}
 ?>