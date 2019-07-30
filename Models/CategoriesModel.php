<?php

/**
 *
 *Получить дочерние категории для категории $catId
 *
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId){

   $db = mysqli_connect('localhost', 'root', '', 'myshop');

    $sql = "SELECT * 
            FROM categories 
            WHERE
            parent_id = '{$catId}'";

    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}

/**
 *
 * Получить главные категории с привязками дочерней
 *
 * @return array
 */
function getAllMainCatsWithChildren(){
   $db =  mysqli_connect('localhost', 'root', '', 'myshop');


    $sql = 'SElECT * FROM categories WHERE parent_id = 0';


    $rs = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($rs)){

        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren){
            $row['children'] = $rsChildren;
         }
        $smartyRs[] = $row;
    }
    return $smartyRs;
}


/**
 * Получить данные категории по id
 *
 * @param integer $catId ID категории
 * @return array массив - строка категорий
 */
function getCatById($catId){
    $db =  mysqli_connect('localhost', 'root', '', 'myshop');

    $catId = intval($catId);
    $sql = "SELECT * FROM categories
            WHERE 
            id = '{$catId}'";

    $rs = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($rs);

}
