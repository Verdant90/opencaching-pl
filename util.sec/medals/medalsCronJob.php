<?php

ini_set('max_execution_time', 300);

require_once __DIR__ . '/../../lib/ClassPathDictionary.php';

$medalsController = new lib\Controllers\MedalsController();
$medalsController->checkAllUsersMedals();

