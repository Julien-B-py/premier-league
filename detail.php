<?php

require_once './arrayTeams.php';

$teamId = $_GET["idTeam"];
foreach ($premierLeagueTeams["teams"] as $team) {
    if ($team["idTeam"] === $teamId) {

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" href="./styles.css">
            <link rel="shortcut icon" href="./favicon.ico" />
            <title>Premier League | <?= $team["strAlternate"] ?></title>
        </head>

        <body>

            <?php require_once "./components/navbar.php"; ?>
            <header>
                <img src=<?= $team["strTeamBanner"] ?> alt="">
                <div class="socials">
                    <div class="socials-container">
                        <a class="fa-brands fa-facebook-f" href="http://<?= $team["strFacebook"] ?>"></a>
                        <a class="fa-brands fa-instagram" href="http://<?= $team["strInstagram"] ?>"></a>
                        <a class="fa-brands fa-twitter" href="http://<?= $team["strTwitter"] ?>"></a>
                        <a class="fa-brands fa-youtube" href="http://<?= $team["strYoutube"] ?>"></a>
                        <a class="fa-solid fa-globe" href="http://<?= $team["strWebsite"] ?>"></a>
                        <?php if ($team["strRSS"]) { ?>
                            <a class="fa-solid fa-rss" href="<?= $team["strRSS"] ?>"></a>
                        <?php } ?>
                    </div>
                </div>
            </header>
            <main>
                <h1 class="heading-details"><?= $team["strAlternate"] ?><img src=<?= $team["strTeamBadge"] ?> alt=""></h1>

                <section>
                    <p><?= $team["strDescriptionEN"] ?></p>
                    <div class="images">

                        <img src=<?= $team["strTeamJersey"] ?> alt="">
                    </div>




                </section>

                <div class="info">
                    <div class="info-details">
                        <p>Nickname(s)<span><?= explode(",", $team["strKeywords"])[0] ?></span></p>
                        <p>Founded<span><?= $team["intFormedYear"] ?></span></p>
                        <p>Ground<span><?= $team["strStadium"] ?></span></p>
                        <p>Location<span><?= $team["strStadiumLocation"] ?></span></p>
                        <p>Capacity<span><?= $team["intStadiumCapacity"] ?></span></p>
                    </div>
                    <img src=<?= $team["strStadiumThumb"] ?> alt="">

                </div>

                <section>
                    <p><?= $team["strStadiumDescription"] ?></p>
                </section>

                <div class="slider">
                    <img class="active" src=<?= $team["strTeamFanart1"] ?> alt="">
                    <img src=<?= $team["strTeamFanart2"] ?> alt="">
                    <img src=<?= $team["strTeamFanart3"] ?> alt="">
                    <img src=<?= $team["strTeamFanart4"] ?> alt="">
                </div>

            </main>

    <?php
    }
}
    ?>

    <div class="clubs-bar responsive-container">



        <?php
        foreach ($premierLeagueTeams["teams"] as $team) {
            if ($team["idTeam"] !== $teamId) {  ?>

                <a class="clubs-bar-club" href="./detail.php?idTeam=<?= $team["idTeam"] ?>">
                    <img src=<?= $team["strTeamBadge"] ?> alt="">
                    <span><?= $team["strTeamShort"] ?></span>
                </a>

        <?php }
        }
        ?>
    </div>


    <?php require_once "./components/footer.php"; ?>

    <script src="./slider.js"></script>
        </body>

        </html>