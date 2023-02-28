<?php
/**
 * TAG
 *
 * Template to call posts tag's view
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

$tagTitle = strip_tags(single_cat_title('', false));
$lang = Lang::get_instance()->get_lang();

$args = array(
    'post_type' => 'post',
    'tag' => $tagTitle,
    'posts_per_page' => -1,
    'meta_key' => 'cp_language_code',
    'meta_value' => $lang,
);

$allPost = new WP_Query( $args );

include ("views/tag.php");