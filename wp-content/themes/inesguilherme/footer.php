<?php
/**
 * FOOTER
 *
 * The template to call view wichh display the footer
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

$bloginfo_name = strip_tags(get_bloginfo("name"));
$bloginfo_url = get_bloginfo('url');
$logo = get_header_image();

include ("views/layout/footer.php");