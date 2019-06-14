#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';
require_once "src/Command/CompanyCommand.php";
require_once "src/Command/CanEmployeeCommand.php";

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new CanEmployeeCommand());
$application->add(new CompanyCommand());
$application->run();