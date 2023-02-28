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
$title = strip_tags($post->post_title);

$link = get_post_meta($id, 'hyperlien', true);

$image_id = get_post_thumbnail_id($id);
$img = wp_get_attachment_image_src($image_id, 'thumbnail', true)[0];
if (empty($img)) {
    $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
}

?>
<article <?php post_class('livre'); ?>>
    <div class="livre-container">
        <div class="livre-image">
            <div class="thumbnail">
                <img src="<?php echo esc_url($img) ?>" alt="<?php echo esc_attr("Vignette de la publication - ".$id); ?>">
            </div>
        </div>
        <div class="livre-infos">
            <h2 class="livre-title"><?php echo esc_attr($title); ?></h2>
            <div class="livre-content">
                <?php echo $post->post_content; ?>
            </div>
            <div class="livre-link">
                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noreferrer noopener" title="<?php echo "Accéder au site"; ?>" class="cta">Acheter le livre</a>
            </div>
        </div>
    </div>
</article>
