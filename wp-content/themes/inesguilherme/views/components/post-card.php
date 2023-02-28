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
$title = strip_tags($post->post_title);
$content = nl2br(get_post_meta($post->ID, 'resume_publication', true));
if(empty($content)) {
    $content = wp_trim_words(strip_tags($post->post_content), 30, '...');
}

$true_content = $post->post_content;

$post_catSlug = get_the_category($id)[0]->slug;

$image_id = get_post_thumbnail_id($id);
$img = wp_get_attachment_image_src($image_id, 'thumbnail', true)[0];
if (empty($img)) {
    $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
}


$post_cats = get_the_category($id);
$my_cats = [];

foreach ($post_cats as $post_cat){
    $my_cats[] = '<a href="'.get_category_link($post_cat->term_id).'">'.$post_cat->name.'</a>';
}

$date = date_translate("d F Y", $post->ID, $echo = null, "fr");

?>
<article <?php post_class('card'); ?>>
    <div class="card-wrapper">
        <?php if($image_id){ ?>
        <div class="card-image">
            <a href="<?php echo esc_url(get_permalink($id)); ?>" title="<?php echo "Accéder la publication"; ?>"><img src="<?php echo esc_url($img) ?>" alt="<?php echo esc_attr("Vignette de la publication - ".$id); ?>"></a>
        </div>
        <?php } ?>
        <div class="card-container">
            <h2 class="card-title"><a href="<?php echo esc_url(get_permalink($id)); ?>" title="<?php echo "Accéder la publication"; ?>"><?php echo wp_trim_words($title, 40, '...'); ?></a></h2>
            <div class="card-infos">
                <?php
                echo '<span class="category">'.implode(', ',$my_cats).'</span>';
                echo '<span class="separator">|</span>';
                echo '<span class="date">'.$date.'</span>';
                ?>
            </div>
            <div class="card-content">
                <?php echo $content; ?>
            </div>
            <div class="card-footer">
                <div class="card-reading"><?php echo reading_time($true_content); ?></div>
                <div class="card-link">
                    <a href="<?php echo esc_url(get_permalink($id)); ?>" title="<?php echo "Accéder la publication"; ?>" class="cta">Lire l'article</a>
                </div>
            </div>
        </div>
    </div>
</article>
