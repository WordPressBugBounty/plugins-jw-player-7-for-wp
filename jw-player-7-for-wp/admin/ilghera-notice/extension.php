<?php
/**
 * ilGhera Notice class extension
 *
 * @author ilGhera
 * @package ilghera-notice/ 
 * @since 1.0.1
 */

/* The extension */
class JWPPP_Notice extends Ilghera_Notice {

    /**
     * The construct
     */
    public function __construct() {

        $this->products[] = array(
            'name'   => 'JW Player for WordPress - Premium',
            'slug'   => 'jw-player-7-for-wordpress-premium',
            'sign'   => 'jwppp',
            'domain' => '',
        );

        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

        $this->check_license();

    }

}
new JWPPP_Notice();

