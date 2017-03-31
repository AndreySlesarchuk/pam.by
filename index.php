<?php
session_start();
header("Content-Type:text/html;charset=UTF-8");

require_once("config.php");

function __autoload($c)
{
    if (file_exists("controller/" . $c . ".php")) {

        require_once "controller/" . $c . ".php";
    } elseif (file_exists("model/" . $c . ".php")) {
        require_once "model/" . $c . ".php";
    }
}

// Заголовок базовый
$headerStandard = 'Location:http://pam.by';
// Получаем массив данных из заголовка пришедшего
$result = parse_url($_SERVER['REQUEST_URI']);
// Извлекаем путь
$rp = $_SERVER['REQUEST_URI'];

// Проверяем последний символ в строке пути
// если нет / - то добавим и изменим header
if ($rp[strlen($rp) - 1] != '/') {
    $header = $headerStandard . $rp . '/';
    header($header);
    exit();
}

// Режем на путь на части
$pie = explode("/", $result[path]);

// Проверяем части при необходимости
//for ($i = 0; $i < count($pie); $i++)
//    echo "--> ".$i. "---" . $pie[$i] . "<br>\n"; // piece0/
//echo "---P--->".$_GET['p']."<br>\n";

// Выбираем необходимые страницы и меняем заголовки при необходимости
// Класс(Начальная страница) - по умолчанию - main
$class = "main";
switch ($pie[1]) {
    case "": // Если пусто - запускаем начальную страницу
        break;
    case "index.php": // Если есть index.php и/или строка запроса
        if (!$_GET['p']) {//Если нет строки запроса, меняем только заголовок, Класс - main
            header($headerStandard);
            break;
        } else { //Иначе формируем новый заголовок и перезагружаем страницу необходимую
            $class = $_GET['p'];
            $header = $headerStandard . '/' . $class . '/';
            header($header);
            exit();
        }
    case "agent":  //Если стандартные и существующие имена страниц
    case "operator":
    case "store":
    case "info":
        $class = $pie[1];
        break;
    case "view": // Просмотр документации <<--ДОПЕРЕРАБОТАТЬ ---
        $class = $pie[1];
        $_GET['id_text'] = $pie[2];
        break;
    default: //Если совершенно не подходящщее то изменяем заголовок (Класс - main)
        header($headerStandard);
        exit();
}
// Создаем новый объект класса при существовании
if (class_exists($class)) {
    $obj = new $class;
    $obj->get_body($class);
} else {
    exit("<p>Нет данных для входа</p>");
}
