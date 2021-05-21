<?php
require_once  'class/encounter.php';
session_start();

if($_SESSION['win']==0||$_SESSION['win']==1){
    header("Location:http://localhost:8000/NegroGamponiaWebFinals/display.php");
}
if (isset($_POST['action'])) {
    $_SESSION['encounter']->userAction($_POST['action']); 
    $_SESSION['encounter']->enemyAction(); 
    
}
$bg = "\"background-image: url('img/sprite/bg" . $_SESSION['encounterTile'] . ".png');\"";
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
    <style>
        .encounter {
            width: 900;
            height: 900;
            
        }

        .user {
            width: 300;
            height: 300;
            float: left;
            margin-block-start: 580px;
        }

        .enemy {
            width: 500;
            height: 500;
            float: right;
            margin-block-start: 400px;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }

        .enemy img{
            object-position: right;
        }

    </style>
</head>

<body>


    
    <div class='mapContainer'>
        <?PHP
        echo $_SESSION['encounter']->displayEncounter($bg, $_SESSION['encounterTile'])
        ?>
    </div>
    <div class='controls'>
        
        <?php
            echo ($_SESSION['encounterType'])?"Friendly":"Hostile";
        ?>
        <div class="userstatus">
            <?php
            echo "User Health: " . $_SESSION['encounter']->getUserHP() . "/100<br>";
            echo "User Energy: " . $_SESSION['encounter']->getUserMP() . "/50";
            ?>
        </div>
        <div class="enemystatus">
            <?php
            echo "Enemy Health: " . $_SESSION['encounter']->getEnemyHP() . "/100<br>";
            ?>
        </div>
        <form action="display.php" method="post">
            <input type="submit" class="btn btn-warning" value="Flee" name="Flee">
        </form>
        <form action="encounterDisplay.php" method="post">
    </div>
    <div class='controls'>
        <div class="card-body">
            <button type="submit" name="action" class="btn btn-outline-primary btn-lg btn-block" value="physical">Physical</button>
            <button <?php if($_SESSION['encounter']->getUserMP()<15){echo "disabled";}?> type="submit" name="action" class="btn btn-outline-success btn-lg btn-block" value="skill">Skill</button>
            <button <?php if($_SESSION['encounter']->getUserMP()<10){echo "disabled";}?> type="submit" name="action" class="btn btn-outline-danger btn-lg btn-block" value="eat">Eat</button>
    </div>
    </form>

</body>

</html>