<?php

// FRONT CONTROLLER


// 1. Общие настройки
ini_set('display_errors', 0);
error_reporting(E_ALL);


// 2. Подключение файлов системы
const DIR = __DIR__ . '/';
require_once(DIR . 'components/Router.php');

// 3. Вызов Router
$router = new Router();
$router->run();