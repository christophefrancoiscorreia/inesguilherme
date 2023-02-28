<?php
add_action('wp_ajax_ajaxCategory', 'ajaxCategory');
add_action('wp_ajax_nopriv_ajaxCategory', 'ajaxCategory');

// Get Post action pour les news
function ajaxCategory() {
    wp_verify_nonce( sanitize_text_field($_POST['security']), 'cc_ajax_nonce' );

    $cat = '';
    $offset = '';

    if (isset($_POST['cat']) && $_POST['cat'] != '') {
        $cat = esc_attr($_POST['cat']);
    }

    if (isset($_POST['offset']) && $_POST['offset'] != '') {
        $offset = intval($_POST['offset']);
    }

    $args = [
        'cat' => $cat,
        'post_type' => ['post'],
        'post_status' => 'publish',
        'posts_per_page' => 8
    ];

    if($offset !== ''){
        $args['offset'] = $offset;
    }

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
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
        } ?>
        <script>
            if(parseInt('<?php echo $query->found_posts; ?>') === jQuery('.livre, .these, .conference, .card, .site').length){
                jQuery('#load_more').hide();
            }else{
                jQuery('#load_more').show();
            }
        </script>
    <?php wp_reset_postdata(); }

    die();
}
