<?php
/**
 * TEMPLATE POSTS
 *
 * Template for displaying posts flux
 *
 * This template is called in lib/modules/flux_data/models/ft_postAjax.php
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage christophecorreia
 * @since 1.0
 * @version 1.0
 */

global $post;
$id = $post->ID;
$link = get_permalink($id);
$title = $post->post_title;
$content = $post->post_content;
$date = date_translate("d F Y", $post->ID, $echo = null, "fr");

?>
<article <?php post_class('temoignages--item'); ?>>
    <div class="temoignages--item--container">
        <!--<div class="temoignages--item--date"><?php /*echo $date; */?></div>-->
        <h2 class="temoignages--item--title"><?php echo $title; ?></h2>
        <div class="temoignages--item--content post_content">
            <?php echo $content; ?>
        </div>
    </div>
</article>
