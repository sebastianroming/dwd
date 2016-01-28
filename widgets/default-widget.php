<?php
namespace sebastianroming\Wordpress\Plugins\DWD\Widgets;
use sebastianroming\Wordpress\Plugins\DWD\Config;
use WP_Widget;

class Default_Widget extends WP_Widget {
	
	// ---------------------------------------------
	public function __construct() {
		
		parent::__construct(
			'dwd_default_widget', // Base ID
			__( 'Unwetterwarnungen', 'dwd' ), // Name
			array( 'description' => __( 'Zeigt aktuelle Wetterwarnungen des Deutschen Wetterdienstes, sofern vorhanden, als Grafik f&uuml;r einzelne Bundesl&auml;nder an.', 'dwd' ), ) // Args
		);
		
	}

	// ---------------------------------------------
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		
		$selectedArea 	= ! empty( $instance['selectedArea'] ) ? $instance['selectedArea'] : 'de';
		$selectedWarningType 	= ! empty( $instance['selectedWarningType'] ) ? $instance['selectedWarningType'] : 'all';
		
		$url = ($selectedWarningType != 'all') ? Config::$urls['areaByWarningType'] : Config::$urls['area'];
		
		$imageUrl = sprintf($url, $selectedArea, $selectedWarningType);
		
		?>
		<a href='<?php echo Config::$urls['popupUrl']; ?>' target='_blank' style='font-size:10px;'><img src='<?php echo $imageUrl; ?>' style='width:90%;' /></a><br />
		<a href='<?php echo Config::$urls['popupUrl']; ?>' target='_blank' style='font-size:10px;'>&copy; Deutscher Wetterdienst (DWD)</a>
		<?php
		echo $args['after_widget'];
		
	}

	// ---------------------------------------------
	public function form( $instance ) {
		
		$title 					= ! empty( $instance['title'] ) ? $instance['title'] : __( 'Unwetter', 'dwd' );
		$selectedArea 			= ! empty( $instance['selectedArea'] ) ? $instance['selectedArea'] : 'de';
		$selectedWarningType	= ! empty( $instance['selectedWarningType'] ) ? $instance['selectedWarningType'] : 'all';
		?>
		<p>
		<label for='<?php echo $this->get_field_id( 'title' ); ?>'><?php _e( 'Title:' ); ?></label> 
		<input class='widefat' id='<?php echo $this->get_field_id( 'title' ); ?>' name='<?php echo $this->get_field_name( 'title' ); ?>' type='text' value='<?php echo esc_attr( $title ); ?>'>
		</p>
		
		<p>
		<label for='<?php echo $this->get_field_id( 'selectedArea' ); ?>'><?php _e( 'Bundesland / Region:' ); ?></label> 
		<select class='widefat' id='<?php echo $this->get_field_id( 'selectedArea' ); ?>' name='<?php echo $this->get_field_name( 'selectedArea' ); ?>'>
			<option value='de'>Deutschland</option>
			<?php
			asort(Config::$areas);
			foreach (Config::$areas as $area) {
				
				$areaSelected = ( esc_attr($selectedArea) == $area['short'] ) ? 'selected' : '';
				?>
				<option value='<?php echo $area['short']; ?>' <?php echo $areaSelected; ?>><?php echo $area['title']; ?></option>
				<?php
			}
			?>
		</select>
		
		</p>
		
		<p>
		<label for='<?php echo $this->get_field_id( 'selectedWarningType' ); ?>'><?php _e( 'Warnkriterium:' ); ?></label> 
		<select class='widefat' id='<?php echo $this->get_field_id( 'selectedWarningType' ); ?>' name='<?php echo $this->get_field_name( 'selectedWarningType' ); ?>'>
			<option value='all'>Alle Warnungen</option>
			<?php
			asort(Config::$warningTypes);
			foreach (Config::$warningTypes as $warningType) {
				
				$warningTypeSelected = ( esc_attr($selectedWarningType) == $warningType['short'] ) ? 'selected' : '';
				?>
				<option value='<?php echo $warningType['short']; ?>' <?php echo $warningTypeSelected; ?>><?php echo $warningType['title']; ?></option>
				<?php
			}
			?>
		</select>
		
		</p>
		<?php 
	}

	// ---------------------------------------------
	public function update( $new_instance, $old_instance ) {
		
		$instance 							= array();
		$instance['title'] 					= ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['selectedArea'] 			= ( ! empty( $new_instance['selectedArea'] ) ) ? strip_tags( $new_instance['selectedArea'] ) : '';
		$instance['selectedWarningType']	= ( ! empty( $new_instance['selectedWarningType'] ) ) ? strip_tags( $new_instance['selectedWarningType'] ) : '';

		return $instance;
		
	}
	
}