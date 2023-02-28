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


?>

<main role="main" class="category-main category_default">
    <section class="category-container">
        <h1 class="category-title"><?php echo $tax_title; ?></h1>
        <div class="category-feed">
            <div id="row" class="grid <?php if(in_category('les-medecins-et-la-musicotherapie')){ ?>big-gap col-3 md-col-2 sm-col-1<?php }else{ ?>col-1<?php } ?>">
                <?php

                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $tax_id,
                    'posts_per_page' => 9
                ];

                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();

                        if(in_category('livres')){
                            include (locate_template('views/components/livre-card.php'));
                        }elseif(in_category('theses-medicales')){
                            include (locate_template('views/components/these-card.php'));
                        }elseif(in_category('conferences-video')){
                            include (locate_template('views/components/conference-card.php'));
                        }elseif(in_category('sites-internet')){
                            include (locate_template('views/components/site-card.php'));
                        }else{
                            include (locate_template('views/components/post-card.php'));
                        }
                    }
                } ?>
            </div>
            <div id="loader" class="category-loader" style="display: none">
                <span class="spinner"></span>
            </div>
            <?php
            if(is_category('livres')){
                $cta_loadmore = 'Charger plus de musicothérapeutes';
            }elseif(is_category('theses-medicales')){
                $cta_loadmore = 'Charger plus de thèses';
            }elseif(is_category('conferences-video')){
                $cta_loadmore = 'Charger plus de conférénces';
            }elseif(is_category('sites-internet')){
                $cta_loadmore = 'Charger plus de sites';
            }else{
                $cta_loadmore = 'Charger plus de articles';
            }
            ?>
            <div id="load_more" class="category-load_more">
                <button class="cta-secondary" id="load_more" data-nextpage="1" data-cat_id="<?php echo intval($tax_id); ?>" style="<?php if($query->found_posts <= 8){ echo 'display:none;'; } ?>">
                    <?php echo $cta_loadmore; ?>

                </button>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>