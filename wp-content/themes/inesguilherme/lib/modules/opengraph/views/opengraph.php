<meta property="og:image" content="<?php echo $this->image; ?>" />
<meta property="og:image:width" content="<?php echo $this->image_width; ?>">
<meta property="og:image:height" content="<?php echo $this->image_height; ?>">
<meta property="og:url" content="<?php echo $this->url;?>"/>
<meta property="og:title" content="<?php echo $this->title;?>"/>
<meta property="og:description" content="<?php echo $this->description; ?>"/>
<meta property="og:image:type" content="<?php echo $this->image_type; ?>">
<meta property="og:type" content="<?php echo $this->type; ?>">

<?php
if($this->twitter) {
?>
    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title" content="<?php echo $this->title;?>"/>

	<?php if (!empty($this->description)) : ?>

        <meta name="twitter:description" content="<?php echo $this->description;?>" />

	<?php else : ?>

        <meta name="twitter:description" content="<?php echo $this->title ;?>" />

	<?php endif; ?>

    <meta name="twitter:image" content="<?php echo $this->image; ?>" />

    <meta name="twitter:url" content="<?php echo $this->url;?>"/>
<?php
}
?>