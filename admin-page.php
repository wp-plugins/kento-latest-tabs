<?php


		if($_POST['oscimp_hidden'] == 'Y') {
			//Form data sent
			$active_color = $_POST['kento_latest_tabs_active'];
			update_option('kento_latest_tabs_active', $active_color);
			
			$hover_color = $_POST['kento_latest_tabs_hover'];
			update_option('kento_latest_tabs_hover', $hover_color);

			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p></div>
			<?php
		} else {
			//Normal page display
			$active_color = get_option( 'kento_latest_tabs_active' );
			$hover_color = get_option( 'kento_latest_tabs_hover' );
		}
?>
		<div class="wrap">
			<div id="icon-tools" class="icon32"></div><?php echo "<h2>" . __( 'Kento Latest Tabs Settings') . "</h2>"; ?>
			<form name="kento_latest_tabs" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
                <input type="hidden" name="oscimp_hidden" value="Y">
                    
                <h4>Custom Settings</h4>
                <?php settings_fields( 'kento_highlight_plugin_options' ); //related with register_setting in index.php
                        do_settings_sections( 'kento_highlight_plugin_options' ); ?>
     
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><label for="link_color"><?php echo __('Active Tab\'s Background Color '); ?>: </label></th>
                        <td style="vertical-align:middle;"><input name="kento_latest_tabs_active" id="active-color" type="text" value="<?php if ( isset( $active_color ) ) echo $active_color; ?>" /></td>
                    </tr>
                   <tr valign="top">
                        <th scope="row"><label for="link_color"><?php echo __('Tab\'s  Hover Color '); ?>: </label></th>
                        <td style="vertical-align:middle;"><input name="kento_latest_tabs_hover" id="hover-color" type="text" value="<?php if ( isset( $hover_color ) ) echo $hover_color; ?>" /></td>
                    </tr>
                </table>
                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>
			</form>
		</div>
	