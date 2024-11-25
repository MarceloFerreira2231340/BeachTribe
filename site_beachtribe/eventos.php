<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - BeachTribe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=IBM%20Plex%20Mono' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="website icon" type="image/apng" href="img/DarkSolo.png">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>

    <?php
        require_once("nav.php");
    ?>

    <div class="beachTribeEvents">
        <img src="img/eventosMarcelo/mick-snap-banner.png" alt="HeroImage">
        <div class="sectionEvents">
            <div class="sectionEventsTitle">Eventos</div>
            <div class="sectionEventsText">Aqui podes encontrar eventos que irão decorrer nas praias dos nossos
                clubes!<br>Desde formações até concertos, há sempre algo interessante para participar.<br><br>Dirige-te
                à praia mais próxima ou inscreve-te online!</div>
        </div>

            <div class="sectionsEventsDisplay">
                <div class="sectionEventsCards">
                    <img src="img/eventosMarcelo/mw-1920.png" alt="Banner da Carta">
                    <div class="sectionEventsCardsInfo">
                        <div class="sectionEventsCardsTitle">Formação<br>Nadador Salvador</div>
                        <div class="sectionEventsCardsDescricao">Aprenda a salvar pessoas em situações de urgência da
                            forma correta.</div>
                        <a href="#" class="sectionEventsCardsSaberMais"><span>Saber Mais</span></a>
                    </div>
                </div>

                <div class="sectionEventsCards">
                    <img src="img/eventosMarcelo/Portugal-em-Festa.jpg" alt="Banner da Carta">
                    <div class="sectionEventsCardsInfo">
                        <div class="sectionEventsCardsTitle">Música<br>Portugal em Festa</div>
                        <div class="sectionEventsCardsDescricao">Faça parte desta experiência única no dia 29 de Junho na praia do Pedrogão.</div>
                        <a href="#" class="sectionEventsCardsSaberMais"><span>Saber Mais</span></a>
                    </div>
                </div>

                <div class="sectionEventsCards">
                    <img src="img/eventosMarcelo/LickV1BCT68Rbl8bVdOi.jpg" alt="Banner da Carta">
                    <div class="sectionEventsCardsInfo">
                        <div class="sectionEventsCardsTitle">Concerto de<br>Quim Barreiros</div>
                        <div class="sectionEventsCardsDescricao">Veja o espetáculo da estrela nacional no dia 28 de Junho na Praia da Nazaré.</div>
                        <a href="#" class="sectionEventsCardsSaberMais"><span>Saber Mais</span></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            require_once("footer.php");
        ?>

    <script src="js/highlightform.js"></script>
    <script src="js/login_animation.js"></script>
    <script src="js/dropdown_animation.js"></script>
</body>

</html>