<?php

class Signin{

    public static function run($params){
  
        $db = Db :: singleton();
        $mail = $params["mail"];
        $isCoach=$params['coach'];
        
        $pwd = password_hash($params["pwd"],PASSWORD_DEFAULT );

        $sql1 = "SELECT * FROM user where user.mail='$mail'";
        $verif = $db -> select_sql($sql1);

        if(!$verif){

            $db->create('user',  array('mail','pwd','program_id','actual_day','actual_week','isCoach'), array( $mail, $pwd,1,1,1,$isCoach));

            $user_id = $db->lastInsertId();
            // Connexion directe après inscription

            $sql = "SELECT * FROM user INNER JOIN program on (user.program_id = program.program_id) where user.user_id=' $user_id'";
            $user = $db -> select_sql($sql);

            $_SESSION["mail"]= $mail;

            echo json_encode($user[0]);
        }
        else echo "Mail déja enregistré";
    }
}
?>