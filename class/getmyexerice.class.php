<?php

class GetMyExerice {

    public static function run($user_id,$exercice_id){
        $db = Db :: singleton();
        $sql = "SELECT * FROM exercice INNER JOIN performance ON (exercice.exercice_id=performance.exercice_id) WHERE performance.user_id=$user_id AND exercice.exercice_id=$exercice_id ORDER BY performance.perf_date DESC";
        $myexercice = $db -> select_sql($sql);

        echo json_encode($myexercice);

        
    }

}