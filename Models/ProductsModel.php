<?php

/**
 *
 * Получаем последние добавленные товары
 *
 * @param integer $limits Лимит товаров
 * @return array Массив товаров
 */
function getLastProducts($limits = null){
    $db =  mysqli_connect('localhost', 'root', '', 'myshop');


    $sql = "SELECT * FROM products ORDER BY id DESC ";

    if ($limits){
        $sql.=" LIMIT {$limits}";
    }
    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}

/**
 * @param $itemId
 * @return array|bool
 */
function getProductsByCat($itemId){
    $db =  mysqli_connect('localhost', 'root', '', 'myshop');

    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";

    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);

}

/**
 * @param $itemId
 * @return array|null
 */
function getProductById($itemId){
    $db =  mysqli_connect('localhost', 'root', '', 'myshop');

    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE id = '{$itemId}'";
    $rs = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($rs);
}

function getProductsFromArray($itemsId){
    $db =  mysqli_connect('localhost', 'root', '', 'myshop');
    $strIds = implode($itemsId, ', ');

    $sql = "SELECT * FROM products WHERE id in ({$strIds})";
    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}