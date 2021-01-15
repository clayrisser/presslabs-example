<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

Config::define('DISALLOW_FILE_MODS', strtolower(getenv('DISALLOW_FILE_MODS', '')) !== 'false');
Config::define('WP_DEBUG', strtolower(getenv('WP_DEBUG', '')) === 'true');
