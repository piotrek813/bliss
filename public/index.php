<?php
if (getenv("debug")) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

define('BASE_PATH', __DIR__);
define('URL_PREFIX', str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']));
define('ADMIN_API_URL', "http://xdr.com.pl/admin");
// define('ADMIN_API_URL', "http://localhost:8000");

require '../vendor/autoload.php';
require '../src/Helpers/index.php';

require '../src/Routes/index.php';

