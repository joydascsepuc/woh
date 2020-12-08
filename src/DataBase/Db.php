<?php

namespace Woh\DataBase;
use PDO;

class Db
{
    public static $dbHost = "localhost";
    public static $dbUser = "root";
    public static $dbPass = "";
    public static $dbName = "woh";

    public static function connect(){

        try {

            $conn = new PDO("mysql:host=".SELF::$dbHost.";dbname=".SELF::$dbName."", SELF::$dbUser, SELF::$dbPass);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $conn;

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}