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

$image_id = get_post_thumbnail_id($id);
$img = wp_get_attachment_image_src($image_id, 'thumbnail', true)[0];
if (empty($img)) {
    $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
}
?>
<article <?php post_class('contact'); ?>>
    <div class="contact-wrapper">
        <?php if($image_id){ ?>
            <div class="contact-image">
                <img src="<?php echo esc_url($img); ?>" alt="">
            </div>
        <?php } ?>
        <div class="contact-container">
            <h2 class="contact-title"><?php echo $title; ?></h2>
            <div class="contact-content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</article>
