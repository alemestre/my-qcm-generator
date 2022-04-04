<?php

abstract class Manager {
    
    private static $pdo=NULL;

    protected function getPdoInstance()
    {
        if(self::$pdo == null)
        {
            try{

                self::$pdo = new PDO('mysql:host=localhost:3306;dbname=qcm','root','');
            }
            catch (PDOException $e)
            {
                echo 'Error : ' . $e->getMessage();
                die;
            }
        }
        return self::$pdo;
    }
}