<?php

class Getexercicearm {

    public static function run($id){
        $db = Db :: singleton();
        $sql = "SELECT * FROM exercices_biceps WHERE exercices_biceps_id='$id'";
        $exercicearm = $db -> select_sql($sql);

        echo json_encode($exercicearm);

        
    }

}