<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);

Config::define('DISALLOW_FILE_MODS', strtolower(getenv('DISALLOW_FILE_MODS', '')) == 'true');
Config::define('WP_DEBUG', strtolower(getenv('WP_DEBUG', '')) != 'false');

ini_set('display_errors', '1');
