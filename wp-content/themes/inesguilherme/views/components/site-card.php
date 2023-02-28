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
$link = get_post_meta($id, 'hyperlien', true);

$title = $post->post_title;
$content = $post->post_content;
$date = date_translate("d F Y", $post->ID, $echo = null, "fr");

$attachment = get_posts([
    'post_parent' => $id,
    'posts_per_page' => 1,
    'post_type' => 'attachment',
    'post_mime_type' => 'application'
]);

if(count($attachment) > 0){
    $link = $attachment[0]->guid;
}

?>
<article <?php post_class('site'); ?>>
    <div class="site-container">
        <h2 class="site-title"><?php echo $title; ?></h2>
        <div class="site-content">
            <?php echo $content; ?>
        </div>
        <div class="site-link">
            <a href="<?php echo esc_url($link) ?>" target="_blank" rel="noreferrer noopener" class="cta">Accéder au site</a>
        </div>
    </div>
</article>
