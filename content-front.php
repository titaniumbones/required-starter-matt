<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>
    <!-- START: content-page.php -->
    <article class="front" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="front-splash-image">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'requiredfoundation' ) . '</span>', 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
    <!-- END: content-page.php -->