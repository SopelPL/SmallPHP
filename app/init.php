<?php

// Composer autoload
require_once '../vendor/autoload.php';

require_once 'config/AppConfiguration.php';

if (AppConfiguration::$APP_WHOOPS_ADDON) {
	require_once 'core/Whoops.php';
}

if (AppConfiguration::$APP_DATABASE_ADDON) {
	require_once 'core/Database.php';
}

require_once 'core/App.php';

require_once 'core/Controller.php';