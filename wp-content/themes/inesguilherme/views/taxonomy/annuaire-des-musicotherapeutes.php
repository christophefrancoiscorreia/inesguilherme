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
    'orderby' => 'post_title',
    'order' => 'ASC'
];

$query_all = new WP_Query($args);
$lettres = [];
if($query_all->have_posts()){
    while($query_all->have_posts()){
        $query_all->the_post();
        global $post;

        $lettres[] = strtoupper(substr($post->post_title, 0 ,1));
    }
wp_reset_postdata(); }

$lettres = array_unique($lettres);

sort($lettres);
?>

<main role="main" class="category-main">
    <section class="category-container">
        <h1 class="category-title"><?php echo $tax_title; ?></h1>
        <div class="category-filter">
            <div class="category-filter--letters letters">
            <?php foreach ($lettres as $lettre){
                echo '<button class="letters-item" value="'.$lettre.'">'.$lettre.'</button>';
            } ?>
            </div>
            <div class="category-filter--search search">
                <button class="search-trigger"><img src="<?php echo esc_url(folder_img_url().'component/search.svg') ?>" alt=""></button>
                <input type="text" class="search-input" placeholder="Ecrire ici...">
            </div>
        </div>
        <div class="category-feed">
            <div id="row" class="grid col-1">
                <?php $args['posts_per_page'] = 16;
                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        include (locate_template('views/components/contact-card.php'));
                    }
                } ?>
            </div>
            <div id="loader" class="category-loader" style="display: none">
                <span class="spinner"></span>
            </div>
            <div id="load_more" class="category-load_more">
                <button class="cta-secondary" id="load_more" data-nextpage="1">
                    Charger plus de musicothérapeutes
                </button>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>