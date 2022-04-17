<?php

require_once './constants/arrayTeams.php';

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
            <link rel="shortcut icon" href="./images/favicon.ico" />
            <title>Premier League | <?= $team["strAlternate"] ?></title>
        </head>

        <body>


            <?php require_once "./components/loading.php";
            require_once "./components/navbar.html"; ?>
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
                <div class="responsive-container">
                    <h1 class="heading-details"><?= $team["strAlternate"] ?><img src=<?= $team["strTeamBadge"] ?> alt=""></h1>




                    <section id="history">
                        <h2>History</h2>
                        <div class="content">
                            <p><?= $team["strDescriptionEN"] ?></p>
                            <div class="images">
                                <div class="paragraphs">
                                    <p>Nickname(s)<span><?= explode(",", $team["strKeywords"])[0] ?></span></p>
                                    <p>Founded<span><?= $team["intFormedYear"] ?></span></p>
                                    <p>Official Jersey</p>
                                </div>
                                <img src=<?= $team["strTeamJersey"] ?> alt="">

                            </div>
                        </div>
                    </section>


                    <section id="stadium">
                        <h2>Stadium</h2>
                        <div class="info">
                            <div class="info-details">
                                <p>Ground<span><?= $team["strStadium"] ?></span></p>
                                <p>Location<span><?= $team["strStadiumLocation"] ?></span></p>
                                <p>Capacity<span><?= $team["intStadiumCapacity"] ?></span></p>
                            </div>
                            <img src=<?= $team["strStadiumThumb"] ?> alt="">

                        </div>

                        <div class="content">
                            <p><?= $team["strStadiumDescription"] ?></p>
                        </div>
                    </section>


                    <section id="competitions">
                        <h2>Competitions</h2>
                        <?php

                        $array_keys = array_keys($team);
                        foreach ($array_keys as $array_key) {
                            if (str_contains($array_key, 'strLeague') && $team[$array_key]) {       ?>
                                <p><?= $team[$array_key] ?></p>
                        <?php    }
                        }   ?>
                    </section>

                    <section id="gallery">
                        <h2>Gallery</h2>
                        <div class="slider">
                            <img class="first" src=<?= $team["strTeamFanart1"] ?> alt="">
                            <img src=<?= $team["strTeamFanart2"] ?> alt="">
                            <img src=<?= $team["strTeamFanart3"] ?> alt="">
                            <img src=<?= $team["strTeamFanart4"] ?> alt="">
                        </div>
                    </section>


            <?php
        }
    }
            ?>

            <section id="clubs">
                <h2>Premier League clubs</h2>
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
            </section>
                </div>
            </main>

            <?php require_once "./components/footer.php"; ?>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
            <script src="./scripts/loading.js"></script>
            <script src="./scripts/slider.js"></script>
        </body>

        </html>