<?php

/**
 * @package WordPress
 * @subpackage NeuroHAM
 * @since 3.0.0
 */

?><?php include(TEMPLATEPATH.'/header.php'); ?>

    <div class="row" id="main">

        <div class="large-9 medium-9 columns" id="content">

            <?php the_post(); ?>

            <div <?php post_class('page'); ?>>

                <h1 class="title page_title"><?php the_title(); ?></h1>

                <div class="post_content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array('before' => '<div class="page-link">Pages: ', 'after' => '</div>') ); ?>
                </div>

            </div>

            <?php comments_template( '', true ); ?>

        </div>

        <div class="large-3 medium-3 columns" id="sidebar">

            <?php include(TEMPLATEPATH.'/sidebar.php'); ?>

        </div>

    </div>

<?php include(TEMPLATEPATH.'/footer.php'); ?>
