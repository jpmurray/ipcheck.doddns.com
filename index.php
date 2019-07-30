<?php

require __DIR__ . '/vendor/autoload.php';

use Vectorface\Whip\Whip;

$whip = new Whip();
$clientAddress = $whip->getValidIpAddress();

echo $clientAddress;
