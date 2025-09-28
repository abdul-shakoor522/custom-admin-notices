<?php

function custom_admin_notices_html(){
     ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'custom-admin-notices' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'custom-admin-notices' );
        // output save settings button
        submit_button( __( 'Save Settings', 'custom-notice' ) );
        ?>
      </form>
    </div>
    <?php
}