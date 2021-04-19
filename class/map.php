<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
session_start();
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
class Maps
{
    private $mapID = 1;
    private $tileID = $db->select()->from('save')->where('saveID','=',$_SESSION['currentSave'])->getAll();
    private $echo;
    private $maxMap=2;
    public function displayMap(array $tiles)
    {
        $this->echo = "<div class='tile' style='";
        $this->echo .= "background-image: url(\"";
        $this->echo .= $tiles['imagePath'];
        $this->echo .= "\");";
        $this->echo .= "'></div>";
        return $this->echo;
    }

    public function getMapID()
    {
        return $this->mapID;
    }
    public function setMapID(int $id)
    {
        $this->mapID += $id;
        if($this->mapID==0)
            $this->mapID=1;
        if($this->mapID>$this->maxMap)
         $this->mapID=$this->maxMap;
    }

    
}
