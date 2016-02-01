<?php
namespace sebastianroming\Wordpress\Plugins\Unwetter;

class Main {
	
	// ---------------------------------------------
	public function __construct() {
		
		$this->_initHooks();
		
	}
	
	// ---------------------------------------------
	protected function _initHooks() {
		
		add_action( 'widgets_init', function(){ register_widget( 'sebastianroming\Wordpress\Plugins\Unwetter\Widgets\Default_Widget' ); });
		
	}
	
}

new Main();