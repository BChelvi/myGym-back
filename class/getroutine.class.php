<?php

class GetRoutine {
    public static function run($user,$day,$week){

        $db = Db :: singleton();
        $sql = "SELECT * FROM exercice INNER JOIN routine on (exercice.exercice_id = routine.exercice_id) INNER JOIN program on (routine.program_id = program.program_id) INNER JOIN user ON (program.program_id=user.program_id) where user.actual_day=$day AND user.user_id=$user AND user.actual_week=$week AND user.actual_day=routine.day";
        $routine = $db -> select_sql($sql);

        echo json_encode($routine);

        
    }
}
