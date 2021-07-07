<?php

final class BOSDB{
    private static $connection;
    public static function Init(){
        self::$connection = new mysqli(
            APP_CONFIG['db_host'],
            APP_CONFIG['db_user'],
            APP_CONFIG['db_pwd'],
            APP_CONFIG['db_name'],
            APP_CONFIG['db_port']
        );
        if(self::$connection->connect_errno){
            App::Log('Databaseconnection failed:'.self::$connection->connect_error);
        }else{
            App::Log('Database initialized! Connection successful!');
        }
    }

}
class DataModel{
    public $table='';

}
class DataField{
    public $key ='id';
    public $datatype='int';
    public $unique=true;
    public $value='';
    public $default='NULL';
    public $autoincrement=true;
}
