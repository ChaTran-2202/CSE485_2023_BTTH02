<?php

class DbConnection
{
    private static $conn = null;

    public static function getConnection()
    {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
                self::$conn->exec("SET NAMES 'utf8'");
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), $e->getCode());
            }
        }
        return self::$conn;
    }
}