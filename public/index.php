<?php
// Подключаем автозагрузчик
require (__DIR__ . "/../vendor/autoload.php");
require (__DIR__ . "/../core/autoload.php");

// Подключаем конфигурацию
require(__DIR__ . "/../configuration/main.config.php");

// Стартуем приложение
try {
    (new core\Application($configuration))->run();
}
catch (Exception $e){
    echo $e->getMessage();
}