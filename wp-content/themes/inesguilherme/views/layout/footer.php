<?php
/**
 * FOOTER
 *
 * The template for displaying the footer
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

 ?>
</main>
<?php 
if(!is_page([12, 10])){
	//include('components/popup_confirm.php');  
}

wp_footer(); ?>

<!-- JSON - SEO TEST YOUR WEBSITE ON https://search.google.com/structured-data/testing-tool-->
<script type="application/ld+json"> {
	"@context" : "http://schema.org",
	"@type" : "Organization",
	"name" : "<?php echo $bloginfo_name; ?>",
	"url" : "<?php echo $bloginfo_url; ?>",
	"logo" : "<?php echo $logo; ?>"
}
</script>
</body>
</html>