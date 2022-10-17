<?php

class GetMyExerice {

    public static function run($user_id,$exercice_id){
        $db = Db :: singleton();
        $sql = "SELECT * FROM exercice INNER JOIN performance ON (exercice.exercice_id=performance.exercice_id) WHERE performance.user_id=$user_id AND exercice.exercice_id=$exercice_id ORDER BY performance.perf_date DESC";
        $myexercice = $db -> select_sql($sql);
    

        if(!$myexercice){
          
            $sql2 =  "SELECT * FROM exercice WHERE exercice.exercice_id=$exercice_id";
            $myexercice2 = $db -> select_sql($sql2);

            $myexercice2['lift']="0,0,0,0,0,0";
            $myexercice2['user_id']=$user_id;
            $myexercice2['reps']="0,0,0,0,0,0";
           

            echo json_encode($myexercice2);
            
        }

        else {
        echo json_encode($myexercice);
        }
        
    }

}