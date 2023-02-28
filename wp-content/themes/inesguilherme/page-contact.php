<?php
/**
 * Template Name: PAGE --> Contact
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
    }


	include('views/pages/contact.php');
} else {
    get_404_template();
}