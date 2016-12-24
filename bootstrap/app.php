<?php

/***
 * ss-panel v3 Bootstrap
 * @author orvice
 * @email sspanel@orx.me
 * @url https://github.com/orvice/ss-panel
 */

use App\Services\Boot;

//  BASE_PATH
define('BASE_PATH', __DIR__ . '/../');
define('VERSION', '3.4.9');
define('GPLIDER', md5(constant("VERSION")));
// Vendor Autoload
require BASE_PATH . '/vendor/autoload.php';

Boot::loadEnv();
Boot::setDebug();
Boot::setVersion(VERSION);
Boot::setGPLIDER(GPLIDER);
// config time zone
Boot::setTimezone();
// Init db
Boot::bootDb();
