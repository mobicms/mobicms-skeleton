<?php

/**
 * This file is part of mobiCMS Content Management System.
 *
 * @see       https://github.com/mobicms/mobicms-skeleton for the canonical source repository
 * @license   https://github.com/mobicms/mobicms-skeleton/blob/develop/LICENSE GPL-3.0
 * @copyright https://github.com/mobicms/mobicms-skeleton/blob/develop/README.md
 */

declare(strict_types=1);

const DEBUG = true;

// Profiling
define('M_START_MEMORY', memory_get_usage());
define('M_START_TIME', microtime(true));

// System wide constants
const DS = DIRECTORY_SEPARATOR;

define('M_PATH_ROOT', dirname(__DIR__, 2) . DS);
const M_PATH_SYSTEM = M_PATH_ROOT . DS . 'mobicms' . DS;

const M_PATH_CONFIG = __DIR__ . DS;
const M_PATH_DATA = M_PATH_SYSTEM . 'data' . DS;
const M_PATH_CACHE = M_PATH_DATA . 'cache' . DS;
const M_PATH_LOG = M_PATH_DATA . 'logs' . DS;
const M_PATH_PUBLIC = M_PATH_ROOT . 'www' . DS;

// System files
const M_FILE_CONFIG_CACHE = M_PATH_CACHE . 'system-config.cache';
const M_FILE_CONFIG_ROUTES = M_PATH_CONFIG . 'routes.php';
