<?php
final class App{

    public static $appname = "BOS ERP";
    private static $applog=array();

    /**
     *Initialize Application
     */
    public static function Init(){

    }

    public static function Log($msg){
        self::$applog[]=$msg;
    }

}