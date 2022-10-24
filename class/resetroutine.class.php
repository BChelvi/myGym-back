<?php

class ResetRoutine {

    public static function run(){
       
        $db = Db :: singleton();
        
        $sql =  "SELECT * FROM routine";
        $reset = $db -> select_sql($sql);

        foreach ($reset as $exercice){
            $id=$exercice['exercice_id'];
            $db->update('routine',['isDone'],[null],$id,'exercice_id');
        }

        echo json_encode($reset);
    }

}