<?php
/**
 * The Sidebar containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage NeuroHAM
 * @since 3.0.0
 */

?>

<div class="large-3 medium-3 columns" id="sidebar">

    <?php

        wp_nav_menu( array(
            'container' => 'false',
            'fallback_cb' => 'false',
            'menu_class' => 'sidenav menu_sidenav sidenav sidenav_main menu_sidenav_main',
            'menu_id' => 'sidenav',
            'theme_location' => 'sidenav'
        ));

    ?>

</div>
