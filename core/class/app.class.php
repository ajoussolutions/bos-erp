<?php
final class App{

    public static $appname = "BOS ERP";
    private static $applog=array();

    /**
     *Initialize Application
     */
    public static function Init(){
        self::Log('Initialize Application');
        self::PrintLog();
    }

    public static function Log($msg){
        self::$applog[]=$msg;
    }
    public static function PrintLog(){
        foreach (self::$applog as $logmsg){
            print '<br>'.$logmsg;
        }
    }

}