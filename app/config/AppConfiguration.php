<?php

class AppConfiguration {

	/**
	*
	*	DATABASE CONFIGURATION
	*
	**/
	static $DB_DRIVER = "mysql";
	static $DB_HOSTNAME = "localhost";
	static $DB_USERNAME = "root";
	static $DB_PASSWORD = "password";
	static $DB_DATABASE = "mvc";
	static $DB_CHARSET = "utf8";
	static $DB_COLLATION = "utf8_unicode_ci";
	static $DB_PREFIX = "";

	/**
	*
	*	MAIN CONFIGURATION
	*
	**/
	static $APP_DEFAULT_CONTROLLER = "home";
	static $APP_URL = "http://localhost/";
	static $APP_DATABASE_ADDON = false;
	static $APP_WHOOPS_ADDON = false;

}
