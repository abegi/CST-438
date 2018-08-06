<?php
class DatabaseSettings
{
	var $settings;
	function getSettings()
	{
		// Database variables
		// Host name
		$settings['dbhost'] = '';
		// Database name
		$settings['dbname'] = '';
		// Username
		$settings['dbusername'] = '';
		// Password
		$settings['dbpassword'] = '';

		return $settings;
	}
}
?>
