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
<main role="main" class="page-main">
    <div class="page-container">
        <article <?php post_class('page-article') ?>>
            <header class="page-header">
                <h1 class="page-title entry-title"><?php echo esc_html($title) ?></h1>
            </header>
            <div class="page-content entry-content"><?php echo $content; ?></div>
            <div class="page-prendre_contact">
                <?php echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true" tabindex="49"]'); ?>
            </div>
        </article>
    </div>
</main>


<?php
global $post;
$image_id = get_post_thumbnail_id($post->ID);
$thumbnail = wp_get_attachment_image_src($image_id, 'thumbnail', true);
if (empty($thumbnail)) {
    $thumbnail = wp_get_attachment_image_src($image_id, 'full', true);
}

$content = $post->post_content;
?>

<!-- JSON - SEO TEST YOUR WEBSITE ON https://search.google.com/structured-data/testing-tool-->
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "ContactPage",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "<?php echo esc_url(get_permalink($post->ID)); ?>"
		},
		"headline": "<?php echo esc_attr($post->post_title); ?>",
		"image": {
			"@type": "ImageObject",
			"url": "<?php  if ( $image_id ) { echo esc_url($thumbnail[0]); }else{ echo esc_url(folder_img_url().'logo-hiperion-positive-horizontal.jpg'); } ?>",
			"height": "<?php if($image_id){ echo esc_attr($thumbnail[1]); }else{ echo 144; } ?>",
			"width": "<?php if($image_id){ echo esc_attr($thumbnail[2]); }else{ echo 350; } ?>"
		},
		"datePublished": "<?php the_date('Y-m-d h:i:s'); ?>",
		"dateModified": "<?php the_modified_date('Y-m-d h:i:s'); ?>",
		"author": {
			"@type": "Person",
			"name": "Nico Milantoni"
		},
		"publisher": {
			"@type": "Organization",
			"name": "Hiperion®",
			"logo": {
				"@type": "ImageObject",
				"url": "<?php echo esc_url(folder_img_url().'logo-hiperion-positive-horizontal.jpg'); ?>",
				"width": 350,
				"height": 144
			}
		},
		"description": "<?php  echo esc_attr(str_replace(['\'','"'],[' ',' '],strip_tags($content))); ?>"
	}
</script>
<!-- JSON - SEO TEST YOUR WEBSITE ON https://search.google.com/structured-data/testing-tool-->
<?php
get_footer(); ?>
