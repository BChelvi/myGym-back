<?php
header("Access-Control-Allow-Origin:*");
@session_start();
require 'autoload.php';

$request_body = file_get_contents('php://input');

if(isset($_POST["action"])){
    $params = $_POST;
        }
else if($request_body){
    $params = json_decode($request_body, true);
    file_put_contents('logg.txt',$request_body);
    // echo json_encode($params);
    
}
else if(isset($_GET["action"])){
$params = $_GET;
    }
   

switch($params["action"])
{
    case "getallexercicesarm" :
        Getallexercicesarm :: run()
    ;
    break;

    case "" :
        ;
    break;

    case "" :
    ;
    break;

    case "" :
        ;
    break;

    case "" :
            ;
    break;    
}
