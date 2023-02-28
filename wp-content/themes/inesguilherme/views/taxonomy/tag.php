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
    <!--HEADER-->
<?php partial( 'head' ); ?>
    <!--END HEADER-->

    <section class="container container-tag">
        <!--START BODY ARTICLE-->
        <div class="main">
            <header>
                <h1 class="entry-title">Tag : <?php echo $tag_title; ?></h1>
            </header>

            <div class="all-post-section">
                <?php
                if ( $allPost->have_posts() ) :
                    ?>
                    <div class="panel-body">
                        <div class="row_post">
                            <?php
                                while($allPost->have_posts()) {
                                    $allPost->the_post();
                                    $postId = $allPost->post->ID;

                                    $search = true;

                                    include(locate_template('/lib/modules/flux_data/views/partials/post.php'));
                                ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php else: ?>
                    <p id="no_more_flux"><?php echo get_string_translated('select_result_wrong'); ?></p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div><!--END BODY ARTICLE-->
        <?php
        //ADD PAGINATION -> lib/modules/ft_pagination.php
        //	if ( function_exists('wp_bootstrap_pagination') )
        //		wp_bootstrap_pagination(1);
        ?>
    </section>

<?php get_footer(); ?>