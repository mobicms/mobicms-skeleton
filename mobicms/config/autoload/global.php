<?php

/**
 * This file is part of mobiCMS Content Management System.
 *
 * @see       https://github.com/mobicms/mobicms-skeleton for the canonical source repository
 * @license   https://github.com/mobicms/mobicms-skeleton/blob/develop/LICENSE GPL-3.0
 * @copyright https://github.com/mobicms/mobicms-skeleton/blob/develop/README.md
 */

declare(strict_types=1);

use Laminas\ConfigAggregator\ConfigAggregator;

return [
    // Toggle the configuration cache
    ConfigAggregator::ENABLE_CACHE => true,

    // Enable debugging
    'debug'                        => false,

    'zend-expressive' => [
        // Provide templates for the error handling middleware
        'error_handler' => [
            'template_404'   => 'error::404',
            'template_error' => 'error::error',
        ],
    ],
];
