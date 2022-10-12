<?php

class Signin{

    public static function run($params){
        
        $db = Db :: singleton();
        $mail = $params["mail"];
        
        $pwd = password_hash($params["pwd"],PASSWORD_DEFAULT );

        $db->create('user',  array('mail','pwd','program_id','actual_day','actual_week'), array( $mail, $pwd,1,1,1));

        // Connexion directe après inscription
        $_SESSION["mail"]= $mail;
        
    }
}
?>