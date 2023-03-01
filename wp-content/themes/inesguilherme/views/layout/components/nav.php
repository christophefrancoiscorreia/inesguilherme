<?php
/**
 * TEMPLATE HEAD
 *
 * Template for displaying header
 *
 * This template is called in all files where we want to displaying the header
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
?>
<!-- START HEADER (closed in topnav)-->
<header class="header" role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="header-navigation">
        <a href="<?php echo esc_url('#'); ?>" class="nav_opener">
            <img src="<?php echo esc_url(folder_img_url().'header/menu-home.svg') ?>" alt="open menu" class="open">
            <img src="<?php echo esc_url(folder_img_url().'header/close-home.svg') ?>" alt="close menu" class="close">
        </a>
    </div>
    
    <nav class="header-menu">
        <?php
        wp_nav_menu([
            'menu' => 'primary',
            'theme_location' => 'primary'
        ]); ?> 

        <div class="credits">Developed with love by <a href="<?php echo esc_url('https://github.com/christophefrancoiscorreia'); ?>">Christophe Correia</a></div>
    </nav>
</header>
