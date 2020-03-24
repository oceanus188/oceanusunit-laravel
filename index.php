<?php
/**
 * Created by PhpStorm.
 * User: appen
 * Date: 2020/3/23
 * Time: 15:55
 */
require_once './vendor/autoload.php';

use Oceanus\OceanusunitLaravel\Test;

$test = new Test();
echo $test->index();