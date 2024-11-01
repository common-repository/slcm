<?php 

// ENQUEE FOR THE CDN OF THE SKYPE
function slcm_scripts_enquee() {   
    wp_enqueue_script( 'slcm.min.js','https://swc.cdn.skype.com/sdk/v1/sdk.min.js', array('jquery') );
}
add_action('wp_footer', 'slcm_scripts_enquee');

// SCRIPTS FOR THE ADMIN AND THE COLOR PICKER
function slcm_admin_scripts() {
	wp_enqueue_style( 'slcm_admin',  plugin_dir_url( __FILE__ ) . 'css/slcm_admin.css' );
    wp_enqueue_style( 'slcm_admin' );
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker');
    wp_enqueue_script( 'slcm.js',plugin_dir_url( __FILE__ ) .'js/slcm.js', array('jquery') );
}

add_action( 'admin_head', 'slcm_admin_scripts' );

// FRONT CSS DESGIN
function slcm_front_css() {   
	wp_register_style( 'slcm_front',  plugin_dir_url( __FILE__ ) . 'css/slcm_front.css' );
	wp_enqueue_style( 'slcm_front' );

}
add_action('wp_enqueue_scripts', 'slcm_front_css');
?>