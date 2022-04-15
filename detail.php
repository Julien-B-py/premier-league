<?php
require_once './arrayTeams.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $teamId = $_GET["idTeam"];

    foreach ($premierLeagueTeams["teams"] as $team) {
        if ($team["idTeam"] === $teamId) {   ?>

            <div><?= $team["strAlternate"] ?></div>

    <?php
        }
    }
    ?>
</body>

</html>