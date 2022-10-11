<?php

class AddPerformance {
 
    public static function run($user_id,$exercice_id,$lift,$reps,$series){
        $db = Db :: singleton();
        
        
        $db -> create("performance",["user_id","exercice_id","lift","reps","series"],[$user_id,$exercice_id,$lift,$reps,$series]);

        echo ("Performance ajoutée");

        
    }

}