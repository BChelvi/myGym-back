<?php
 

class Login{

    public static function run($params){
        

        $db = Db :: singleton();
        $mail = $params["mail"];
        $pwd = $params["pwd"];

        $user = $db -> selectOne('user', 'mail', $mail);
        echo "<pre>";
        print_r($user);
        echo "</pre>";
        if(!empty($user) ){
 
            if(password_verify($pwd, $user['pwd']))
            {
                $_SESSION["mail"]= $mail;
                $_SESSION["id"]=$user['user_id'];
                echo json_encode($user);
               
                
                
            }
            else{
                echo"mauvais mdp";
            //  header('location:./form_login.html'); 
            }
        }
        else{
            echo"email inexistant";
            
            // header('location: ./form_login.html');
        }
    }
}