<?php

class GetPerformance {

    public static function run($user,$date,$exercice){
        $db = Db :: singleton();

        $sql = "SELECT * FROM performance WHERE user_id=$user AND exercice_id=$exercice AND perf_date=$date";

        $performance = $db -> select_sql($sql);

        echo json_encode($performance);

        
    }

}