<?php

class Logout{

    public static function run(){
        
session_destroy();

exit;
    }
    }
?>