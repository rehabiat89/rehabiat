<?php 
/**
 * Chatway reusable urls
 *
 * @author  : Chatway
 * @license : GPLv3
 * */

namespace Chatway\App;

class Url {
    use Singleton;
    
    public static function iframe_src( $token = '' ) {
        return 'https://go.chatway.app/wordpress?token=' . $token;
    }

    public static function full_screen_url() {
        return 'https://go.chatway.app/fullscreen';
    }

    public static function remote_api( $endpoint = '' ) {
        return 'https://api.chatway.app/api' . $endpoint;
    }

    public static function internal_api( $endpoint = '' ) {
        return 'chatway/v1' . $endpoint;
    }

    public static function site_url( $slug = '' ) {
        return get_site_url() . '/' . $slug;
    }

    public static function admin_url( $route = '' ) {
        return admin_url( 'admin.php?page=chatway' ) . $route;
    }

    public static function widget_script( $identifier = '' ) {
        return 'https://cdn.chatway.app/widget.js?id=' . $identifier;
    }

    public static function landing_page() {
        return "https://chatway.app/";
    }

    public static function terms_of_service() {
        return "https://chatway.app/terms-of-service/";
    }

    public static function privacy_policy() {
        return "https://chatway.app/privacy-policy/";
    }

    public static function contact_us() {
        return 'https://chatway.app/contact-us/';
    }
}