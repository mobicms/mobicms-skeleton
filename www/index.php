<?php

/**
 * This file is part of mobiCMS Content Management System.
 *
 * @see       https://github.com/mobicms/mobicms-skeleton for the canonical source repository
 * @license   https://github.com/mobicms/mobicms-skeleton/blob/develop/LICENSE GPL-3.0
 * @copyright https://github.com/mobicms/mobicms-skeleton/blob/develop/README.md
 */

declare(strict_types=1);

use Mobicms\ContainerFactory;
use Mezzio\Application;
use Mezzio\MiddlewareFactory;

if (PHP_VERSION_ID < 70300) {
    die('<h1 style="color: #dd0000">ERROR: outdated version of PHP</h1>');
}

chdir(dirname(__DIR__) . '/mobicms');

// Displays an error if there are no dependencies
if (! is_file('vendor/autoload.php')) {
    die('<h3 style="color: #dd0000">ERROR: missing dependencies</h3>');
}

require 'vendor/autoload.php';

// Handling Errors and Exceptions
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set('log_errors', 'On');
    ini_set('error_log', M_PATH_LOG . 'errors-' . date('Y-m-d') . '.log');
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'Off');
}

(function () {
    /** @var Psr\Container\ContainerInterface $container */
    $container = ContainerFactory::getContainer();

    /** @var Application $app */
    $app = $container->get(Application::class);
    $factory = $container->get(MiddlewareFactory::class);

    // Execute programmatic/declarative middleware pipeline and routing configuration statements
    (require M_PATH_CONFIG . 'routes.php')($app, $factory, $container);

    $app->run();
})();
