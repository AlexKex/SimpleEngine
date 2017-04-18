<?php
$configuration = [];

// Настройки окружения
$configuration["ENVIRONMENT"] = "PROD";

// Настройки БД
$configuration["DB"]["DB_HOST"] = ""; // сервер БД
$configuration["DB"]["DB_USER"] = ""; // логин
$configuration["DB"]["DB_PASS"] = ""; // пароль
$configuration["DB"]["DB_NAME"] = ""; // имя БД

// Настройки роутинга
$configuration["ROUTER"] = [
    "customController/<action>" => "controllers/CustomController/<action>",
    "hello/<action>" => "controllers/HelloController/<action>",
    "<controller>/<action>" => "<controller>/<action>"
];