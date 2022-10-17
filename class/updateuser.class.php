<?php

class UpdateUser {
 
    public static function run($user,$day,$week){
        $db = Db :: singleton();
        
        
        $db -> update("user",['actual_day','actual_week'],[$day,$week],$user, 'user_id');

        echo ("en effet");

        
    }

}