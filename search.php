<?php get_header(); ?>

<div class="blog-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="post-container">
				<h2><?php 
					echo 'Search for : ' . get_search_query();
				 ?></h2>
				<?php

					if(have_posts()) : while(have_posts()) : the_post();
				 ?>
					<div class="single-post">
						<p class="entry-date"><?php the_time('F j,Y'); ?></p>
						<a href="<?php the_permalink(); ?>" class="entry-title"><?php the_title(); ?></a>
						<span class="auther">Posted By: <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
						<p class="entry-comtent"><?php echo wp_trim_words(get_the_content(), 40); ?><a href="<?php the_permalink(); ?>" class="more-link">Read More...</a></p>
					</div><!-- /.single-post -->
					<hr>
				<?php endwhile; endif; ?>
				</div>
				<hr>
			</div><!-- /.col-md-8 -->
		</div>
	</div><!-- /.container -->
</div><!-- /.blog-content -->

<?php get_footer(); ?>