<?php

class Encounter
{
    private $userHP = 100;
    private $userMP = 50;
    private $enemyHP = 100;
    private $echo;
    public function displayFriendlyEncounter(String $bg, int $encounterTile)
    {
        $this->echo = "";
        $this->echo.="<div class='encounter' style=$bg>";
        $this->echo.="<div class='User'>";
        $this->echo.="<img src='img/sprite/MC.png'>";
        $this->echo.="</div>";
        $this->echo.="<div class='enemy'>";
        $this->echo.="<img src='img/sprite/villain";
        $this->echo.=strval($encounterTile);
        $this->echo.=".png'>";
        $this->echo.="</div>";
        $this->echo.="</div>";

        return $this->echo;
    }
    


    public function displayEnemy(int $mapID, int $tileID)
    {
        echo "<img class='enemySprite' src=\"img/sprite/villain" . $tileID . ".png\">";
    }

    public function getUserHP()
    {
        return $this->userHP;
    }
    public function getEnemyHP()
    {
        return $this->enemyHP;
    }
    public function getUserMP()
    {
        return $this->userMP;
    }
         
    public function reduceEnemyHP(int $val)
    {

        $this->enemyHP -= $val;
        if ($this->enemyHP < 0)
            $this->enemyHP = 0;
    }
    public function userAction(String $val)
    {
        switch ($val) {
            case "physical":
                $this->enemyHP -= 10;
                break;
            case "skill":
                $this->enemyHP -= 20;
                $this->userMP -= 15;
                break;
            case "eat":
                $this->userHP += 20;
                $this->userMP -= 10;
                break;
        }

    }
    public function enemyAction()
    {
        switch (rand(1,3)) {
            case 1:
                $this->userMP -= 10;
                break;
            case 2:
                $this->userHP -= 15;
                break;
            case 3:
                $this->userHP -= 10;
                $this->userMP -= 5;
                break;
        }
    }
}
