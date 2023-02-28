<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 10/07/2019
 * Time: 17:10
 */


$tax_title = get_queried_object()->name;
$tax_id = get_queried_object()->term_id;


$args = array();

$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => $tax_id,
    'posts_per_page' => -1,
]);

include ("views/archive.php");