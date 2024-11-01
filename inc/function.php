<?php 
add_action('admin_menu', 'slcm_adminSetup');
function slcm_adminSetup(){
        add_menu_page( 'Slcm Settings', 'Slcm Settings', 'manage_options', 'slcm-plugin', 'Slcm_init' );
}
// THE VIEW DESIGN 
function skype_live_chat_messenger( ) { 

	$skype_id = get_option('skype_id'); 
	$skype_btn = get_option('skype_btn');
	$skype_label = get_option('skype_label');
	$skype_btn_color = get_option('skype_button');
	$skype_color_message = get_option('skype_messeage'); ?>
	
	<div class = "skype-btn-container">
	<span class="skype-button <?php if($skype_btn == NULL) { echo 'bubble';} else { echo $skype_btn; } ?>" data-color="<?php if($skype_btn_color == NULL) { echo '#00AFF0'; } else { echo $skype_btn_color; } ?>" data-text = "<?php echo $skype_label; ?>"  data-contact-id="<?php echo $skype_id; ?>"></span>
	<span class="skype-chat" data-color-message="<?php if($skype_color_message == NULL) { echo '#80DDFF'; } else { echo $skype_color_message; } ?>">
	</span></div>

<?php } 
	add_action( 'wp_footer', 'skype_live_chat_messenger' );