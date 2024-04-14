<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Services\Service;

$service = new Service();
$service->echo();
