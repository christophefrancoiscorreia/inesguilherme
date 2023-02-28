<?php

function musicotherapie_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'musicotherapie_theme_support');

function musicotherapie_menus(){
    register_nav_menus([
        'primary' => "Desktop Primary Top Bar",
        'footer' => "Footer Menu Items"
    ]);
}
add_action('init', 'musicotherapie_menus');

//helper
require_once "lib/assets.php";
require_once "lib/helpers/function_translate-date.php";
 
//methode
require_once "lib/method/function_ajaxAnnuaire.php";
require_once "lib/method/function_ajaxCategory.php";
require_once "lib/method/function_ajaxArticles.php";


function folder_img_url() {
    return get_stylesheet_directory_uri().'/assets/img/';
}

function reading_time($text) {
    // Estimated reading time
    $word = str_word_count(strip_tags($text));

    $m = floor($word / 200);
    $s = floor($word % 200 / (200 / 60));
    $est = ($m == 0 ? '1' : $m) . ' min';

    return '<img src="'.folder_img_url().'component/clock.svg'.'" alt=""> <span>' . $est . ' de lecture</span>';
}

// Snippet from PHP Share: http://www.phpshare.org
function formatSizeUnits($bytes, $lang = 'en')
{

    if($lang === 'fr'){
        $gb = ' Go';
        $mb = ' Mo';
        $kb = ' Ko';
    }else{
        $gb = ' GB';
        $mb = ' MB';
        $kb = ' KB';
    }

    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . $gb;
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . $mb;
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . $kb;
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

/**
 * Enqueue script
 */



add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
function wsds_defer_scripts( $tag, $handle, $src ) {

    // The handles of the enqueued scripts we want to defer
    $defer_scripts = array(
        'admin-bar',
        'main-js'
    );

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'wsds_async_scripts', 10, 3 );
function wsds_async_scripts( $tag, $handle, $src ) {

    // The handles of the enqueued scripts we want to async
    $async_scripts = array(
        //'enqueue_functions'
    );

    if ( in_array( $handle, $async_scripts ) ) {
        return '<script src="' . $src . '" async="async" type="text/javascript"></script>' . "\n";
    }

    return $tag;
}



function structured_data($post){

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
		"@type": "NewsArticle",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "<?php echo esc_url(get_permalink($post->ID)); ?>"
		},
		"headline": "<?php echo esc_attr($post->post_title); ?>",
		"image": {
			"@type": "ImageObject",
			"url": "<?php  if ( $image_id ) { echo esc_url($thumbnail[0]); }else{ echo esc_url(folder_img_url().'header/logo.jpg'); } ?>",
			"height": "<?php if($image_id){ echo esc_attr($thumbnail[1]); }else{ echo 158; } ?>",
			"width": "<?php if($image_id){ echo esc_attr($thumbnail[2]); }else{ echo 69; } ?>"
		},
		"datePublished": "<?php the_date('Y-m-d h:i:s'); ?>",
		"dateModified": "<?php the_modified_date('Y-m-d h:i:s'); ?>",
		"author": {
			"@type": "Person",
			"name": "Nico Milantoni"
		},
		"publisher": {
			"@type": "Organization",
			"name": "Musicothérapie MHHU",
			"logo": {
				"@type": "ImageObject",
				"url": "<?php echo esc_url(folder_img_url().'header/logo.jpg'); ?>",
				"width": 158,
				"height": 69
			}
		},
		"description": "<?php  echo str_replace('"','',strip_tags(preg_replace('/\s+/', ' ', $content))); ?>"
	}
</script>
<!-- JSON - SEO TEST YOUR WEBSITE ON https://search.google.com/structured-data/testing-tool-->
    <?php
}