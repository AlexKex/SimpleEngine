<?php
$configuration = [];

// Настройки окружения
$configuration["ENVIRONMENT"] = "PROD";

// настройки директорий
$configuration["DIR"]["VIEWS"] = $_SERVER["DOCUMENT_ROOT"]."/../simpleengine/views/";

// Настройки БД
$configuration["DB"]["DB_HOST"] = "localhost"; // сервер БД
$configuration["DB"]["DB_USER"] = "geekbrains"; // логин
$configuration["DB"]["DB_PASS"] = "geekbrains"; // пароль
$configuration["DB"]["DB_NAME"] = "geekunivercity_db"; // имя БД
$configuration["DB"]["DB_CHARSET"] = "UTF8"; // имя БД

// Настройки роутинга
$configuration["ROUTER"] = [
    "customController/<action>" => "controllers/CustomController/<action>",
    "hello/<action>" => "controllers/HelloController/<action>",
    "<controller>/<action>" => "controllers/<controller>/<action>"
];


