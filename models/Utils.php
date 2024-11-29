<?php

namespace Models;
use Exception;

class Utils{

    public static function launchException(string $message){
        throw new Exception($message);
    }

    public static function readException(Exception $e){
        die("Erreur :". $e->getMessage());
    }
}