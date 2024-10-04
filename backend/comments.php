<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    require('../page/db_connect.php');

    $DataBase=new db_connect;
    $result=$DataBase->SELECT_COMMENTS();
    $data=array("data"=>$result,"len"=>count($result));
    echo json_encode($data);
?>