<?php
add_action('wp_ajax_ajaxArticles', 'ajaxArticles');
add_action('wp_ajax_nopriv_ajaxArticles', 'ajaxArticles');

// Get Post action pour les news
function ajaxArticles() {
    wp_verify_nonce( sanitize_text_field($_POST['security']), 'cc_ajax_nonce' );

    $cat = '';
    $offset = '';

    if (isset($_POST['cat']) && $_POST['cat'] != '') {
        $cat = esc_attr($_POST['cat']);
    }
    if (isset($_POST['cat']) && $_POST['cat'] != '') {
        $cat = esc_attr($_POST['cat']);
    }

    if (isset($_POST['offset']) && $_POST['offset'] != '') {
        $offset = intval($_POST['offset']);
    }

    $args = [
        'cat' => 1,
        'post_type' => ['post'],
        'post_status' => 'publish',
        'posts_per_page' => 6
    ];

    if($cat !== ''){
        $args['cat'] = $cat;
    }

    if($offset !== ''){
        $args['offset'] = $offset;
    }

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            include (locate_template('views/components/post-card.php'));
        } ?>
        <script>
            if(parseInt('<?php echo $query->found_posts; ?>') === jQuery('.card').length){
                jQuery('#load_more').hide();
            }else{
                jQuery('#load_more').show();
            }
        </script>
    <?php wp_reset_postdata(); }

    die();
}
