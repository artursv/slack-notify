<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use Notification\Notification;

$spam = new Notification();

echo $spam->notify();
