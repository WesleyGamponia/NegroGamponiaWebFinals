<?php

interface IDBFunctions {
    
    public function select(array $fieldlist=null);
    public function table($table);
    public function from($table);
    public function get();
    public function getAll();
    public function where();
    public function whereOr();
    public function showQuery();
    public function showValueBag();

    //  To be Implemented
    public function addMap(array $mapName);
    public function addSave(int $mapID,int $tileID);
    public function addTile(int $mapID, int $passable, int $encounter, string $imgPath);
    public function update(array $fieldList, array $valueList);
    public function delete();
    public function innerJoin(string $t2, string $column);
    public function leftJoin(string $t2, string $column);
    public function rightJoin(string $t2, string $column);
    public function createTableMap();
    public function createTableTile();
}