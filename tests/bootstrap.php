<?php
define('STUB_PATH', __DIR__ . '/stubs');

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('CarlosIO\GitHub\Tests', __DIR__);
