<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';


class Movement
{
    private $mapID;
    private $tileID;
    private $minus;
    private $holder;
    public function move(String $command, array $tiles)
    {
        $this->minus = ($tiles[0]['mapID'] - 1) * 36;
        switch ($command) {
            case "up":
                $this->holder = $this->tileID - $this->minus - 6;
                if ($this->holder  > 0 && $tiles[$this->holder - 1]['passable'] == 1) {

                    $_SESSION['player']->moveTileID(-6);
                }
                break;
            case "down":
                $this->holder = $this->tileID - $this->minus + 6;
                if ($this->holder < 36 && $tiles[$this->holder - 1]['passable'] == 1) {

                    $_SESSION['player']->moveTileID(6);
                }
                break;
            case "left":
                $this->holder = $this->tileID - $this->minus - 1;
                if ($this->holder % 6 != 0 && $tiles[$this->holder - 1]['passable'] == 1) {

                    $_SESSION['player']->moveTileID(-1);
                }
                break;
            case "right":
                $this->holder = $this->tileID - $this->minus + 1;

                if ($this->holder < 37){
                    if ($this->holder - 1 % 6 != 0 && $tiles[$this->holder - 1]['passable'] == 1) {
                        $_SESSION['player']->moveTileID(1);
                    }
                }
                else {
                    switch ($_SESSION['player']->getMapID()){
                        case 1: 
                            $_SESSION['player']->setMapID(2);
                            $_SESSION['player']->setTileID(43);
                            $_SESSION['currentMap']->setMapID(2);
                        break;
                    }

                }
                break;
        }
    }
    public function setMapID(int $mapID)
    {
        $this->mapID = $mapID;
    }
    public function getMapID()
    {
        return $this->mapID;
    }
    public function setTileID(int $tileID)
    {

        $this->tileID = $tileID;
    }
    public function moveTileID(int $tileID)
    {
        $this->tileID += $tileID;
    }
    public function getTileID()
    {
        return $this->tileID;
    }
}
