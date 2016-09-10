<?php
// register Carousel widget

/**
 * NCKU Action carousel widget
 * Widget for showing carousel
 * @license GPL 2+ GNU GPL licence above 2+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        wp_die();
}


function carousel_register_widgets() {
    register_widget( 'Carousel' );
}

add_action('widgets_init', 'carousel_register_widgets');


/**
 * Adds carousel widget.
 */
class carousel extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'ncku-action_carousel', // Base ID
			'[Ncku-action]_Carousel', // Name
			array( 'description' => 'add Carousel')// Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) { ?>
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        	<!-- Indicators -->
        	<ol class="carousel-indicators">
            	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
            	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
            	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
        	</ol>
        	<!-- Wrapper for slides -->
        	<div class="carousel-inner" role="listbox">
        	<?php
            $args = array( 'post_type' => 'setup','tag' => 'banner' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            	<div class="item active">
                	<img src="<?php the_field('slider-1'); ?>" alt="">
                	<div class="carousel-caption">
                	</div>
            	</div>
            	<div class="item">
                	<img src="<?php the_field('slider-2'); ?>" alt="">
                	<div class="carousel-caption">
                	</div>
            	</div>
            	<div class="item">
                	<img src="<?php the_field('slider-3'); ?>" alt="">
                	<div class="carousel-caption">
                	</div>
            	</div>
            	<div class="item">
                	<img src="<?php the_field('slider-4'); ?>" alt="">
                	<div class="carousel-caption">
                	</div>
            	</div>
            <?php endwhile;  ?>
        	</div>
        	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            	<span class="sr-only">Previous</span>
        	</a>
        	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            	<span class="sr-only">Next</span>
        	</a>
    	</div>
	<?php 
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : 幻燈片;
		?>
		<p>
			<label
				for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'inlife' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<?php esc_html_e( 'There is no options here any more... just go to theme options page and add social media urls to activate them', 'inlife' ); ?>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

}