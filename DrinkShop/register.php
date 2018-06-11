<?php
require_once 'db_function.php';
$db =  new DB_Functions();

$response = array();
if(isset($_POST['phone']) && isset($_POST['name']) && isset($_POST['birthdate']) && isset($_POST['address']) ){
    
    $phone =  $_POST['phone'];
    $name =  $_POST['name'];
    $birthdate =  $_POST['birthdate'];
    $address =  $_POST['address'];
    
    if($db->checkExistUser($phone)){
        $response["error_msg"] =  "User da ton tai ";
        echo json_encode($response);
    }else{

        $user = $db->registerNewUser($phone, $name, $birthdate, $address);
        if($user){
            $response["phone"] = $user["Phone"];
            $response["name"] = $user["Name"];
            $response["birthdate"] = $user["Birthdate"];
            $response["address"] = $user["Address"];
            echo json_encode($response);
        }else{
            $response["error_msg"] = "loi eo bit";
            echo json_encode($response);
        }
        
    }
}else{
    $response["error_msg"] =  "Reuire thieu me roi ";
    echo json_encode($response);
}

?>