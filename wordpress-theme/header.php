<?php

/**
 * @package WordPress
 * @subpackage NeuroHAM
 * @since 3.0.0
 */

    include('functions-head.php');
    
?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" type="image/x-icon" href="/favicon.png" />

    <title><?php echo (isset($uri) && count($uri) > 0 ) ? create_page_title($uri) : 'NeuroHAM'; ?></title>

    <link rel="stylesheet" href="<?php echo CL_TEMPLATEPATH; ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo CL_TEMPLATEPATH; ?>/css/main.css" />

    <!-- Start WP Head -->
    <?php //wp_head(); ?>
    <!-- End WP Head -->

    <!-- Page content generated on <?php echo date("F j, Y, g:i:s a", @mktime()); ?> -->

</head>

<body <?php body_class(' page-'.implode(' page-', $uri)); ?>>

    <header class="row" id="header">
        <div class="large-7 medium-7 columns" id="logo">
            <h1>NeuroHAM</h1>
            <h3>Neural Processing in humans, animals, and machines</h3>
        </div>
        <div class="large-5 medium-5 columns" id="date">
            <p>June 10 - 12, 2015<br/>677 Beacon Street Boston, MA</p>
        </div>
    </header>

    <div class="row" id="banner">
        <div class="large-12 columns">
            <p>A three day conference on neural processing<br/>in humans, animals and machines</p>
        </div>
    </div>

    <div class="row" id="main-top">
        
    </div>
