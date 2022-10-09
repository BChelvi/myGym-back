<?php

class Signin{

    public static function run($params){
        
        $db = Db :: singleton();
        $mail = $params["mail"];
        
        $pwd = password_hash($params["pwd"],PASSWORD_DEFAULT );

        $db->create('user',  array('mail','pwd'), array( $mail, $pwd));

        // Connexion directe après inscription
        $_SESSION["mail"]= $mail;
        
    }
}
?>