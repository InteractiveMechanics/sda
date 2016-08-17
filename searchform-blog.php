<!-- search -->
<form class="blog-search" method="get" action="<?php echo home_url(); ?>" role="search">
	<div class="col-sm-6 no-left-padding">
	<label for="search" class="blog-search-label">Search the Blog</label>
	<input class="blog-search-input" type="search" name="s" placeholder="<?php _e( 'i.e. keyword or title', 'sda_theme' ); ?>">
	<input type="hidden" name="post_type" value="post" />
	</div>
	<div class="col-sm-2 no-left-padding">
	<button class="blog-search-submit" type="submit" role="button"><?php _e( 'Search', 'sda_theme' ); ?></button>
	</div>
</form>
<!-- /search -->
