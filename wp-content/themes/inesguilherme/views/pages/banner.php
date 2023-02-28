<?php
/**
 * PAGE
 *
 * The template for displaying all pages
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<!--HEADER-->

<!--BODY-->
<main role="main" class="page--main">
    <?php if($thumbnail !== ''){ ?>
    <section class="page--banner">
        <div class="page--banner--overlay"></div>
        <picture>
            <source srcset="<?php echo esc_url($thumbnail_large); ?>"
                    media="(min-width: 800px)">
            <img src="<?php echo esc_url($thumbnail_small); ?>" alt="">
        </picture>
    </section>
    <?php } ?>
    <div class="page--container">
        <article <?php post_class('page--article') ?>>
            <header class="page--header">
                <h1 class="page--title entry-title"><?php echo esc_html($title) ?></h1>
                <?php if($subtitle_h2){ ?>
                    <h2 class="page--subtitle_h2"><?php echo $subtitle_h2; ?></h2>
                <?php }
                if($subtitle_h3){
                    ?>
                    <h3 class="page--subtitle_h3"><?php echo $subtitle_h3; ?></h3>
                <?php } ?>
            </header>
            <div class="page--content entry-content"><?php echo $content; ?></div>
        </article>
    </div>
</main>

<?php
global $post;
structured_data($post);

get_footer(); ?>
