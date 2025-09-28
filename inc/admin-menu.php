<?php

// adding admin menu for custom message


function add_admin_menu_for_notices(){
    add_menu_page( 
        'Custom Admin Notices',
        'Custom Notices', 
        'manage_options',
        'custom-admin-notices',
        'custom_admin_notices_html', 
        'dashicons-admin-customizer', 
        20        
);
}


add_action( 'admin_menu', 'add_admin_menu_for_notices' );