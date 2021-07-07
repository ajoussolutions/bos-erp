<?php
final class App{

    public static $appname = "BOS ERP";
    private static $applog=array();


    /**
     *Initialize Application
     */
    public static function Init(){
        self::InitConfig();
        self::Log('Initialize Application');
        self::InitDB();
        self::PrintLog();
    }

    public static function Log($msg){
        if(APP_CONFIG['debuglog']){
            self::$applog[]=$msg;
        }
    }
    public static function PrintLog(){
        foreach (self::$applog as $logmsg){
            print '<br>'.$logmsg;
        }
    }
    private static function InitConfig(){
        include_once 'core/config.php';
    }
    private static function InitDB(){
        require_once 'core/database/bosdatabase.class.php';
        BOSDB::Init();
    }

}