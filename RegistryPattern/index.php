<?php

include_once 'Registry.php';
include_once 'Logger.php';

Registry::set('name', 'Mohammad Didarul Alam');
Registry::set('designation', 'Software Engineer');

echo Registry::get('name')."\n";
echo Registry::get('designation')."\n";

Registry::set('logger', new Logger());
$logger =Registry::get('logger');
$logger->log("data");
