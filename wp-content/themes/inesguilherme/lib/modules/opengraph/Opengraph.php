<?php
/**
 * Module Flux_data
 *
 * Module to display opengraph meta in header
 *
 * Argument (optional):
 * args : content for each meta
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */

/**
 * Class Opengraph
 */
class Opengraph {
	/**
	 * @var string Array (url, width, height, is_intermediate), or false, if no image is available
	 * Inform this data with this function : wp_get_attachment_image_src()
	 */
	private $image;

	/**
	 * @var int Image width
	 */
	private $image_width;

	/**
	 * @var int Image height
	 */
	private $image_height;

	/**
	 * @var string Permalink
	 */
	private $url;

	/**
	 * @var string Post title
	 */
	private $title;

	/**
	 * @var string Post content
	 */
	private $description;

	/**
	 * @var string Mime type
	 */
	private $image_type;

	/**
	 * @var string Post type in meta opengraph (mime type, article, lead page, ...)
	 */
	private $type;

	/**
	 * @var bool True if twitter is activated.
	 */
	private $twitter;

	/**
	 * Opengraph constructor.
	 *
	 * @param array $args Optional. Content for each meta. Default : see $default_args
	 *
	 */
	public function __construct($args = array()) {
	    global $post;
		$default_args = array(
			"id" => $post->ID,
			"title" => strip_tags($post->post_title),
			"url" => get_permalink($post->ID),
			"image" => wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , "large" ),
			"description" => esc_attr(wp_trim_words($post->post_content, 30, '...')),
			"image_type" => "image/jpg",
			"type" => "",
			"twitter" => true
		);

		$args = array_replace_recursive($default_args, $args);

		$this->image = (empty($args['image'])) ? get_stylesheet_directory_uri()."/assets/img/thumbnail-logo.jpg" : $args['image'][0];
		$this->image_width = (empty($args['image'])) ? "" : $args['image'][1];
		$this->image_height = (empty($args['image'])) ? "" : $args['image'][2];
		$this->url = $args['url'];
		$this->title = strip_tags($args['title']);
		$this->description = $args['description'];
		$this->image_type = $args['image_type'];
		$this->type = $args['type'];
		$this->twitter = $args['twitter'];

		add_action("wp_head", array($this, "add_meta"));
	}
	
	/**
	 * Callback from this action hook : wp_head
	 */
	public function add_meta() {
		$template_path = get_stylesheets_directory_uri() . "/lib/modules/opengraph/views/opengraph.php";

		include ($template_path);
	}
}