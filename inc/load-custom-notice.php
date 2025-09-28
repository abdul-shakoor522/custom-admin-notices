<?php


function display_admin_custom_notice(){
    $notice = get_option( 'custom_notice_field' );
    $isVisible = get_option( 'custom_notice_checkbox' );
    $notice_type = get_option( 'custom_notice_select' );

    $curnt_screen = get_current_screen(  );
    if(empty($notice)) {
        return;
    }
    if('dashboard' == $curnt_screen->id && $isVisible == 'on' ){
        echo "<div class='notice ". esc_html( $notice_type ) ." is-dismissible'><p>". esc_html( $notice ) ."</p></div>";
    }
}


add_action( 'admin_notices', 'display_admin_custom_notice' );