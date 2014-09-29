<?php

/**
 * @package WordPress
 * @subpackage NeuroHAM
 * @since 3.0.0
 */

?><?php include(TEMPLATEPATH.'/header.php'); ?>

    <div class="row" id="main">

        <div class="large-9 medium-9 columns" id="content">

            <?php get_template_part( 'loop', 'index' ); ?>

        </div>

        <div class="large-3 medium-3 columns" id="sidebar">

            <?php include(TEMPLATEPATH.'/sidebar.php'); ?>

        </div>

    </div>

<?php include(TEMPLATEPATH.'/footer.php'); ?>
