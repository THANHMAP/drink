<?php
require_once 'db_functions.php';
$db =  new DB_Functions();

$response = array();
if(isset($_POST['phone'])){
    $phone =  $_POST['phone'];
    if($db->checkExistsUser($phone)){
        $response["exists"] =  true;
        echo json_encode($response);
    }else{
        $response["exists"] =  false;
        echo json_encode($response);
    }
}else{
    $response["error_msg"] =  "Reuire thieu me roi ";
    echo json_encode($response);
}

?>