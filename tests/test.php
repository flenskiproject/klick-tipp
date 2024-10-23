<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FlenskiProject\KlickTipp\Connector;

$connector = new Connector();

echo $connector->get_last_error() | "All ok!";