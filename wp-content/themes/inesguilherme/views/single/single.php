<?php
/**
 * SINGLE
 *
 * Template for displaying post
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
<!--END HEADER-->

<!--BODY-->
<div class="single-main">
    <?php if($image_id){ ?>
    <div class="single-banner">
        <img src="<?php echo esc_url($img) ?>" alt="">
    </div>
    <?php } ?>
    <div class="single-container">
        <div class="single-row">
            <article <?php post_class('single-article') ?>>
                <header class="single-header">
                    <h1 class="single-title entry-title"><?php echo esc_html($title) ?></h1>
                    <?php if($subtitle_h2){ ?>
                        <h2 class="single-subtitle_h2"><?php echo $subtitle_h2; ?></h2>
                    <?php }
                    if($subtitle_h3){
                        ?>
                        <h3 class="single-subtitle_h3"><?php echo $subtitle_h3; ?></h3>
                    <?php } ?>
                </header>
                <div class="single-content entry-content post_content"><?php echo $content; ?></div>
            </article>
            <aside class="single-sidebar">
                <?php
                $documents = [];

                $documents_1 = get_post_meta(get_the_ID(), 'document_1', true);
                if($documents_1 !== ''){
                    $documents[] = $documents_1;
                }

                $document_2 = get_post_meta(get_the_ID(), 'document_2', true);
                if($document_2 !== ''){
                    $documents[] = $document_2;
                }

                $document_3 = get_post_meta(get_the_ID(), 'document_3', true);
                if($document_3 !== ''){
                    $documents[] = $document_3;
                }

                if(count($documents) > 0){ ?>
                <div class="applications">
                    <h2 class="applications-title">Documents attachés</h2>
                    <?php foreach ($documents as $document){
                        $app = get_post($document);
                        ?>
                        <div class="applications-item">
                            <a href="<?php echo esc_url($app->guid); ?>" target="_blank" rel="noreferrer noopener" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#001959"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 7.5c0 .83-.67 1.5-1.5 1.5H9v2H7.5V7H10c.83 0 1.5.67 1.5 1.5v1zm5 2c0 .83-.67 1.5-1.5 1.5h-2.5V7H15c.83 0 1.5.67 1.5 1.5v3zm4-3H19v1h1.5V11H19v2h-1.5V7h3v1.5zM9 9.5h1v-1H9v1zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm10 5.5h1v-3h-1v3z"/></svg>
                                <span>Télécharger : <?php echo wp_trim_words($app->post_title, 8, '...'); ?></span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </aside>
        </div>
    </div>
</div>
<?php 
global $post;
structured_data($post);

get_footer(); ?>