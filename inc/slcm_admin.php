<?php 
function register_my_slcm_settings() {
	//register our settings
	register_setting( 'skype-live-chat-messenger-group', 'skype_id' );
	register_setting( 'skype-live-chat-messenger-group', 'skype_btn' );
	register_setting( 'skype-live-chat-messenger-group', 'skype_label' );
	register_setting( 'skype-live-chat-messenger-group', 'skype_button' );
	register_setting( 'skype-live-chat-messenger-group', 'skype_messeage' );
}
function Slcm_init(){ ?>
<?php 
 if ( isset( $_GET['settings-updated'] ) ) {
 // add settings saved message with the class of "updated"
 add_settings_error( 'slcm_messages', 'slcm_message', __( 'Settings Saved', 'slcm' ), 'updated' );
 }
 
 // show error/update messages
 settings_errors( 'slcm_messages' );
?>
<div class="wrap">
	<form method="post" action="options.php">
	    <?php settings_fields( 'skype-live-chat-messenger-group' ); ?>
	    <?php do_settings_sections( 'skype-live-chat-messenger-group' ); ?>
	    <table class="form-table">
	        <tr valign="top">
	        <th scope="row">Your Skype Id</th>
	        <td><input type="text" name="skype_id" value="<?php echo esc_attr( get_option('skype_id') ); ?>" /></td>
	        </tr>
	        <tr valign="top">
	        <th scope="row">Skype Button</th>
	        <td>
		        <select name = "skype_btn" data-custom = "<?php echo esc_attr( get_option('skype_btn') ); ?>">
		       		<option value = "bubble" <?php if (esc_attr( get_option('skype_btn') ) =='bubble') {echo 'selected';} ?>>Bubble</option>
		        	<option value = "rectangle" <?php if (esc_attr( get_option('skype_btn') ) =='rectangle') {echo 'selected';} ?>>Rectangle</option>
		        	<option value = "rounded" <?php if (esc_attr( get_option('skype_btn') ) =='rounded') {echo 'selected';} ?>>Rounded</option>
		        </select>
		        <?php $comand =  get_option('skype_btn'); ?>
	        </td>
	        </tr>
	        <tr valign="top">
	        <th scope="row">Skype Label</th>
	        <td><input type="text" <?php if ($comand == 'bubble' ) { echo 'disabled'; } ?> placeholder = "Contact us" name="skype_label" value="<?php echo esc_attr( get_option('skype_label') ); ?>" /></td>
	        </tr>
	         <tr valign="top">
	        <th scope="row">Color Button</th>
	        <td>
	        	<?php 
	        		$skype_button = get_option('skype_button'); 
	        		$skype_message = get_option('skype_messeage');
	        	?>
	       		<input type="text" maxlength="6" size="6" class = "color-picker-btn" name = "skype_button" value="<?php echo $skype_button; ?>" />
				</td>
	        </tr>
	        <tr valign="top">
	        <th scope="row">Messeage Color</th>
	        <td>
	       		<input type="text" maxlength="6" size="6" class ="color-picker-msge" name = "skype_messeage" value=" <?php  echo $skype_message;  ?>" />
			</td>
	        </tr>
	    </table>
	    <?php submit_button(); ?>
	</form>
</div>
      <a href = "http://3volutions.co/" class = "powerdbyhash" target = "_blank">Powered by: Hassanal S. Aguam</a>
<?php }
add_action( 'admin_init', 'register_my_slcm_settings' );
?>