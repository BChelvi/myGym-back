<?php

class GetExercice {

    public static function run($id){
        $db = Db :: singleton();
        $sql = "SELECT * FROM exercice WHERE exercice_id='$id'";
        $exercicearm = $db -> select_sql($sql);

        echo json_encode($exercicearm);

        
    }

}