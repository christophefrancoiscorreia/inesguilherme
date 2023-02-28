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
$bg = folder_img_url().'error/banner.jpg';

if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false && file_exists(str_replace(home_url(), ABSPATH, $bg) . '.webp')) {
    $bg = $bg . '.webp';
}
?>

    <main role="main" class="category--main">
        <section class="category--banner" style="background-image:url(<?php echo esc_url($bg); ?>);">
            <header class="category--banner--header">
                <h1 class="entry-title">Archives</h1>
            </header>
            <div class="category--banner--overlay"></div>
        </section>
        <section class="category--feed">
            <?php if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();

                    include ('components/post-card.php');
                }
            } ?>
        </section>
    </main>

<?php get_footer(); ?>