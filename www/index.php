<?php
session_start();//стартуем сессию

if (! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
include_once '../config/config.php'; //Инициализация настроек
include_once '../config/db.php';
include_once '../library/mainFunctions.php'; //Основные функции

//Определяет с каким контроллером будем работать 
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : "Index";


//Определяет с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);

