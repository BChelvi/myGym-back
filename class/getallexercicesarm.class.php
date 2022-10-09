<?php

class Getallexercicesarm {

    public static function run(){
        $db = Db :: singleton();
        $exercices_arm = $db -> SelectAll('exercices_biceps');
        echo json_encode($exercices_arm);

        
    }
}