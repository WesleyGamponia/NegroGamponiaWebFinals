<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");

$db->createTableMap();
$db->createTableTile();

$map1 = ["Map 1"];
$map2 = ["Map 2"];
$db->table("map")->addMap($map1);
$db->table("map")->addMap($map2);

$db->table("save")->addSave(1,1,0,100);
//MAP 1 TILES
//ROW 1
$db->table("tile")->addTile(1,1,0,"img/map1/map1_01.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_02.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_03.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_04.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_05.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_06.png");

//ROW 2
$db->table("tile")->addTile(1,0,0,"img/map1/map1_07.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_08.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_09.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_10.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_11.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_12.png");

//ROW 3
$db->table("tile")->addTile(1,0,0,"img/map1/map1_13.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_14.png");
$db->table("tile")->addTile(1,1,1,"img/map1/map1_15.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_16.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_17.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_18.png");

//ROW 4
$db->table("tile")->addTile(1,0,0,"img/map1/map1_19.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_20.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_21.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_22.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_23.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_24.png");

//ROW 5
$db->table("tile")->addTile(1,0,0,"img/map1/map1_25.png");
$db->table("tile")->addTile(1,1,1,"img/map1/map1_26.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_27.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_28.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_29.png");
$db->table("tile")->addTile(1,0,0,"img/map1/map1_30.png");

//ROW 6
$db->table("tile")->addTile(1,0,0,"img/map1/map1_31.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_32.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_33.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_34.png");
$db->table("tile")->addTile(1,1,1,"img/map1/map1_35.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_36.png");
//MAP 1 TILES

//MAP 2 TILES
//ROW 1
$db->table("tile")->addTile(2,0,0,"img/map2/map2_01.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_02.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_03.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_04.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_05.png");
$db->table("tile")->addTile(2,1,1,"img/map2/map2_06.png");

//ROW 2
$db->table("tile")->addTile(2,1,0,"img/map2/map2_07.png");
$db->table("tile")->addTile(2,1,1,"img/map2/map2_08.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_09.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_10.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_11.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_12.png");

//ROW 3
$db->table("tile")->addTile(2,0,0,"img/map2/map2_13.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_14.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_15.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_16.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_17.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_18.png");

//ROW 4
$db->table("tile")->addTile(2,1,0,"img/map2/map2_19.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_20.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_21.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_22.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_23.png");
$db->table("tile")->addTile(2,1,1,"img/map2/map2_24.png");

//ROW 5
$db->table("tile")->addTile(2,1,1,"img/map2/map2_25.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_26.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_27.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_28.png");
$db->table("tile")->addTile(2,0,0,"img/map2/map2_29.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_30.png");

//ROW 6
$db->table("tile")->addTile(2,1,0,"img/map2/map2_31.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_32.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_33.png");
$db->table("tile")->addTile(2,1,1,"img/map2/map2_34.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_35.png");
$db->table("tile")->addTile(2,1,0,"img/map2/map2_36.png");
//MAP 2 TILES

//MAP 3 TILES
//ROW 1
$db->table("tile")->addTile(3,0,0,"img/map3/map3_01.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_02.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_03.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_04.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_05.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_06.png");

//ROW 2
$db->table("tile")->addTile(3,1,0,"img/map3/map3_07.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_08.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_09.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_10.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_11.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_12.png");

//ROW 3
$db->table("tile")->addTile(3,1,0,"img/map3/map3_13.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_14.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_15.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_16.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_17.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_18.png");

//ROW 4
$db->table("tile")->addTile(3,1,0,"img/map3/map3_19.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_20.png");
$db->table("tile")->addTile(3,1,1,"img/map3/map3_21.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_22.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_23.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_24.png");

//ROW 5
$db->table("tile")->addTile(3,1,1,"img/map3/map3_25.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_26.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_27.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_28.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_29.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_30.png");

//ROW 6
$db->table("tile")->addTile(3,1,0,"img/map3/map3_31.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_32.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_33.png");
$db->table("tile")->addTile(3,0,0,"img/map3/map3_34.png");
$db->table("tile")->addTile(3,1,1,"img/map3/map3_35.png");
$db->table("tile")->addTile(3,1,0,"img/map3/map3_36.png");
//MAP 3 TILES

//MAP 4 TILES
//ROW 1
$db->table("tile")->addTile(4,0,0,"img/map4/map4_01.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_02.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_03.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_04.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_05.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_06.png");

//ROW 2
$db->table("tile")->addTile(4,1,0,"img/map4/map4_07.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_08.png");
$db->table("tile")->addTile(4,1,1,"img/map4/map4_09.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_10.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_11.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_12.png");

//ROW 3
$db->table("tile")->addTile(4,1,0,"img/map4/map4_13.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_14.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_15.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_16.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_17.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_18.png");

//ROW 4
$db->table("tile")->addTile(4,1,0,"img/map4/map4_19.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_20.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_21.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_22.png");
$db->table("tile")->addTile(4,1,1,"img/map4/map4_23.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_24.png");

//ROW 5
$db->table("tile")->addTile(4,0,0,"img/map4/map4_25.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_26.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_27.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_28.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_29.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_30.png");

//ROW 6
$db->table("tile")->addTile(4,1,0,"img/map4/map4_31.png");
$db->table("tile")->addTile(4,1,1,"img/map4/map4_32.png");
$db->table("tile")->addTile(4,0,0,"img/map4/map4_33.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_34.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_35.png");
$db->table("tile")->addTile(4,1,0,"img/map4/map4_36.png");
//MAP 4 TILES