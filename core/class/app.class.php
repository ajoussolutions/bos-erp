<?php
final class App{

    public static $appname = "BOS ERP";
    private static $applog=array();
    /*
    Initialize the Application
    */
    public static function Init(){

    }
    /*
    Add Messages to the Applog
    */
    public static function Log($msg){
        self::$applog[]=$msg;
    }

}