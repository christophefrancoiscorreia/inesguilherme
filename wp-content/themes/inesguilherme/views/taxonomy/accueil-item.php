<?php
/**
 * TAG
 *
 * Template for displaying all posts in a tag
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
get_header();


$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => $tax_id,
    'posts_per_page' => -1,
    'order' => 'ASC'
];
$query = new WP_Query($args);
if($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        global $post;

        if(in_category('pour-qui-pourquoi-faire')) {
            $tax_title = $post->post_title;
        }
    }
wp_reset_postdata(); }
?>

<main role="main" class="category-main">
    <section class="category-container">
        <h1 class="category-title"><?php echo $tax_title; ?></h1>
        <div class="category-feed">
        <?php
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                global $post;

                $image_id = get_post_thumbnail_id($post->ID);
                $img = wp_get_attachment_image_src($image_id, 'large', true)[0];
                if (empty($img)) {
                    $img = wp_get_attachment_image_src($image_id, 'full', true)[0];
                }

                ?>
                <div class="category-post">
                    <?php if($image_id){ ?>
                    <div class="category-post--image">
                        <img src="<?php echo esc_url($img) ?>" alt="">
                    </div>
                    <?php }

                    if(!in_category(['historique', 'pour-qui-pourquoi-faire'])){ ?>
                        <h2 class="category-post--title"><?php echo $post->post_title; ?></h2>
                    <?php } ?>
                    <div class="category-post--content post_content"><?php echo $post->post_content; ?></div>
                </div>
            <?php }
        } ?>
    </section>
</main>

<?php get_footer(); ?>