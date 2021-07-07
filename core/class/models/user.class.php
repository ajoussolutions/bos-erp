<?php
require_once 'core/database/bosdatabase.class.php';
class User extends DataModel{
    public $table='user';
    public $fd_id;
    public $fd_login;
    public $fd_email;
    public $fd_firstname;
    public $fd_lastname;
}
