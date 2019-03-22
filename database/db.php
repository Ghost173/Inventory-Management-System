<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Database {
    private $con;
    public function connect (){
        include_once("constant.php");
        $this->con = new Mysqli(HOST,USER,PASS,DB);
//this connectin check if cond not working shit if you know please correct it
        // if ($this->con) {
        //     echo"connected";
        //     return $this->con;    
        // }
        // return "DATABASE_CONNECTION_FAIL";
        
    }
}
$db = new Database();
$db->connect();
?>