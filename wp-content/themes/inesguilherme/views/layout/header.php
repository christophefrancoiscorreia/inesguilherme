<?php
/**
 * HEADER
 *
 * The header for our theme
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
?> 
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--SCHEMA.ORG WEBSITE-->
<head itemscope itemtype="<?php esc_url('http://schema.org/WebSite') ?>">

    <meta http-equiv="content-type" content="<?php echo esc_attr($bloginfo_htmltype.'; charset='.$bloginfo_charset); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php echo esc_url($bloginfo_pingbackurl); ?>" />
    <?php wp_head(); ?>

</head>
<!--SCHEMA.ORG WEBPAGE-->
<body <?php body_class(); ?> itemscope="" itemtype="<?php echo esc_url('http://schema.org/WebPage') ?>" data-start> <!--ENJOY-->
<main role="main" class="wrapper">
    <?php include ('components/nav.php'); ?>
 