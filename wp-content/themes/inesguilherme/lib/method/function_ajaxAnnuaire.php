<?php
add_action('wp_ajax_ajaxAnnuaire', 'ajaxAnnuaire');
add_action('wp_ajax_nopriv_ajaxAnnuaire', 'ajaxAnnuaire');

// Get Post action pour les news
function ajaxAnnuaire() {
    wp_verify_nonce( sanitize_text_field($_POST['security']), 'cc_ajax_nonce' );

    $s = '';
    $lettre = '';
    $offset = '';

    if (isset($_POST['s']) && $_POST['s'] != '') {
        $s = esc_attr($_POST['s']);
    }
    if (isset($_POST['lettre']) && $_POST['lettre'] != '') {
        $lettre = esc_attr($_POST['lettre']);
    }
    if (isset($_POST['offset']) && $_POST['offset'] != '') {
        $offset = intval($_POST['offset']);
    }

    $args = [
        'cat' => 16,
        'post_type' => ['post'],
        'post_status' => 'publish',
        'orderby' => 'post_title',
        'order' => 'ASC',
        'posts_per_page' => -1
    ];

    if($lettre !== ''){
        $posts_in = [];
        $query_all = new WP_Query($args);
        if($query_all->have_posts()){
            while ($query_all->have_posts()){
                $query_all->the_post();
                global $post;
                $firstLetter = strtoupper(substr($post->post_title, 0, 1));
                if($firstLetter === $lettre) {
                    $posts_in[] = $post->ID;
                }
            }
        wp_reset_postdata(); }

        $args['post__in'] = $posts_in;
    }

    if($offset !== ''){
        $args['offset'] = $offset;
    }

    if($s !== ''){
        $args['s'] = $s;
    }

    $args['posts_per_page'] = 16;

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            include(locate_template('views/components/contact-card.php'));
        } ?>
        <script>
            if(parseInt('<?php echo $query->found_posts; ?>') === jQuery('.contact').length){
                jQuery('#load_more').hide();
            }else{
                jQuery('#load_more').show();
            }
        </script>
    <?php wp_reset_postdata(); }

    die();
}
