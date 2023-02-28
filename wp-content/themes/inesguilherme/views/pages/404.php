<?php
/**
 * 404 PAGE Template
 *
 * The template for displaying 404 pages (not found)
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!--END HEADER-->

<?php

$bg = folder_img_url().'error/banner.jpg';

if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false && file_exists(str_replace(home_url(), ABSPATH, $bg) . '.webp')) {
    $bg = $bg . '.webp';
}
?>
<!--BODY-->
<main role="main" class="error--main" style="background-image:url(<?php echo $bg; ?>);">
    <div class="error--overlay"></div>
    <div class="error--container">
        <header class="error--header">
            <h1 class="error--title">404</h1>
            <h2>Nous ne trouvons pas la page que vous recherchez.</h2>
        </header>
        <div class="error--content">Cette page a été déplacée ou supprimée.</div>
        <div class="error--go_back">
            <a href="<?php echo esc_url(home_url()); ?>" class="error--go_back--cta"><span class="material-icons">first_page</span> Aller à la page d'accueil</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>