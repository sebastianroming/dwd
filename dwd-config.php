<?php
namespace sebastianroming\Wordpress\Plugins\DWD;

class Config {
	
	public static $areas = Array(
		Array(
			'title'		=> 'Baden-W&uuml;rttemberg',
			'short'		=> 'baw',
		),
		Array(
			'title'		=> 'Bayern',
			'short'		=> 'bay',
		),
		Array(
			'title'		=> 'Berlin',
			'short'		=> 'bbb',
		),
		Array(
			'title'		=> 'Brandenburg',
			'short'		=> 'bbb',
		),
		Array(
			'title'		=> 'Bremen',
			'short'		=> 'nib',
		),
		Array(
			'title'		=> 'Hamburg',
			'short'		=> 'shh',
		),
		Array(
			'title'		=> 'Hessen',
			'short'		=> 'hes',
		),
		Array(
			'title'		=> 'Mecklenburg-Vorpommern',
			'short'		=> 'mvp',
		),
		Array(
			'title'		=> 'Niedersachsen',
			'short'		=> 'nib',
		),
		Array(
			'title'		=> 'Nordrhein-Westfalen',
			'short'		=> 'nrw',
		),
		Array(
			'title'		=> 'Rheinland-Pfalz',
			'short'		=> 'rps',
		),
		Array(
			'title'		=> 'Saarland',
			'short'		=> 'rps',
		),
		Array(
			'title'		=> 'Sachsen',
			'short'		=> 'sac',
		),
		Array(
			'title'		=> 'Sachsen-Anhalt',
			'short'		=> 'saa',
		),
		Array(
			'title'		=> 'Schleswig-Holstein',
			'short'		=> 'shh',
		),
		Array(
			'title'		=> 'Th&uuml;ringen',
			'short'		=> 'thu',
		)
	);
	
	public static $warningTypes = Array(
		Array(
			'title'		=> 'Gewitter',
			'short'		=> 'gewitter',
		),
		Array(
			'title'		=> 'Schneefall',
			'short'		=> 'schnee',
		),
		Array(
			'title'		=> 'Nebel',
			'short'		=> 'nebel',
		),
		Array(
			'title'		=> 'Gl&auml;tte, Glatteis',
			'short'		=> 'glatteis',
		),
		Array(
			'title'		=> 'Hitze',
			'short'		=> 'hitze',
		),
		Array(
			'title'		=> 'Stark- oder Dauerregen',
			'short'		=> 'regen',
		),
		Array(
			'title'		=> 'Wind / Sturm / Orkan',
			'short'		=> 'sturm',
		),
		Array(
			'title'		=> 'Frost',
			'short'		=> 'frost',
		),
		Array(
			'title'		=> 'Tauwetter',
			'short'		=> 'tauwetter',
		),
		Array(
			'title'		=> 'UV-Strahlung',
			'short'		=> 'uv',
		),
	);
	
	public static $urls = Array(
		'area'				=> 'http://www.dwd.de/DWD/warnungen/warnapp/json/warning_map_%s.png',
		'areaByWarningType'	=> 'http://www.dwd.de/DWD/warnungen/warnapp/json/warning_map_%s_%s.png',
		'popupUrl'			=> 'http://www.dwd.de/DE/wetter/warnungen/warnWetter_node.html',
	);
	
}