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
$content = $post->post_excerpt;

$image_id = get_post_thumbnail_id($id);
$img = wp_get_attachment_image_src($image_id, 'thumbnail', true)[0];
if (empty($img)) {
    $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
}

?>
<article <?php post_class('conference'); ?>>
    <div class="conference-container">
        <a href="<?php echo esc_url(get_permalink($id)); ?>" class="conference-image">
            <img src="<?php echo esc_url(folder_img_url().'component/play_circle.svg'); ?>" alt="" class="play">
            <div class="thumbnail">
                <img src="<?php echo esc_url($img); ?>" alt="">
            </div>
        </a>
        <div class="conference-infos">
            <h2 class="conference-title"><?php echo $title; ?></h2>
            <h2 class="conference-content"><?php echo $content; ?></h2>
            <div class="conference-link">
                <a href="<?php echo esc_url(get_permalink($id)); ?>" title="<?php echo "Accéder la publication"; ?>" class="cta">Voir la vidéo</a>
            </div>
        </div>
    </div>
</article>
