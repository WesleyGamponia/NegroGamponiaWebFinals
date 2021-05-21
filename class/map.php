<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
require_once 'class/encounter.php';

class Maps
{
    private $mapID = 1;
    private $echo;
    public function displayMap(array $tiles, int $tileID)
    {

        $this->echo = "";
        foreach ($tiles as $tile) {
            $this->echo .= "<div class='tile' style='";
            $this->echo .= "background-image: url(\"";
            $this->echo .= $tile['imagePath'];
            $this->echo .= "\");";
            $this->echo .= "'>";
            if ($tile['tileID'] == $tileID) {
                if ($tile['encounter'] == 1 && $_SESSION['fleeState'] == 0) {
                    
                    $_SESSION['encounterTile']=$tileID;
                    $_SESSION['encounterType']=rand(0,1);
                    $_SESSION['encounter'] = new Encounter();
                    header("Location:http://localhost:8000/NegroGamponiaWebFinals/encounterDisplay.php");
                }

                $this->echo .= "<img class='sprite' src=\"img/sprite/MC.png\">";
            }
            $this->echo .= "</div>";
        }
        $_SESSION['fleeState'] = 0;
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
        if ($this->mapID > 4)
            $this->mapID = 4;
    }
}
