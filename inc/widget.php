<?php 

	// register footer sidebar

	function footer_sidebar(){
	
		register_sidebar(array(
		
			'name'=>'Footer Sidebar',
			'id'=>'footer_widget',
			'description'=>'This is our footer sidebar',
			'before_widget'=>'<div class="col-md-4"><div class="widget">',
			'after_widget'=>'</div></div>',
			'before_title'=>'<h3 class="widget-title">',
			'after_title'=>'</h3>',
		
		));
	}
	add_action('widgets_init','footer_sidebar');



	function blog_sidebar(){
	
		register_sidebar(array(
		
			'name'=>'Blog Sidebar',
			'id'=>'blog_widget',
			'description'=>'This is our Blog sidebar',
			'before_widget'=>'<div class="widget">',
			'after_widget'=>'</div>',
			'before_title'=>'<h4 class="title">',
			'after_title'=>'</h4>',
		
		));
	}
	add_action('widgets_init','blog_sidebar');


	// register custom widget


	class hello_contact extends WP_Widget {

		function __construct() {
			// Instantiate the parent object
			parent::__construct(
				'our_contact',
				'Contact Widget'
			);
		}

		function form( $instance ) { 
			// Output admin widget options form
			$title = ! empty($instance['title']) ? $instance['title'] : esc_html('Title', 'your-plugin-textdomain');
			$a_icon = ! empty($instance['a_icon']) ? $instance['a_icon'] : esc_html('address icon', 'your-plugin-textdomain');
			$address = ! empty($instance['address']) ? $instance['address'] : esc_html('Address', 'your-plugin-textdomain');
			$p_icon = ! empty($instance['p_icon']) ? $instance['p_icon'] : esc_html('Phone Icon', 'your-plugin-textdomain');
			$phone = ! empty($instance['phone']) ? $instance['phone'] : esc_html('Phone Number', 'your-plugin-textdomain');
			$e_icon = ! empty($instance['e_icon']) ? $instance['e_icon'] : esc_html('Email Icon', 'your-plugin-textdomain');
			$email = ! empty($instance['email']) ? $instance['email'] : esc_html('Email', 'your-plugin-textdomain');
		?>
				<p>
					<label for="">Title</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo $title; ?>">
				</p>
				<p>
					<label for="">Address icon</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('a_icon')); ?>" value="<?php echo $a_icon; ?>">
				</p>
				<p>
					<label for="">Address</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo $address; ?>">					
				</p>
				<p>
					<label for="">Phone Icon</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('p_icon')); ?>" value="<?php echo $p_icon; ?>">					
				</p>
				<p>
					<label for="">Phone Number</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo $phone; ?>">					
				</p>
				<p>
					<label for="">Email Address</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('e_icon')); ?>" value="<?php echo $e_icon; ?>">					
				</p>
				<p>
					<label for="">Email Address</label>
					<input type="text" name="<?php echo esc_attr($this->get_field_name('email')); ?>" value="<?php echo $email; ?>">					
				</p>
	<?php	}

		function update( $new_instance, $old_instance ) {
			// Save widget options
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['a_icon'] = ( ! empty( $new_instance['a_icon'] ) ) ? strip_tags( $new_instance['a_icon'] ) : '';
			$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
			$instance['p_icon'] = ( ! empty( $new_instance['p_icon'] ) ) ? strip_tags( $new_instance['p_icon'] ) : '';
			$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
			$instance['e_icon'] = ( ! empty( $new_instance['e_icon'] ) ) ? strip_tags( $new_instance['e_icon'] ) : '';
			$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';

			return $instance;
		}

		function widget( $args, $instance ) {
			// Widget output
			echo  $args['before_widget'];
			if ( ! empty( $instance['title'] && $instance['a_icon']) && $instance['address'] && $instance['p_icon'] && $instance['phone'] && $instance['e_icon'] && $instance['email'])
			?>
				<div class="widget-title">
					<h3 class="widget-title"><?php echo $instance['title']; ?></h3>
				</div><!-- /.widget-title -->
				<div class="address">
					<p>
						<span class="icon"><i class="fa fa-<?php echo $instance['a_icon']; ?>"></i></span>
						<span class="txt"><?php echo $instance['address']; ?></span>
					</p>
					<p>
						<span class="icon"><i class="fa fa-<?php echo $instance['p_icon']; ?>"></i></span>
						<span class="txt"><?php echo $instance['phone']; ?></span>
					</p>
					<p>
						<span class="icon"><i class="fa fa-<?php echo $instance['e_icon']; ?>"></i></span>
						<span class="txt"><?php echo $instance['email']; ?></span>
					</p>
				</div><!-- /.address -->
		<?php
			echo  $args['after_widget'];

		}

		
	}

	function contact_widget(){
		register_widget('hello_contact');
	}
	add_action('widgets_init', 'contact_widget');




























 ?>