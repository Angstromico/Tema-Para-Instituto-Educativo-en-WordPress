<?php
/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Widget Title', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		?>
<?php    if ( ! empty( $instance['cantidad'] ) ) {
               $cantidad = $instance['cantidad'];
          }
		if(!is_numeric($cantidad)) {
			$cantidad = 2;
		}
		$args = array(
               'post_type' => 'post',
               'posts_per_page' => $cantidad,
			   'order' => 'asc'
          );
          $cursos = new WP_Query($args);
while($cursos->have_posts()): $cursos->the_post(); ?>

<div class="card mt-2">
    <?php $url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    <img src="<?php echo $url ?>" class="img-fluid" alt="Farmacologia">
    <div class="card-body ">
        <h3 class="card-title"><?php the_title(); ?></h3>
        <p class="card-subtitle m-0">Aprende <?php the_title(); ?></p>
    </div>
    <div class="card-footer">
        <a href="<?php the_permalink(); ?>">Más Información</a>
    </div>
</div>
<!--card-->

<?php endwhile; ?>


<!--proxims-cursos-->
<div class="ultimas-entradas mt-3">
    <h2 class="text-center text-light">Últimas Entradas</h2>
    <?php while($cursos->have_posts()): $cursos->the_post(); ?>
    <ul class="list-unstyled mt-4">
        <li>
            <a href="<?php the_permalink(); ?>" class="text-light"><?php the_title(); ?></a>
        </li>
    </ul>
    <?php endwhile; ?>
</div>
<?php 
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo Barra Lateral', 'text_domain' );
		$cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( 'Cantidad entradas que quieres Mostrar:', 'text_domain' );
		?>
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
        value="<?php echo esc_attr( $title ); ?>">
</p>
<?php 
		?>
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( 'Cantidad entradas que quieres Mostrar:', 'text_domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="text"
        value="<?php echo esc_attr( $cantidad ); ?>">
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
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );