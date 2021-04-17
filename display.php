<?php
require_once 'db/IDBFunctions.php';
require_once 'db/DBLibrary.php';
require_once 'class/map.php';
session_start();
$db = new DBLibrary("mysql:host=127.0.0.1;dbname=mapDB", "root", "");
$_SESSION['currentMap'] = new Maps();
if (isset(($_POST['nextback']))) {
    if ($_POST['nextback'] == 'next') {
        $_SESSION['currentMap']->setMapID(1);
    } elseif ($_POST['nextback'] == 'back') {
        $_SESSION['currentMap']->setMapID(-1);
    }
}

$currentMap1 = $_SESSION['currentMap'];
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
            margin: auto;
            width: 900px;
            height: 900px;
        }

        .mapContainer .tile {
            float: left;
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>

    <div class='mapContainer'>
        <?php
        $tiles = $db->select()->from('tile')->where('mapID', '=', $_SESSION['currentMap']->getMapID())->getAll();
        foreach ($tiles as $tile) {
            echo $_SESSION['currentMap']->displayMap($tile);
        }



        ?>
    </div>
    <div class="nextback">
        <form action="display.php" method="post">
            <input type="submit" name="nextback" value="back">
            <input type="submit" name="nextback" value="next">
        </form>
    </div>

</body>

</html>