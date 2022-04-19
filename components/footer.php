<footer>

    <?php

    require_once "./functions/formatFooterYear.php";
    $year = formatFooterYear();

    ?>

    <?= "©$year," ?>
    <a href="https://github.com/Julien-B-py">
        Julien BEAUJOIN
        <i class="fab fa-github"></i>
    </a>

</footer>