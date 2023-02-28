<?php
/**
 * HEADER
 *
 * The header to call header's view
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

$bloginfo_htmltype = strip_tags(get_bloginfo('html_type'));
$bloginfo_charset = strip_tags(get_bloginfo('charset'));
$bloginfo_pingbackurl = get_bloginfo('pingback_url');

include ("views/layout/header.php");