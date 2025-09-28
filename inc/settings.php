<?php

function admin_settings_init() {
    // Register the setting for the text field
    register_setting('custom-admin-notices', 'custom_notice_field');
    // Register the setting for the checkbox
    register_setting('custom-admin-notices', 'custom_notice_checkbox');
    register_setting('custom-admin-notices', 'custom_notice_select');

    // Register a new section (Group for fields)
    add_settings_section(
        'admin_settings_section',
        'General Settings',
        'admin_settings_section_callback',
        'custom-admin-notices' // Page slug
    );

    // Register the Text Field
    add_settings_field(
        'custom_notice_field_id', // MUST be a unique ID
        'Admin Notice Text', 
        'admin_settings_field_callback',
        'custom-admin-notices',
        'admin_settings_section' // Correct section ID
    );
    
    // Register the Checkbox Field
    add_settings_field(
        'custom_notice_checkbox_id', // MUST be a unique ID
        'Visibility', 
        'admin_settings_checkbox_callback', // Unique callback
        'custom-admin-notices',
        'admin_settings_section' // Correct section ID (You want it in the same section)
    );
    // Register the select Field
    add_settings_field(
        'custom_notice_select_id', // MUST be a unique ID
        'Select Notice Type : ', 
        'admin_settings_select_callback', // Unique callback
        'custom-admin-notices',
        'admin_settings_section' // Correct section ID (You want it in the same section)
    );
}

add_action( 'admin_init', 'admin_settings_init' );

// ---------------------------------------------------------------------
// CALLBACKS
// ---------------------------------------------------------------------

// Section callback
function admin_settings_section_callback(){
    echo "<p style='color:green'>Custom Notice settings are below.</p>";
}

// Text Field callback
function admin_settings_field_callback(){
    $setting = get_option( 'custom_notice_field' );

    ?>
    <input type="text" 
           name="custom_notice_field" 
           value="<?php echo esc_attr( $setting ); ?>" 
           style="width: 400px;">
    <?php
}

// Checkbox Field callback
function admin_settings_checkbox_callback(){
    $checkbox = get_option( 'custom_notice_checkbox' );
    
    // Use checked() function for cleaner output
    ?>
    <input type="checkbox" 
           name="custom_notice_checkbox" 
           <?php echo ($checkbox == 'on' ? 'checked' : ''); ?> 
           value="on">
    <label for="custom_notice_checkbox">Enable/Disable the custom notice.</label>
    <?php
}
// Checkbox select callback
function admin_settings_select_callback(){
    $checkbox = get_option( 'custom_notice_select' );
    
    // Use checked() function for cleaner output
    ?>
    <select name="custom_notice_select" id="custom_notice_select">
        <option value="notice-success">Success</option>
        <option value="notice-warning">Warning</option>
        <option value="notice-info">Info</option>
    </select>
   
    <?php
}