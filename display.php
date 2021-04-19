<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
require_once 'class/map.php';
require_once 'class/movement.php';
session_start();
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$db2 = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$db3 = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
if (!isset($_SESSION['currentSave']))
    $_SESSION['currentSave'] = 1;
$_SESSION['currentMap'] = new Maps();
$_SESSION['player'] = new Movement();
if (isset(($_POST['nextback']))) {
    if ($_POST['nextback'] == 'next') {
        $_SESSION['currentMap']->setMapID(1);
    } elseif ($_POST['nextback'] == 'back') {
        $_SESSION['currentMap']->setMapID(-1);
    }
}
$location = $db2->select()->from('save')->where('saveID', '=', $_SESSION['currentSave'])->get();

$_SESSION['player']->setMapID($location['mapID']);
$_SESSION['player']->setTileID($location['tileID']);
if (isset(($_POST['movement']))) {
    $_SESSION['player']->move($_POST['movement'], $_SESSION['tiles']);
    $fieldList = ["tileID", "mapID"];
    $valueList = [$_SESSION['player']->getTileID(), $_SESSION['player']->getMapID()];
    $db3->table('save')->update($fieldList,$valueList)->where("saveID", "=", 1)->getAll();
}


?>

<html>

<head>
    <style>
        .nextback {
            width: 50%;
            height: 15%;
            float: left;
            margin: auto;
        }

        .mapContainer {
            float: left;
            margin: auto;
            width: 900px;
            height: 900px;
        }

        .controls {
            float: left;
            width: 200;
            height: 200;
            border: solid;
            margin: auto
        }

        .mapContainer .tile {
            float: left;
            width: 150px;
            height: 150px;
        }

        .sprite {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>

    <div class='mapContainer'>
        <?php

        $_SESSION['tiles'] = $db->select()->from('tile')->where('mapID', '=', $_SESSION['currentMap']->getMapID())->getAll();

        echo $_SESSION['currentMap']->displayMap($_SESSION['tiles'], $_SESSION['player']->getTileID(), $_SESSION['player']->getMapID());



        ?>
    </div>
    <div class='controls'>
        <form action="display.php" method="post">
            <input type="submit" name="movement" value="up">
            <input type="submit" name="movement" value="down">
            <input type="submit" name="movement" value="left">
            <input type="submit" name="movement" value="right">
        </form>
    </div>
    <div class="nextback">
        <form action="display.php" method="post">
            <input type="submit" name="nextback" value="back">
            <input type="submit" name="nextback" value="next">
        </form>
    </div>

</body>

</html>