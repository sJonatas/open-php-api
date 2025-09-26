<?php

require_once './vendor/autoload.php';

use Sjonatas\OepnPhpApi\OpenPHP;
use Sjonatas\OepnPhpApi\Server;


$openPhp = new OpenPHP([
    new Server(
        'http://localhost/',
        '',
        []
    ),
]);

$openPhp->buildPaths();