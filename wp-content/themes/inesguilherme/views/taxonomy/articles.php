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
get_header(); ?>

<main role="main" class="category-main">
    <section class="category-container">
        <h1 class="category-title"><?php echo $tax_title; ?></h1>
        <div class="category-filter">
            <div class="category-filter--selectors">
                <?php if(is_category('articles')){ ?>
                    <div class="category-filter--themes themes">
                        <button class="themes-opener">
                            <span>Filtrer par thématique</span>
                            <img src="<?php echo esc_url(folder_img_url().'component/expand_more.svg'); ?>" alt="">
                        </button>
                        <div class="themes-list" style="display: none">
                            <button class="themes-item active" value="<?php echo intval($tax_id); ?>"><?php echo esc_attr($tax_title); ?></button>
                            <?php
                            $terms = get_terms([
                                'taxonomy' => 'category',
                                'parent' => $tax_id,
                            ]);

                            foreach ($terms as $term){ ?>
                            <button class="themes-item" value="<?php echo intval($term->term_id); ?>"><?php echo esc_attr($term->name); ?></button>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="category-filter--search search">
                <button class="search-trigger"><img src="<?php echo esc_url(folder_img_url().'component/search.svg') ?>" alt=""></button>
                <input type="text" class="search-input" placeholder="Ecrire ici...">
            </div>
        </div>
        <div class="category-feed">
            <div id="row" class="grid big-gap col-3 md-col-2 sm-col-1">
                <?php

                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $tax_id,
                    'posts_per_page' => 6,
                ];
                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        include (locate_template('views/components/post-card.php'));
                    }
                } ?>
            </div>
            <div id="loader" class="category-loader" style="display: none">
                <span class="spinner"></span>
            </div>
            <div id="load_more" class="category-load_more">
                <button class="cta-secondary" id="load_more" data-nextpage="1" style="<?php if($query->found_posts <= 6){ echo 'display:none;'; } ?>">
                    Charger plus de articles
                </button>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>