<?php
require_once './constants/arrayTeams.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <title>Premier League | Clubs</title>
</head>

<body>

    <?php require_once "./components/loading.php";
    require_once "./components/navbar.html"; ?>



    <main>

        <div class="responsive__container">

            <h1>Clubs</h1>

            <div class="club__cards">

                <?php

                foreach ($premierLeagueTeams["teams"] as $team) {

                ?>

                    <div class="club__card">

                        <div class="club__card__front">

                            <p>Click to flip</p>

                            <img src="  <?= $team["strStadiumThumb"] ?>" alt="<?= $team["strStadium"] ?>">
                            <div class="club__card__front__details">
                                <h2><?= $team["strTeam"] ?></h2>
                                <p><?= $team["strStadium"] ?></p>
                                <p><?= $team["intFormedYear"] ?></p>
                            </div>
                            <div class="club__card__front__badge">
                                <img src="<?= $team["strTeamBadge"] ?>" alt="<?= $team["strAlternate"] ?>">
                            </div>

                        </div>

                        <div class="club__card__back">

                            <img src="<?= $team["strTeamJersey"]  ?>" alt="<?= $team["strTeam"] ?> home shirt">
                            <p><?= $team["strDescriptionEN"] ?></p>
                            <button><a href="./detail.php?idTeam=<?= $team["idTeam"] ?>">Read more</a></button>

                        </div>

                    </div>

                <?php  }  ?>

            </div>

        </div>

    </main>

    <?php
    require_once "./components/scrolltop.html";
    require_once "./components/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
    <script src="./scripts/loading.js"></script>
    <script src="./scripts/cards.js"></script>
    <script src="./scripts/scrollTop.js"></script>

</body>

</html>