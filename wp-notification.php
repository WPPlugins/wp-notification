<?php
/*
Plugin Name: WP-Notification
Plugin URI: http://wp-learning.net
Description: Show custom notifications on the dashboard
Version: 1.2
Author: Tomek
Author URI: http://wp-learning-net
Text Domain: wp-notification
Domain Path: /lang
*/

load_plugin_textdomain( 'wp-notification', '', dirname( plugin_basename( __FILE__ ) ) . '/lang' );

	if(get_option("administrator_notices_text") == true ){
		function admin_notifications() {
			global $current_screen;
			if ( current_user_can('administrator') ) {
				if(get_option("administrator_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("administrator_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("administrator_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("administrator_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("administrator_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("administrator_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("administrator_notices_text")) ?></p></div><?php
				} else if ( get_option("administrator_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("administrator_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','admin_notifications'); 
	}

	if(get_option("author_notices_text") == true ){
		function author_notifications() {
			global $current_screen;
			if ( current_user_can('author') ) {
				if(get_option("author_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("author_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("author_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("author_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("author_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("author_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("author_notices_text")) ?></p></div><?php
				} else if ( get_option("author_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("author_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','author_notifications'); 
	}
	
	if(get_option("editor_notices_text") == true ){
		function editor_notifications() {
			global $current_screen;
			if ( current_user_can('editor') ) {
				if(get_option("editor_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("editor_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("editor_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("editor_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("editor_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("editor_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("editor_notices_text")) ?></p></div><?php
				} else if ( get_option("editor_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("editor_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','editor_notifications'); 
	}

	if(get_option("contributor_notices_text") == true ){
		function contributor_notifications() {
			global $current_screen;
			if ( current_user_can('contributor') ) {
				if(get_option("contributor_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("contributor_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("contributor_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("contributor_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("contributor_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("contributor_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("contributor_notices_text")) ?></p></div><?php
				} else if ( get_option("contributor_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("contributor_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','contributor_notifications'); 
	}

	if(get_option("subscriber_notices_text") == true ){
		function subscriber_notifications() {
			global $current_screen;
			if ( current_user_can('subscriber') ) {
				if(get_option("subscriber_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("subscriber_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("subscriber_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("subscriber_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("subscriber_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("subscriber_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("subscriber_notices_text")) ?></p></div><?php
				} else if ( get_option("subscriber_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("subscriber_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','subscriber_notifications'); 
	}

	if(get_option("custom_notices_text") == true ){
		function cvstom_notifications() {
			global $current_user, $current_screen;;
			if (get_option("custom_notices_login") == $current_user->user_login){
				if(get_option("custom_notices_hide") == true ){
					$hide = ' is-dismissible';
				}
				if(get_option("custom_notices_notification_type") == "error" ){
					$type = 'notice notice-error';
				} else if(get_option("custom_notices_notification_type") == "warning" ){
					$type = 'notice notice-warning';
				} else if(get_option("custom_notices_notification_type") == "success" ){
					$type = 'notice notice-success';
				} else if(get_option("custom_notices_notification_type") == "info" ){
					$type = 'notice notice-info';
				}
				if( $current_screen->id == get_option("custom_notices_location") ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("custom_notices_text")) ?></p></div><?php
				} else if ( get_option("custom_notices_location") == 'all' ) {
					?><div class="<?php echo $type.$hide ?>"><p><?php echo stripslashes(get_option("custom_notices_text")) ?></p></div><?php
				}
			}
		}
		add_action('admin_notices','cvstom_notifications'); 
	}

function options_save() {
	global $wpdb;
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>
	<?php
	if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved', 'notices' ); ?></strong></p></div>
	<?php endif;
	
}

function notices_footer() {
	?>
	<p class="submit"><input type="submit" name="submit" class="button-primary" value="<?php _e('Save Changes','wp-notification'); ?>"></p>
    </form>
	<strong>
	<?php _e('A plugin by ','wp-notification'); ?><a href="http://wp-learning.net"><em>Tomek</em></a> <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=tomek.maestro@gmail.com&charset=utf-8&&currency_code=EUR&amount=5.00&item_name=Segítsd fenntartani az oldalt!&cancel_return=http://wp-learing.net&return=http://wp-learing.net"><?php _e('Donation','wp-notification'); ?></a>
	</strong>
	<?php
}

function adminiszrator_notices_settings_page() {
	settings_fields('administrator_notice_settings_page');
	do_settings_sections('administrator_notice_settings_page');
	?>
    <h3><?php _e('Administrator notice','wp-notification') ?></h3>
	<?php
	$admin_noice = stripslashes(get_option("administrator_notices_text"));
	wp_editor( $admin_noice, 'administrator_notices_text', $settings = array('textarea_name' => 'administrator_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="administrator_notices_location">
	<?php _e('Where to display?','wp-notification'); ?> <select style="width:300px"name="administrator_notices_location" id="administrator_notices_location">
		<option value="<?php echo get_option("administrator_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("administrator_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php  _e('Dashboard','wp-notification'); ?></option>
		<option value="update-core" style="padding-left:10px"><?php  _e('Updates','wp-notification'); ?></option>
		<option value="edit-post"><?php  _e('Posts','wp-notification'); ?></option>
		<option value="post" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-category" style="padding-left:10px"><?php  _e('Categories','wp-notification'); ?></option>
		<option value="edit-post_tag" style="padding-left:10px"><?php  _e('Tags','wp-notification'); ?></option>
		<option value="upload"><?php  _e('Media','wp-notification'); ?></option>
		<option value="media" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-page"><?php  _e('Pages','wp-notification'); ?></option>
		<option value="page" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-comments"><?php  _e('Comments','wp-notification'); ?></option>
		<option value="themes"><?php  _e('Appearance','wp-notification'); ?></option>
		<option value="widgets" style="padding-left:10px"><?php  _e('Widgets','wp-notification'); ?></option>
		<option value="nav-menus" style="padding-left:10px"><?php  _e('Menus','wp-notification'); ?></option>
		<option value="appearance_page_custom-header" style="padding-left:10px"><?php  _e('Header','wp-notification'); ?></option>
		<option value="appearance_page_custom-background" style="padding-left:10px"><?php  _e('Background','wp-notification'); ?></option>
		<option value="theme-editor" style="padding-left:10px"><?php  _e('Editor','wp-notification'); ?></option>
		<option value="plugins"><?php  _e('Plugins','wp-notification'); ?></option>
		<option value="plugin-install" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="plugin-editor" style="padding-left:10px"><?php  _e('Editor','wp-notification'); ?></option>
		<option value="users"><?php  _e('Users','wp-notification'); ?></option>
		<option value="user" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="profile" style="padding-left:10px"><?php  _e('Your Profile','wp-notification'); ?></option>
		<option value="tools"><?php  _e('Tools','wp-notification'); ?></option>
		<option value="import" style="padding-left:10px"><?php  _e('Import','wp-notification'); ?></option>
		<option value="export" style="padding-left:10px"><?php  _e('Export','wp-notification'); ?></option>
		<option value="options-general"><?php  _e('Settings','wp-notification'); ?></option>
		<option value="options-writing" style="padding-left:10px"><?php  _e('Writing','wp-notification'); ?></option>
		<option value="options-reading" style="padding-left:10px"><?php  _e('Reading','wp-notification'); ?></option>
		<option value="options-discussion" style="padding-left:10px"><?php  _e('Discussion','wp-notification'); ?></option>
		<option value="options-media" style="padding-left:10px"><?php  _e('Media','wp-notification'); ?></option>
		<option value="options-permalink" style="padding-left:10px"><?php  _e('Permalinks','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="administrator_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="administrator_notices_notification_type" id="administrator_notices_notification_type">
		<option value="<?php echo get_option("administrator_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("administrator_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="administrator_notices_hide">
	<input type="checkbox" name="administrator_notices_hide" id="administrator_notices_hide" value="1" <?php checked(get_option('administrator_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function editor_notices_settings_page() {
	settings_fields('editor_notice_settings_page');
	do_settings_sections('editor_notice_settings_page');
	?>
    <h3><?php _e('Editor notice','wp-notification') ?></h3>
	<?php
	$editor_noice = stripslashes(get_option("editor_notices_text"));
	wp_editor( $editor_noice, 'editor_notices_text', $settings = array('textarea_name' => 'editor_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="editor_notices_location">
	<?php _e('Where to display?','wp-notification'); ?><select style="width:300px"name="editor_notices_location" id="editor_notices_location">
		<option value="<?php echo get_option("editor_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("editor_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php  _e('Dashboard','wp-notification'); ?></option>
		<option value="edit-post"><?php  _e('Posts','wp-notification'); ?></option>
		<option value="post" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="upload"><?php  _e('Media','wp-notification'); ?></option>
		<option value="media" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-comments"><?php  _e('Comments','wp-wp-notification'); ?></option>
		<option value="profile"><?php _e('Profile','wp-notification'); ?></option>7
		<option value="tools"><?php  _e('Tools','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="editor_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="editor_notices_notification_type" id="editor_notices_notification_type">
		<option value="<?php echo get_option("editor_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("editor_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="editor_notices_hide">
	<input type="checkbox" name="editor_notices_hide" id="editor_notices_hide" value="1" <?php checked(get_option('editor_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function author_notices_settings_page() {
	settings_fields('author_notice_settings_page');
	do_settings_sections('author_notice_settings_page');
	?>
    <h3><?php _e('Author notice','wp-notification') ?></h3>
	<?php
	$author_noice = stripslashes(get_option("author_notices_text"));
	wp_editor( $author_noice, 'author_notices_text', $settings = array('textarea_name' => 'author_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="author_notices_location">
	<?php _e('Where to display?','wp-notification'); ?><select style="width:300px"name="author_notices_location" id="author_notices_location">
		<option value="<?php echo get_option("author_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("author_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php  _e('Dashboard','wp-notification'); ?></option>
		<option value="edit-post"><?php  _e('Posts','wp-notification'); ?></option>
		<option value="post" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="upload"><?php  _e('Media','wp-notification'); ?></option>
		<option value="media" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-comments"><?php  _e('Comments','wp-notification'); ?></option>
		<option value="profile"><?php _e('Profile','wp-notification'); ?></option>7
		<option value="tools"><?php  _e('Tools','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="author_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="author_notices_notification_type" id="author_notices_notification_type">
		<option value="<?php echo get_option("author_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("author_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="author_notices_hide">
	<input type="checkbox" name="author_notices_hide" id="author_notices_hide" value="1" <?php checked(get_option('author_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function contributor_notices_settings_page() {
	settings_fields('contributor_notice_settings_page');
	do_settings_sections('contributor_notice_settings_page');
	?>
    <h3><?php _e('Contributor notification','wp-notification') ?></h3>
	<?php
	$contributor_noice = stripslashes(get_option("contributor_notices_text"));
	wp_editor( $contributor_noice, 'contributor_notices_text', $settings = array('textarea_name' => 'contributor_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="contributor_notices_location">
	<?php _e('Where to display?','wp-notification'); ?><select style="width:300px"name="contributor_notices_location" id="contributor_notices_location">
		<option value="<?php echo get_option("contributor_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("contributor_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php _e('Dashboard','wp-notification'); ?></option>
		<option value="edit-post"><?php  _e('Posts','wp-notification'); ?></option>
		<option value="post" style="padding-left:10px"><?php  _e('Add New','wp-notification'); ?></option>
		<option value="edit-comments"><?php  _e('Comments','wp-notification'); ?></option>
		<option value="profile"><?php _e('Profile','wp-notification'); ?></option>7
		<option value="tools"><?php  _e('Tools','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="contributor_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="contributor_notices_notification_type" id="contributor_notices_notification_type">
		<option value="<?php echo get_option("contributor_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("contributor_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="contributor_notices_hide">
	<input type="checkbox" name="contributor_notices_hide" id="contributor_notices_hide" value="1" <?php checked(get_option('contributor_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function subscriber_notices_settings_page() {
	settings_fields('subscriber_notice_settings_page');
	do_settings_sections('subscriber_notice_settings_page');
	?>
    <h3><?php _e('Subscriber notice','wp-notification') ?></h3>
	<?php
	$subscriber_noice = stripslashes(get_option("subscriber_notices_text"));
	wp_editor( $subscriber_noice, 'subscriber_notices_text', $settings = array('textarea_name' => 'subscriber_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="subscriber_notices_location">
	<?php _e('Where to display?','wp-notification'); ?><select style="width:300px"name="subscriber_notices_location" id="subscriber_notices_location">
		<option value="<?php echo get_option("subscriber_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("subscriber_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php _e('Dashboard','wp-notification'); ?></option>
		<option value="profile"><?php _e('Profile','wp-notification'); ?></option>7
	</select> 
	</label></div>
	<div><label for="subscriber_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="subscriber_notices_notification_type" id="subscriber_notices_notification_type">
		<option value="<?php echo get_option("subscriber_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("subscriber_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="subscriber_notices_hide">
	<input type="checkbox" name="subscriber_notices_hide" id="subscriber_notices_hide" value="1" <?php checked(get_option('subscriber_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function custom_notices_settings_page() {
	settings_fields('custom_notice_settings_page');
	do_settings_sections('custom_notice_settings_page');
	?>
    <h3><?php _e('Custom notice','wp-notification') ?></h3>
	<?php
	$custom_notice = stripslashes(get_option("custom_notices_text"));
	wp_editor( $custom_notice, 'custom_notices_text', $settings = array('textarea_name' => 'custom_notices_text','textarea_rows' => '5') );
	?>
	<div><label for="custom_notices_location">
	<?php _e('Where to display?','wp-notification'); ?> <select style="width:300px"name="custom_notices_location" id="custom_notices_location">
		<option value="<?php echo get_option("custom_notices_location") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("custom_notices_location") ?></option>
		<option value="all"><?php  _e('All Page','wp-notification'); ?></option>
		<option value="dashboard"><?php  _e('Dashboard','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="custom_notices_notification_type">
	<?php _e('Notification type?','wp-notification'); ?> <select style="width:300px" name="custom_notices_notification_type" id="custom_notices_notification_type">
		<option value="<?php echo get_option("custom_notices_notification_type") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("custom_notices_notification_type") ?></option>
		<option value="error"><?php  _e('Error','wp-notification'); ?></option>
		<option value="warning"><?php  _e('Warning','wp-notification'); ?></option>
		<option value="success"><?php  _e('Success','wp-notification'); ?></option>
		<option value="info"><?php  _e('Info','wp-notification'); ?></option>
	</select> 
	</label></div>
	<div><label for="custom_notices_login">
	<?php _e('User name?','wp-notification'); ?> <select style="width:300px" name="custom_notices_login" id="custom_notices_login">
		<option value="<?php echo get_option("custom_notices_login") ?>" style="background: #F1F1F1;text-decoration:underline"><?php echo get_option("custom_notices_login") ?></option>
		<?php
			foreach(get_users('orderby=login') as $user){
				echo ( '<option value="'. $user->user_login . '" ' );
				echo ( ( $user->user_login == $selected ) ? 'selected' : '' );
				echo ( '>' . $user->user_login .  '</option>' );
			}
		?>
	</select>
	</label></div>
	<div><label for="custom_notices_hide">
	<input type="checkbox" name="custom_notices_hide" id="custom_notices_hide" value="1" <?php checked(get_option('custom_notices_hide')); ?>"><?php _e('Display "Hide" button?','wp-notification') ?>
	</label></div>
	<?php
}

function wp_notification_settings() {
?>
	<div style="display:table;width:100%">
		<div style="display:table-cell"><h2><?php _e('WP-Notification settings','wp-notification') ?></h2></div>
		<div style="display:table-cell;text-align:right"><strong><?php _e('Show custom notifications on the dashboard','wp-notification') ?></strong></div>
	</div>    
	<form method="post" action="options.php">
	<?php
	options_save();
	$active_notice_tab = isset($_GET['tab']) ? $_GET['tab'] : 'administrator';
	if(isset($_GET['tab']))
		$active_notice_tab = $_GET['tab'];
	?>
	<h2 class="nav-tab-wrapper">
	<a href="?page=wp_notification_settings&tab=administrator" class="nav-tab"><?php _e("Administrator","wp-notification") ?></a>
	<a href="?page=wp_notification_settings&tab=author" class="nav-tab"><?php _e("Author","wp-notification") ?></a>
	<a href="?page=wp_notification_settings&tab=editor" class="nav-tab"><?php _e("Editor","wp-notification") ?></a>
	<a href="?page=wp_notification_settings&tab=contributor" class="nav-tab"><?php _e("Contributor","wp-notification") ?></a>
	<a href="?page=wp_notification_settings&tab=subscriber" class="nav-tab"><?php _e("Subscriber","wp-notification") ?></a>
	<a href="?page=wp_notification_settings&tab=custom" class="nav-tab"><?php _e("Custom","wp-notification") ?></a>
	</h2>
	<?php
	if($active_notice_tab == 'administrator') { 
		adminiszrator_notices_settings_page();
	} if($active_notice_tab == 'author') {
		author_notices_settings_page();
	} if($active_notice_tab == 'editor') {
		editor_notices_settings_page();
	} if($active_notice_tab == 'contributor') {
		contributor_notices_settings_page();
	} if($active_notice_tab == 'subscriber') {
		subscriber_notices_settings_page();
	} if($active_notice_tab == 'custom') {
		custom_notices_settings_page();
	}
	notices_footer();
}

function wp_notification_submenu() {
	add_submenu_page('themes.php',__('WP-Notification', 'wp-notification'),__('WP-Notification', 'wp-notification'),'administrator','wp_notification_settings','wp_notification_settings');}

function wp_notification_init() {
    register_setting('administrator_notice_settings_page','administrator_notices_text');
	register_setting('administrator_notice_settings_page','administrator_notices_notification_type');
	register_setting('administrator_notice_settings_page','administrator_notices_hide');
	register_setting('administrator_notice_settings_page','administrator_notices_location');
    register_setting('author_notice_settings_page','author_notices_text');
	register_setting('author_notice_settings_page','author_notices_notification_type');
	register_setting('author_notice_settings_page','author_notices_hide');
	register_setting('author_notice_settings_page','author_notices_location');
    register_setting('editor_notice_settings_page','editor_notices_text');
	register_setting('editor_notice_settings_page','editor_notices_notification_type');
	register_setting('editor_notice_settings_page','editor_notices_hide');
	register_setting('editor_notice_settings_page','editor_notices_location');
    register_setting('contributor_notice_settings_page','contributor_notices_text');
	register_setting('contributor_notice_settings_page','contributor_notices_notification_type');
	register_setting('contributor_notice_settings_page','contributor_notices_hide');
	register_setting('contributor_notice_settings_page','contributor_notices_location');
    register_setting('subscriber_notice_settings_page','subscriber_notices_text');
	register_setting('subscriber_notice_settings_page','subscriber_notices_notification_type');
	register_setting('subscriber_notice_settings_page','subscriber_notices_hide');
	register_setting('subscriber_notice_settings_page','subscriber_notices_location');
    register_setting('custom_notice_settings_page','custom_notices_text');
	register_setting('custom_notice_settings_page','custom_notices_notification_type');
	register_setting('custom_notice_settings_page','custom_notices_hide');
	register_setting('custom_notice_settings_page','custom_notices_location');
	register_setting('custom_notice_settings_page','custom_notices_login');
}

function delete_wp_notification() {
    delete_option('administrator_notices_text');
	delete_option('administrator_notices_notification_type');
	delete_option('administrator_notices_hide');
	delete_option('administrator_notices_location');
    delete_option('author_notices_text');
	delete_option('author_notices_notification_type');
	delete_option('author_notices_hide');
	delete_option('author_notices_location');
    delete_option('editor_notices_text');
	delete_option('editor_notices_notification_type');
	delete_option('editor_notices_hide');
	delete_option('editor_notices_location');
    delete_option('contributor_notices_text');
	delete_option('contributor_notices_notification_type');
	delete_option('contributor_notices_hide');
	delete_option('contributor_notices_location');
    delete_option('subscriber_notices_text');
	delete_option('subscriber_notices_notification_type');
	delete_option('subscriber_notices_hide');
	delete_option('subscriber_notices_location');
    delete_option('custom_notices_text');
	delete_option('custom_notices_notification_type');
	delete_option('custom_notices_hide');
	delete_option('custom_notices_location');
	delete_option('custom_notices_login');
}

add_action('admin_menu','wp_notification_submenu');
add_action('admin_init','wp_notification_init');
register_deactivation_hook( __FILE__, 'delete_wp_notification' );
?>