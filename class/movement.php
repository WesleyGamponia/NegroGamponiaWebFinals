<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
session_start();
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");

class Movement{
    private $tileID = $db->select()->from('save')->where('saveID','=',$_SESSION['currentSave'])->getAll();
   
    public function move(String $command){
        switch($command){
            case "up":

                break;
            case "down":
                break;
            case "left":
                break;
            case "right":
                break;
        }
    }
}