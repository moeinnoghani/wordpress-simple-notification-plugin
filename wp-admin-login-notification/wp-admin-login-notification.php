<?php

/**
 * Plugin Name: Custom Admin Notifications
 * Plugin URI: https://github.com/moeinnoghani/wordpress-simple-notification-plugin
 * Description: Sends an email notification when an admin user logs in.
 * Version: 1.0
 * Author: Moein Noghani
 * Author URI: https://github.com/moeinnoghani
 */

function custom_admin_notifications() {
    $user = wp_get_current_user();
    $email = $user->user_email;
    $subject = 'Admin login notification';
    $message = 'The admin user ' . $user->display_name . ' with email ' . $email . ' has logged in to the website.';
    wp_mail( 'admin@example.com', $subject, $message );
}
add_action( 'admin_init', 'custom_admin_notifications' );
