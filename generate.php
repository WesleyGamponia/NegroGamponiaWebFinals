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
$db->table("tile")->addTile(1,0,0,"img/map1/map1_27.png");
$db->table("tile")->addTile(1,1,0,"img/map1/map1_28.png");
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


//INSERTTTT
// $res = $db->select()->from('students')->getAll();
// $db->table("students")->add($row);
// $db->table("students")->add($row);
// $db->table("students")->add($row);
// $db->table("students")->add($row);
// echo $db->showQuery();

// echo $db->showQuery();
//var_dump($db->select()->from('students')->getAll());

// echo "<br><br>";
// foreach ($res as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo "<br>";
// }

//UPDAAATE
// $fieldList = ["studID", "studFname", "studLname", "studCollege", "studProgram", "studYear"];
// $valueList = [2, "Dots", "Josh", 2, 2, 2];
// $db->table("students")->update($fieldList, $valueList)->where("studID", "=", 2)->getAll();
// $res = $db->select()->from("students")->getAll();
// echo $db->showQuery();
// echo "<br><br>";

// foreach ($res as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo "<br>";
// }
// $inner=$db->table("students")->select()->from("students")->innerJoin("program","studProgram")->getAll();
// $left=$db->table("students")->select()->from("students")->leftJoin("program","studProgram")->getAll();
// $right=$db->table("students")->select()->from("students")->rightJoin("program","studProgram")->getAll();
// foreach ($inner as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo $row['studProgram'];
//     echo $row['programName'];
//     echo "<br>";
// }
// foreach ($right as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo $row['programID'];
//     echo $row['programName'];
//     echo "<br>";
// }
// foreach ($left as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo $row['programID'];
//     echo $row['programName'];
//     echo "<br>";
// }
//DELEEEETE
// $db->delete()->from('students')->where('studID', '=', 1)->get();
// echo "<br><br>";
// $res = $db->select()->from("students")->getAll();
// echo $db->showQuery();
// foreach ($res as $row) {
//     echo $row['studID'];
//     echo $row['studFname'];
//     echo $row['studLname'];
//     echo $row['studCollege'];
//     echo $row['studProgram'];
//     echo $row['studYear'];
//     echo "<br>";
// }
