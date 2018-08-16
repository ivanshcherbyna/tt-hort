<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Поиск по сайту...', THEME_OPT ); ?>">
	<button class="search-submit" type="submit" role="button">
    <img src="<?php echo get_stylesheet_directory_uri().'/img/search_icon.png'?>" alt="search-icon"> </button>
</form>
<!-- /search -->
