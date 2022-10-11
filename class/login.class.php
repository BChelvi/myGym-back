<?php
 

class Login{

    public static function run($params){
        

        $db = Db :: singleton();
        $mail = $params["mail"];
        $pwd = $params["pwd"];

       
        $sql = "SELECT * FROM user INNER JOIN program on (user.program_id = program.program_id) where user.mail='$mail'";
        $user = $db -> select_sql($sql);
       



        if(!empty($user) ){
 
            if(password_verify($pwd, $user[0]['pwd']))
            {
                $_SESSION["mail"]= $mail;
                $_SESSION["id"]=$user[0]['user_id'];
                echo json_encode($user[0]);
               
                
                
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