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
$headerStandard = 'Location:https://www.pam.by';
// Получаем массив данных из заголовка пришедшего
$result = parse_url($_SERVER['REQUEST_URI']);
// Извлекаем путь
$path = $result['path'];
$url = $_SERVER['REQUEST_URI'];
$query = $_SERVER['QUERY_STRING'];
$pageArray = array('agent', 'operator', 'store', 'info', 'main', 'view');

// Лишние слэши поудаляем
$mystring = $url;
$findme = '//';
$pos = strpos($mystring, $findme);

// Заметьте, что используется !==.  Использование != не даст верного 
// результата, так как '/' может находится в нулевой позиции.
if ($pos !== false) {
    while ($pos !== false) {
        $newphrase = str_replace($findme, "/", $mystring);
        $mystring = $newphrase;
        $pos = strpos($mystring, $findme);
    }
    $url = $mystring;
    $header = $headerStandard . $url;
    header($header);
    //exit();
}

// Проверяем протокол подключения
// если HTTP - то переподключаемся как надо
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { //HTTPS

} else { //HTTP
    $header = $headerStandard . $url;
    header($header);
    exit();
}

//Если есть параметр 'P' (старая версия)
if ($_GET['p']) {
    $page = preg_replace("#/$#", "", $_GET['p']);
    if (in_array($page, $pageArray)) {
        $header = $headerStandard . '/' . $page . '/';
        if ($page == 'view') {
            $text = preg_replace("#/$#", "", $_GET['id_text']);
            $header = $header . $text . '/';
        }
        if ($page == 'main') { //Обработка возврата на главную на потом
            $header = $headerStandard;
        }
    } else {
        $header = $headerStandard;
    }
    header($header);
    exit();
}

// Проверяем последний символ в строке пути
// если нет / - то добавим и изменим header
if ($url[strlen($url) - 1] != '/') {
    $header = $headerStandard . $url . '/';
    header($header);
    exit();
}

// Режем путь на части
$pie = explode("/", $path);
// Проверяем части при необходимости
//for ($i = 0; $i < count($pie); $i++)
//    echo "-----> " . $i . "--->" . $pie[$i] . "<br>\n"; // piece0/
//echo "---P--->" . $page . "<br>\n";
//echo "---path--- " . $path . "----<br>\n";
//echo "---REQEST_URI--- " . $url . "----<br>\n";
//echo "---QUERY_STRING--- " . $query . "----<br>\n";

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
