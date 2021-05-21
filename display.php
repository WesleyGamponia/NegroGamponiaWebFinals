<?php
require_once 'init.php';
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
require_once 'class/map.php';
require_once 'class/movement.php';
session_start();
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$db2 = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$db3 = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$db4 = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");

$_SESSION['encounterTile'] = 15;
$_SESSION['currentSave'] = 1;
if (!isset($_SESSION['fleeState']))
    $_SESSION['fleeState'] = 0;

if (!isset($_SESSION['currentMap']))
    $_SESSION['currentMap'] = new Maps();
if (!isset($_SESSION['player']))
    $_SESSION['player'] = new Movement();
if (isset(($_POST['nextback']))) {
    if ($_POST['nextback'] == 'next') {
        $_SESSION['currentMap']->setMapID(1);
    } elseif ($_POST['nextback'] == 'back') {
        $_SESSION['currentMap']->setMapID(-1);
    }
}
if ($_SESSION['win'] == 0 && $_SESSION['encounterType'] == 1) {
    $fieldList = ["lives"];
    $valueList = [$_SESSION['location']['lives'] - 1];
    $db4->table('save')->update($fieldList, $valueList)->where("saveID", "=", $_SESSION['currentSave'])->getAll();
}

if ($_SESSION['win'] == 1) {
    $fieldList = ["money"];
    $reward = $_SESSION['encounterType'] ? 100 : 150;
    $valueList = [$_SESSION['location']['money'] + $reward];
    $db4->table('save')->update($fieldList, $valueList)->where("saveID", "=", $_SESSION['currentSave'])->getAll();
}
if (isset($_SESSION['movedmap'])) {
    if ($_SESSION['movedmap'] == 1) {
        $fieldList = ["money", "lives"];
        $valueList = [$_SESSION['location']['money'] - 300, 5];
        $db4->table('save')->update($fieldList, $valueList)->where("saveID", "=", $_SESSION['currentSave'])->getAll();
        $_SESSION['movedmap'] = 0;
    }
}
if (isset($_POST['Flee']))
    $_SESSION['fleeState'] = 1;


$_SESSION['location'] = $db2->select()->from('save')->where('saveID', '=', $_SESSION['currentSave'])->get();

$_SESSION['win'] = 2;
$_SESSION['player']->setMapID($_SESSION['location']['mapID']);
$_SESSION['player']->setTileID($_SESSION['location']['tileID']);
if (isset(($_POST['movement']))) {
    $_SESSION['player']->move($_POST['movement'], $_SESSION['tiles']);
    $fieldList = ["tileID", "mapID"];
    $valueList = [$_SESSION['player']->getTileID(), $_SESSION['player']->getMapID()];
    $db3->table('save')->update($fieldList, $valueList)->where("saveID", "=", $_SESSION['currentSave'])->getAll();
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Play</title>

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet" media="all">
</head>

<body>

    <div class='mapContainer'>
        <?php

        $_SESSION['tiles'] = $db->select()->from('tile')->where('mapID', '=', $_SESSION['currentMap']->getMapID())->getAll();

        echo $_SESSION['currentMap']->displayMap($_SESSION['tiles'], $_SESSION['player']->getTileID());
        ?>
    </div>
    <div>
        <?php
        echo "Lives: " . $_SESSION['location']['lives'];
        echo "<br>Money: " . $_SESSION['location']['money'];
        ?>
    </div>
    <div class='controls'>
        <h2>CONTROLS</h2>
        <form action="display.php" method="post">
            <div class="card-body">
                <button type="submit" name="movement" class="btn btn-outline-primary btn-lg btn-block" value="up">Up</button>
                <button type="submit" name="movement" class="btn btn-outline-success btn-lg btn-block" value="left">Left</button>
                <button type="submit" name="movement" class="btn btn-outline-danger btn-lg btn-block" value="right">Right</button>
                <button type="submit" name="movement" class="btn btn-outline-secondary btn-lg btn-block" value="down">Down</button>
        </form>
    </div>
    <div class="nextback">
        <form action="display.php" method="post">
            <div class="card-body">
                <input type="submit" class="btn btn-warning" name="nextback" value="back">
                <input type="submit" class="btn btn-info" name="nextback" value="next">
            </div>
        </form>
    </div>

</body>

</html>