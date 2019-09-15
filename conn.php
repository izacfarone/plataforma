<?php

class Conn{
    public static $Host = "localhost";
    public static $User = "root";
    public static $Pass = "";
    public static $DBname = "plataforma";
    private static $Connect = null;

    private static function Conectar(){
        try {
            if (self::$Connect == null) {
                self::$Connect = new PDO('mysql:host=' . self::$Host . ';dbname=' . self::$DBname, self::$User, self::$Pass);
            }
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die;
        }
        return self::$Connect;
        
    }

    public function getConn(){
        return self::Conectar();
    }
}
