<?php
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers:  * ");
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
   
    case "getexercice" :
        GetExercice :: run ($params["exercice_id"])
        ;
    break;

    case "login" :
        Login :: run($params)
    ;
    break;

    case "signin" :
        Signin :: run($params)
        ;
    break;

    case "logout" :
        Logout :: run()
            ;
    break;

    case "getroutine" :
        GetRoutine :: run($params['user'],$params['day'],$params['week'])
            ;
    break;
    
    case "getperformance" :
        GetPerformance :: run($params['user'],$params['date'],$params['exercice'])
            ;
    break;
    
    case "getmyexercice" :
         GetMyExerice :: run($params['user'],$params['exercice_id'])
            ;
    break;

    case "addperformance" :

        AddPerformance :: run ($params['user'],$params['exercice_id'],$params['lift'],$params['reps'])
        ;
    break;

    case "updateuser" :

        UpdateUser :: run ($params['user'],$params['day'],$params['week'])
        ;
    break;

    case "resetroutine" :

        ResetRoutine :: run ()
        ;
    break;
}
