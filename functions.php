<?php
// FORM PAGE/SHORTCODE FUNCTIONS 

	function html_form_code() {
		echo '<form action="form_processor.php"' . '" method="post">';

	    echo '<p>';
	    echo 'Character Name (required) <br />';
	    echo '<input type="text" name="cf-name" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["charname"] ) ? esc_attr( $_POST["charname"] ) : '' ) . '" size="40" />';
	    echo '</p>';

	    // This is the part of the form that grabs the user ID.
	    echo '<input type="hidden" name="user_id" value="<?php echo $wpid; ?>" />';

	    echo '<p><input type="submit" name="cf-submitted" value="Send"/></p>';
	    echo '</form>';
	}

// ADMIN PAGE

	function create_character_menu() {

		$appName = "Character Creator";
		$appID = 'create-char';
		add_menu_page($appName, $appName, 'administrator', $appID . '-top-level', 'PluginAdminScreen');
	}

	function PluginAdminScreen() {

		echo "<h1>Character Creator Settings</h1>";
		echo "<p>Admins can change character information here.</p>";
	}

// DATABASE FUNCTIONS

	function jal_install () {
	   global $wpdb;

	   $table_name = $wpdb->prefix . "myth_create"; 
	}

?>
