<?php

class Encounter
{
    private $userHP = 100;
    private $userMP = 20;
    private $enemyHP = 100;
    private $echo;
    public function displayEncounter()
    {
        $this->echo = "ENCOUNTER";
        return $this->echo;
    }
    public function displayEnemy(int $mapID, int $tileID)
    {
        echo "<img class='enemySprite' src=\"img/sprite/villain" . $tileID . ".gif\">";
    }

    public function getUserHP()
    {
        return $this->userHP;
    }
    public function reduceUserHP(int $val)
    {

        $this->userHP -= $val;
        if ($this->userHP < 0)
            $this->userHP = 0;
    }
    public function reduceEnemyHP(int $val)
    {

        $this->enemyHP -= $val;
        if ($this->enemyHP < 0)
            $this->enemyHP = 0;
    }
    public function enemySkill(){

    }
}
