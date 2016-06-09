<?php
	$gallery_image = get_field('gallery_image');
	$image_title = get_field('image_title');
	$image_year = get_field('image_year');
	
	
?>


<div class="col-sm-4 lightgallery">
<a href="<?php echo $gallery_image; ?>"class="artwork-container artwork">
	<img src="<?php echo $gallery_image; ?>">
    <div class="gallery-img-caption">
        <p class="caption-name"><?php echo get_the_author(); ?></p>
        <p class="caption-title"><?php echo $image_title; ?><span class="caption-year">, <?php echo $image_year; ?></span></p>
    </div>
</a>
</div>

