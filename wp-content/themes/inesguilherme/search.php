<?php
/**
 * SEARCH RESULTS
 *
 * The template to call view which displaying search results pages
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */


$search_query = get_search_query();

$query = new WP_Query([
    'post_type' => 'post',
    'post_status' => 'publish',
    's' => $search_query,
    'posts_per_page' => -1,
]);

$search_text = "Résultats de la recherche pour « ".$search_query." »";

include("views/pages/search.php");