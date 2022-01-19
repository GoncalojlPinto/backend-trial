<?php

class MysqlConnection {

    private const HOST = "127.0.0.1";
    private const USER = "testuser";
    private const PASS = "testuser";
    private const DB = "db_test";
    private const PORT = "3306";

    
    private static $connection;

    private function __construct(){
        
    }

    public static function getConnection(){
        if(self::$connection === null){
            $db = new mysqli(self::HOST, self::USER, self::PASS, self::DB, self::PORT);
            if(!$db->connect_errno){
                self::$connection = $db;
            }
        }
        return self::$connection;
    }



}