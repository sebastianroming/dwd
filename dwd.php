<?php
/*
Plugin Name: DWD
Plugin URI: http://www.sebastianroming.de/wordpress-plugins/
Description: Zeigt aktuelle Wetterwarnungen des Deutschen Wetterdienstes (DWD)
Version: 1.0.0
Author: Sebastian Roming
Author URI: http://www.sebastianroming.de
License: GPL2
Text Domain: dwd
*/

/*	
	Copyright 2016 Sebastian Roming

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if (version_compare(phpversion(), '5.3.0') < 0) {
    wp_die(
        'Dieses Plugin ben&ouml;tigt mindestens PHP in Version 5.3.0!',
		'Veraltete PHP-Version',
        array('back_link' => true)
    );
}

require_once dirname( __FILE__ ) . '/dwd-config.php';
require_once dirname( __FILE__ ) . '/widgets/default-widget.php';
require_once dirname( __FILE__ ) . '/dwd-main.php';