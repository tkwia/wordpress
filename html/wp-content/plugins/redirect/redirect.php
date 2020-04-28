<?php
/*
 * Plugin Name: Redirection to home page
 * Description: This is to redirect non admin users to home page
 * Version:           0.0.1
 * Author:            Tomasz Kwiatkowski
*/

    function redirect( $redirect_to, $request, $user ) {

        if ( isset( $user->roles ) && is_array( $user->roles ) ) {

            if ( in_array( 'administrator', $user->roles ) ) {
                return $redirect_to;
            } else {
                return home_url();
            }
        } else {
            return $redirect_to;
        }
    }

    add_filter( 'login_redirect', 'redirect', 10, 3 );
?>
