<?php

 $dblocation = '127.0.0.1';
 $dbname = "myshop";
 $dbuser = "root";
 $dbpassword = "";

 $db = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);


 if(!$db){
     echo "Ошибка доступа к MySQL";
     exit();
 }

 if (!mysqli_select_db($db,$dbname)){
     echo "Ошибка  доступа к базе данных:" .$dbname;
     exit();

 }