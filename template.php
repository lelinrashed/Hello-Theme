<?php 
	/*
		Template Name:Home  Page
	*/
 ?>
<?php get_header(); ?>

		
		<!-- Slider Section -->
		<section id="slider">
		<?php 
			query_posts(array(
				'post_type' => 'slider',
				'posts_per_page' => 1
			));
			if(have_posts()) : while(have_posts()) : the_post();
			$slider_image = get_post_thumbnail_id();
		 ?>
			<div class="slider-container text-center" style="background: url(<?php echo wp_get_attachment_url($slider_image); ?>) no-repeat;">
				<div class="overlay">
					<div class="container">
				    	<div class="slider-txt">
							<h2 class="title"><?php the_title(); ?></h2>
							<p class="slider-description"><?php the_content(); ?></p>
							<div class="link">
								<a href="#" class="btn custom-btn">View Portfolio</a>
							</div>
						</div><!-- /.slider-txt -->							   
					</div><!-- /.container -->
				</div><!-- /.overlay -->
			</div><!-- /.slider-container -->
		<?php 
			endwhile; endif;
		 ?>
		</section><!-- /#slider -->
		<!-- Slider Section End -->


		<section id="features">
			<div class="features-section section-padding">
				<div class="container">

					<div class="section-head">
						<h2 class="section-title"><?php echo get_option('service_title'); ?></h2>
						<p class="section-description"><?php echo get_option('service_desc'); ?></p>
					</div><!-- /.section-head -->

					<div class="section-content text-center">
						<div class="row">
						<?php 
							query_posts(array(
								'post_type' => 'service',
								'posts_per_page' => 4
							));
							if(have_posts()) : while(have_posts()) : the_post();
						 ?>
							<div class="col-md-3 col-sm-6">
								<div class="inner-item">
									<div class="icon">
										<i class="fa fa-<?php echo get_post_meta($post->ID,'s_icon', true); ?>"></i>
									</div><!-- /.icon -->

									<div class="item-info">
										<div class="item-title">
											<a href="#" class="title"><?php the_title(); ?></a>
										</div><!-- /.item-title -->
										<p><?php the_content(); ?></p>
									</div><!-- /.item-info -->
								</div><!-- /.inner-item -->
							</div><!-- /.col-md-3 -->
						<?php endwhile; endif; ?>
						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.features-section -->
		</section><!-- /#features -->


		<section id="team">
			<div class="team-section section-padding">
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">Professional Service</h2>
						<p class="section-description">Monotonectally empower fully tested technologies without open-source web services. Uniquely ment after client-centered e-services. Globally transition open-source mindshare without </p>
					</div><!-- /.section-head -->

					<div class="section-content text-center">
						<div class="row">
						<?php 
							query_posts(array(
								'post_type' => 'team',
								'posts_per_page' => 4
							));
							if(have_posts()) : while(have_posts()) : the_post();
						 ?>
							<div class="col-md-3 col-sm-6">
								<div class="inner-item">
									<div class="member-img">
										<?php the_post_thumbnail('team-image'); ?>
									</div>
									<div class="member-info">
										<div class="name">
											<a href="#" class="title"><?php the_title(); ?></a>
										</div><!-- /.item-title -->
										<p class="designation"><?php the_content(); ?></p>
									</div><!-- /.item-info -->
								</div><!-- /.inner-item -->
							</div><!-- /.col-md-3 -->
						<?php endwhile; endif; ?>
						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.team-section -->
		</section><!-- /#team -->


		<!-- Portfolio Section -->
		<section id="portfolio" class="portfolio-section section-padding">
			<div class="container">

				<div class="section-head">
					<h3 class="section-title">Portfolio</h3>
					<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula sapien orci, ac  lobortis turpis. Sed justo neque, imperdiet ac libero ut, aliquam finibus </p>
				</div><!-- /.section-head -->

				<div id="portfolio-container" class="clearfix">
					<div class="PortfolioFilter text-center">
						<a href="#" data-filter="" class="current">Show All</a>
					<?php 
						$terms = get_terms('p_cat');
						foreach ($terms as $term) {
							echo "<a href=\"#\" data-filter=\".$term->slug\">$term->name</a>";
						}
					 ?>

					</div>

					<div class="portfolio-items element-from-bottom">
					<?php 
						query_posts(array(
							'post_type' => 'portfolio',
							'taxonomy' => 'p_cat'
						));
						if(have_posts()) : while(have_posts()) : the_post();

					 ?>
					<?php 
						$terms = get_the_terms( get_the_ID(), 'p_cat' );
                         
						if ( $terms && ! is_wp_error( $terms ) ) : 
						 
						    $draught_links = array();
						 
						    foreach ( $terms as $term ) {
						        $draught_links[] = $term->slug;
						    }
						                         
						    $on_draught = join( " ", $draught_links );
					 ?>
						<figure class="item <?php echo $on_draught; ?> single-item">
							<div class="portfolio-img">
					  			<?php the_post_thumbnail(); ?>
					  		</div><!-- /.portfolio-img -->
						</figure>
					<?php 
						endif; endwhile; endif;
					 ?>
					</div><!-- /.portfolio-items -->
				</div><!-- /#portfolio-container -->
			</div><!-- /.container -->
		</section><!-- #portfolio -->


		<!-- Pricint Section -->
		<section id="pricing" class="pricing-section section-padding text-center">
			<div class="container">
				<div class="section-head">
					<h3 class="section-title">Our Pricing</h3>
					<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula sapien orci, ac  lobortis turpis. Sed justo neque, imperdiet ac libero ut, aliquam finibus </p>
				</div><!-- /.section-head -->
				<div class="section-content">
				<?php 
					query_posts(array(
						'post_type' => 'pricing',
						'posts_per_page' => 4
					));

					if(have_posts()) : while(have_posts()) : the_post();

				 ?>
					<div class="col-md-3 col-sm-6">
						<div class="inner-item">
							<div class="item-title">
								<h3><?php echo get_post_meta($post->ID,'p_package',true); ?>
								</h3>
							</div>
							<div class="pricing-range casablanca">	
								<p class="currency-number">
									<span class="currency"><?php echo get_post_meta($post->ID,'p_currency',true); ?></span> 
									<span class="number"><?php echo get_post_meta($post->ID,'p_price',true); ?></span>
								</p>
								<p class="duration"><?php echo get_post_meta($post->ID,'p_time',true); ?></p>
							</div><!-- /.pricing-range -->
							<div class="list-wrap">
								<ul class="pricing-list">
									<li><a href="#"><?php echo get_post_meta($post->ID,'p_page',true); ?></a></li>
									<li><a href="#"><?php echo get_post_meta($post->ID,'p_domain',true); ?></a></li>
									<li><a href="#"><?php echo get_post_meta($post->ID,'p_hosting',true); ?></a></li>
									<li><a href="#"><?php echo get_post_meta($post->ID,'p_revision',true); ?></a></li>
									<li><a href="#">3 Months Support</a></li>
								</ul>

								<div class="link">
									<a href="#" class="btn custom-btn casablanca">Order Now</a>
								</div>
							</div>
						</div><!-- /.inner-item -->
					</div><!-- /.col-md-3 -->
				<?php endwhile; endif; ?>
				</div><!-- /.section-content -->
			</div>
		</section><!-- /#pricing -->
		<!-- Pricint Section End -->

<?php get_footer(); ?>
