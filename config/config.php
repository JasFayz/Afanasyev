<?php
/**
 * 
 * Файлы настроек
 */


define ('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//>Использваоние шаблона
$template = 'default';

//Пути к файлам шаблона
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//Пути к файлам шоблонов в вебпространстве
define ("TemplateWebPath", "/templates/{$template}/");
//<


//>Инициализация шаблонизаторов Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();


$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/config');

$smarty->assign('templateWebPath', TemplateWebPath);
