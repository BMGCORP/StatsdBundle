<?php

require_once __DIR__.'/vendor/autoload.php';

// m6web/statsd (<= 2.1.0) declares an implicitly nullable parameter, which is deprecated since PHP 8.4.
// Load that class with E_DEPRECATED muted so the notice is not reported as a test error.
$errorReporting = error_reporting();
error_reporting($errorReporting & ~E_DEPRECATED);
class_exists(M6Web\Component\Statsd\Client::class);
error_reporting($errorReporting);
