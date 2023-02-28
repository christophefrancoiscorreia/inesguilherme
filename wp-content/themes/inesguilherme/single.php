<?php
/**
 * SINGLE
 *
 * Template to call post's view
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */


if ( have_posts() ) {
    while(have_posts()) {
        the_post();
        global $post;
        $id= $post->ID;
        $title = $post->post_title;
        $content = $post->post_content;

        $subtitle_h2 = get_post_meta($id, 'subtitle_h2', true);
        $subtitle_h3 = get_post_meta($id, 'subtitle_h3', true);

        $image_id = get_post_thumbnail_id($id);
        $img = wp_get_attachment_image_src($image_id, 'large', true)[0];
        if (empty($img)) {
            $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
        }

    }


    include('views/single/single.php');
} else {
    get_404_template();
}