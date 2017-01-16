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

echo $_SERVER['REQUEST_URI'] . "----------" . $_GET['p'] . "------------->>>>>>";
$url = $_SERVER['REQUEST_URI'];

///pam.by/index.php?p=agent----------agentArray
//(
//    [path] => /pam.by/index.php
//[query] => p=agent
//)
$result = parse_url($_SERVER['REQUEST_URI']);
print_r($result);
//если есть запрос в строке разбираем и пересобираем uri
if ($result[query]) {
    $pie = explode("/", $result[query]);
    for ($i = 0; $i < count($pie); $i++)
        echo $i."---".$pie[$i] . "<br>\n"; // piece0
//
//    if ($_GET['p']) {
//        $class = trim(strip_tags($_GET['p']));
//    } else {
//        $class = 'main';
//    }
} else {
    $pie = explode("/", $result[path]);
    for ($i = 0; $i < count($pie); $i++)
        echo $i."---".$pie[$i] . "<br>\n"; // piece0
    if ((strcasecmp($pie[2], "index.php") == 0) || (strcasecmp($pie[2], "main") == 0) || ($pie[2] == "")) {
        $class = 'main';
    } else {
        $class = $pie[2];
        $id_text = $pie[3];

    }
}

//header('Location:http://newcoder.ru/cat/web/');
//exit;
//exit;
//$_SERVER['REQUEST_URI'] = $result[path].'//'.$class;
//print_r(parse_url($url));
//echo $result[query];
//print_r(parse_str($result, $params));


//if ($_GET['p']) {
//        $class = trim(strip_tags($_GET['p']));
//} else {
//    $class = 'main';
//}
echo "КЛАСС" . $class;
if (class_exists($class)) {

    $obj = new $class;
    $obj->get_body($class);
} else {
    exit("<p>Нет данных для входа</p>");
}

