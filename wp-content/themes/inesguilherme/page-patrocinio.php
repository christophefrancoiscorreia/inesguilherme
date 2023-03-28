<?php
/**
 * Template Name: Page --> Patrocinios
 *
 * The template to call page's view
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
        $title = $post->post_title;
        $content = $post->post_content;

        $subtitle_h2 = get_post_meta($post->ID, 'subtitle_h2', true);
        $subtitle_h3 = get_post_meta($post->ID, 'subtitle_h3', true);

    }

    include('views/pages/patrocinio.php');
} else {
    get_404_template();
}