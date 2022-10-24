<?php

class AddPerformance {
 
    public static function run($user_id,$exercice_id,$lift,$reps){

        $db = Db :: singleton();   
        
        $db -> create("performance",["user_id","exercice_id","lift","reps"],[$user_id,$exercice_id,$lift,$reps]);

        $db -> update("routine",['isDone'],[1],$exercice_id,"exercice_id");

        echo ("Performance ajoutée");

        
    }

}