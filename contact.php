<?php 
	/*
		Template Name:Contact Page
	*/
 ?>
<?php get_header(); ?>
		
		<!-- Slider Section -->
		<section id="heading">
			<div class="overlay">
				<div class="container">
					<h1 class="title">Contact</h1>
				</div><!-- /.container -->
			</div><!-- /.overlay -->
		</section><!-- /#slider -->
		<!-- Slider Section End -->


		<div class="contact-wrap">
			<div class="container">
				<div class="col-md-7">
					<form action="#" method="post">
						<h3>Get In Tech</h3>

						<p>Duis sed odio sit am et nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.	aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
					<?php 
						while(have_posts()) : the_post();
					 ?>
					 	<?php the_content(); ?>
						
					<?php endwhile; ?>
					</form>
				</div>
			</div><!-- /.container -->
		</div><!-- /.blog-content -->

		
<?php get_footer(); ?>