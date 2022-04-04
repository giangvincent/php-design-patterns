<?php

require_once 'Logger.php';

$logger = Logger::getInstance();
$logger->setFileName('file 1');
$logger->write('abc');

$logger = Logger::getInstance();
$logger->write($logger->getFileName());