<?php


/**
 * Формирование страницы продукта
 *
 * @param object $smarty шаблонизатор
 *
 */
include_once '../Models/ProductsModel.php';
include_once '../models/CategoriesModel.php';


function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) exit();

//    Получить данные продукта
    $rsProducts = getProductById($itemId);

//    Получить все категории
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProducts);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');

}