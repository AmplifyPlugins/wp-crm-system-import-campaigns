<?php
$wpcrm_import_campaigns_key = get_option( 'wpcrm_import_campaigns_license_key' );
$wpcrm_import_campaigns_status = get_option( 'wpcrm_import_campaigns_license_status' );
?>

<tr valign="top">
	<th scope="row" valign="top">
		<?php _e('Import Campaigns License Key','wp-crm-system-import-campaigns'); ?>
	</th>
	<td>
		<input id="wpcrm_import_campaigns_license_key" name="wpcrm_import_campaigns_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $wpcrm_import_campaigns_key ); ?>" />
		<label class="description" for="wpcrm_import_campaigns_license_key"><?php _e('Enter your license key','wp-crm-system-import-campaigns'); ?></label>
	</td>
</tr>
<?php if( false !== $wpcrm_import_campaigns_key ) { ?>
	<tr valign="top">
		<th scope="row" valign="top">
		</th>
		<td>
			<?php if( $wpcrm_import_campaigns_status !== false && $wpcrm_import_campaigns_status == 'valid' ) { ?>
				<span style="color:green;"><?php _e('active'); ?></span>
				<?php wp_nonce_field( 'wpcrm_plugin_license_nonce', 'wpcrm_plugin_license_nonce' ); ?>
				<input type="submit" class="button-secondary" name="wpcrm_import_campaigns_deactivate" value="<?php _e('Deactivate License','wp-crm-system-import-campaigns'); ?>"/>
			<?php } else {
				wp_nonce_field( 'wpcrm_plugin_license_nonce', 'wpcrm_plugin_license_nonce' ); ?>
				<input type="submit" class="button-secondary" name="wpcrm_import_campaigns_activate" value="<?php _e('Activate License','wp-crm-system-import-campaigns'); ?>"/>
			<?php } ?>
		</td>
	</tr>
<?php } ?>