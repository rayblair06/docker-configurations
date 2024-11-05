<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * This script will attempt to run the application in 'worker mode'.
 * Docs: https://github.com/dunglas/frankenphp/blob/main/docs/worker.md.
 */

// Prevent worker script termination when a client connection is interrupted
ignore_user_abort(true);

// Application handler
$handler = static function () use ($app) {
    echo '<h1>Hello world</h1>';
};

// Reset frankenPHP worker after a number of requests
// https://github.com/dunglas/frankenphp/blob/main/docs/worker.md#restart-the-worker-after-a-certain-number-of-requests
$maxRequests = (int) ($_SERVER['MAX_REQUESTS'] ?? 0);

// Here the magic of 'worker mode' happens.
for ($nbRequests = 0; !$maxRequests || $nbRequests < $maxRequests; ++$nbRequests) {
    $keepRunning = \frankenphp_handle_request($handler);

    // Call the garbage collector to reduce the chances of it being triggered in the middle of a page generation
    gc_collect_cycles();

    if (!$keepRunning) {
        break;
    }
}
