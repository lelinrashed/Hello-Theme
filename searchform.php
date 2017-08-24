<div class="widget blog-search-bar">
	<h4 class="title">Search</h4>
	<form class="form-search" method="get" id="s" action="<?php bloginfo('url'); ?>">
		<div class="input-append">
			<input class="form-control input-medium search-query" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Search" required>
			<button class="add-on" type="submit"><i class="fa fa-search"></i></button>
		</div><!-- /.input-append -->
	</form><!-- /.form-search -->
</div><!-- /.blog-search-bar -->