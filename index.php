<?php
require_once './arrayTeams.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>

<body>

    <main>

        <?php

        foreach ($premierLeagueTeams["teams"] as $team) {     ?>

            <div class="card">
                <div class="front">
                    <img src="  <?= $team["strStadiumThumb"] ?>" alt="">
                    <div class="details">
                        <h2><?= $team["strTeam"] ?></h2>
                        <p><?= $team["strStadium"] ?></p>
                        <p><?= $team["intFormedYear"] ?></p>
                    </div>
                    <div class="badge">
                        <img src="<?= $team["strTeamBadge"] ?>" alt="">
                    </div>
                </div>
                <div class="back">
                    <img src="<?= $team["strTeamJersey"]  ?>" alt="">
                    <button><a href="./detail.php?idTeam=<?= $team["idTeam"] ?>">Plus d'infos</a></button>
                </div>

            </div>

        <?php  }  ?>

    </main>

</body>

</html>