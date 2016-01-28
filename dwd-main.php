<?php
namespace sebastianroming\Wordpress\Plugins\DWD;

class Main {
	
	// ---------------------------------------------
	public function __construct() {
		
		$this->_initHooks();
		
	}
	
	// ---------------------------------------------
	protected function _initHooks() {
		
		add_action( 'widgets_init', function(){ register_widget( 'sebastianroming\Wordpress\Plugins\DWD\Widgets\Default_Widget' ); });
		
	}
	
}

new Main();