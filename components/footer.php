<footer>

    <?php

    require_once "./functions/formatFooterYear.php";
    $year = formatFooterYear();

    ?>

    <?= "©$year," ?>
    <a href="https://github.com/Julien-B-py" target="_blank" rel="noopener noreferrer">
        Julien BEAUJOIN
        <i class="fab fa-github"></i>
    </a>

</footer>