<?php get_header(); ?>

	<!-- Slider Section -->
	<section id="heading">
		<div class="overlay">
			<div class="container">
				<h1 class="title">Blog</h1>
			</div><!-- /.container -->
		</div><!-- /.overlay -->
	</section><!-- /#slider -->
	<!-- Slider Section End -->

	<div class="blog-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-container">
						<h2>
							<?php 
								if (is_category()) {
									echo 'Archive for : '; single_cat_title();
								}elseif (is_tag()) {
									echo 'Archive for : '; single_tag_title();
								}elseif (is_author()) {
									echo 'Archive for : '; the_author();
								}elseif (is_day()) {
									echo 'Archive for : ' .get_the_date();
								}elseif (is_month()) {
									echo 'Archive for : ' .get_the_date();
								}elseif (is_year()) {
									echo 'Archive for : ' .get_the_date();
								}else {
									echo 'Archives';
								}
							 ?>
						</h2>
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

				<?php get_sidebar(); ?>
			</div>
		</div><!-- /.container -->
	</div><!-- /.blog-content -->


<?php get_footer(); ?>