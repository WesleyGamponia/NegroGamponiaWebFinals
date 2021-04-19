<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';

class Maps
{
    private $mapID = 1;
    private $echo;
    private $maxMap = 2;
    public function displayMap(array $tiles, int $tileID, int $mapID)
    {
        $this->echo ="";
        foreach ($tiles as $tile) {
            $this->echo .= "<div class='tile' style='";
            $this->echo .= "background-image: url(\"";
            $this->echo .= $tile['imagePath'];
            $this->echo .= "\");";
            $this->echo .= "'>";
            if ($this->mapID == $mapID && $tile['tileID'] == $tileID) {
                $this->echo .= "<img class='sprite' src=\"img/sprite/sprite.gif\">";
            }
            $this->echo .= "</div>";
        }

        return $this->echo;
    }

    public function getMapID()
    {
        return $this->mapID;
    }
    public function setMapID(int $id)
    {
        $this->mapID += $id;
        if ($this->mapID == 0)
            $this->mapID = 1;
        if ($this->mapID > $this->maxMap)
            $this->mapID = $this->maxMap;
    }
    
}
