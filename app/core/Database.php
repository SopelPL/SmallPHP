<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => AppConfiguration::$DB_DRIVER,
	'host' => AppConfiguration::$DB_HOSTNAME,
	'username' => AppConfiguration::$DB_USERNAME,
	'password' => AppConfiguration::$DB_PASSWORD,
	'database' => AppConfiguration::$DB_DATABASE,
	'charset' => AppConfiguration::$DB_CHARSET,
	'collation' => AppConfiguration::$DB_COLLATION,
	'prefix' => AppConfiguration::$DB_PREFIX
]);

$capsule->bootEloquent();