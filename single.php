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
					<?php 
						if(have_posts()) : while(have_posts()) : the_post();
					 ?>
						<div class="post-container">
							<div class="single-post">
								<p class="entry-date"><?php the_time('F j,Y'); ?></p>
								<a href="#" class="entry-title"><?php the_title(); ?></a>
								<span class="auther">Posted By: <a href="#"><?php the_author(); ?></a></span>
								<div class="entry-comtent"> 
									<?php the_content(); ?>
								</div>
							</div><!-- /.single-post -->
						</div>						
						<hr>
					<?php endwhile;  endif; ?>
					</div><!-- /.col-md-8 -->

					<?php get_sidebar(); ?>
				</div>
			</div><!-- /.container -->
		</div><!-- /.blog-content -->

		
<?php get_footer(); ?>