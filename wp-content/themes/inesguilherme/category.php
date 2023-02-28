<?php
/**
 * CATEGORY
 *
 * The template to call view which display all posts in a category
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

$tax_title = get_queried_object()->name;
$tax_id = get_queried_object()->term_id;

$term_articles_ids = get_terms([
    'taxonomy' => 'category',
    'child_of' => 1,
    'fields' => 'ids'
]);

if(is_category(['annuaire-des-musicotherapeutes'])){
    include ("views/taxonomy/annuaire-des-musicotherapeutes.php");
}elseif(is_category(['articles']) || is_category($term_articles_ids)){
    include ("views/taxonomy/articles.php");
}elseif(is_category(['introduction','definitions','historique','pour-qui-pourquoi-faire'])){
    include ("views/taxonomy/accueil-item.php");
}else{
    include ("views/taxonomy/category.php");
}
