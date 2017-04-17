<?php
// Подключаем автозагрузчик
require (__DIR__ . "/../vendor/autoload.php");

// Подключаем конфигурацию
$configuration = require(__DIR__ . "/../configuration/main.config.php");

// Стартуем приложение
(new simpleengine\Application($configuration))->run();