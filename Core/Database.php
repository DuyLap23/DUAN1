<?php

class database
{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DB_NAME = 'xth';

    public function connect()
    {
        try {
            $connect = new PDO("mysql:host=".self::HOST.";dbname=".self::DB_NAME,
                self::USERNAME, self::PASSWORD,[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            ]);
            $connect->exec("set names utf8");
            return $connect;

        } catch (PDOException $e) {
            return false;
        }
    }
}




