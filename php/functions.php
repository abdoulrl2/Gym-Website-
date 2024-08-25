<?php
// Functionality for handling trainer profiles, memberships, etc.

function display_trainer_profiles() {
    // Code to display trainer profiles
}

function secure_member_area() {
    if (!is_user_logged_in()) {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'secure_member_area');
?>
