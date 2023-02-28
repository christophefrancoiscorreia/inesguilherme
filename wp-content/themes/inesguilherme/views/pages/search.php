<?php
/**
 * search
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
                <h1 class="entry-title">Recherche</h1>
                <h2 style="color: white"><?php echo $search_text; ?></h2>
            </header>
            <div class="category--banner--overlay"></div>
        </section>
        <section class="category--feed">
            <?php if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    if(in_category('livres')){
                        include (locate_template('views/components/livre-card.php'));
                    }elseif(in_category('theses')){
                        include (locate_template('views/components/these-card.php'));
                    }elseif(in_category('conferences')){
                        include (locate_template('views/components/conference-card.php'));
                    }else{
                        include (locate_template('views/components/post-card.php'));
                    }
                }
            } ?>
        </section>
    </main>

<?php get_footer(); ?>