<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surf - BeachTribe</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="website icon" type="image/apng" href="img/DarkSolo.png">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">

<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<!-- Core theme CSS (includes Bootstrap)-->

<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-1/assets/css/hero-1.css" />
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

<!---INICIO SITE-->

<!-- HEROE BANNER-->
<section class="bsb-hero-1 px-3 bsb-overlay bsb-hover-pull" style="background-image: url('img/surfbanner.jpg');">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-center text-white">
                <h1 class="display-3 fw-bold mb-3">SURF</h1>
            </div>
        </div>
    </div>
</section>
<!-- FIM HEROE BANNER-->

<!-- CONTAINER AULAS-->
<section class="black-bar text-center carolina_black-bar">
    <h1>AULAS DE SURF</h1>
</section>

<!-- Text Section -->
<section class="carolina_text-section">
    <p>Antes de lhe apresentarmos o funcionamento das nossas Aulas de Surf, sabia que o Surf é uma modalidade desportiva em que o praticante desliza de pé nas ondas com o auxílio de uma prancha. O primeiro relato escrito sobre o Surf foi feito pelo capitão James Cook, que observou pessoas a navegarem nas ondas, de pé, em cima de estruturas flutuantes. Desde então, até aos nossos dias, a modalidade teve um aumento exponencial de fãs e praticantes, expandindo-se a várias zonas do planeta, levando homens e mulheres, adultos e crianças, à praia durante todo o ano!<br><br>
    Agora que já sabe um pouco mais sobre o Surf, está pronto para as Aulas de Surf.</p>
</section>

<!-- Services Section -->
<section class="carolina_services-section text-center">
    <h2>AULAS DE SURF TODOS OS DIAS</h2>
    <hr class="w-50 mx-auto mb-5 border-dark-subtle">

    <p>Aqui podes encontrar todos os nossos serviços relativos à modalidade de surf</p>

    <div class="carolina_container">
        <div class="row gy-4 carolina_row_fix">
            <div class="col-md-4">
                <img src="img/surfing.png" alt="Aulas de Surf">
                <h4>Aulas de Surf</h4>
                <p>Aulas de Surf para todas as idades. Aprenda a surfar connosco, divertimento garantido!</p>
            </div>
            <div class="col-md-4">
                <img src="img/coupon.png" alt="Surf Voucher">
                <h4>Surf Voucher</h4>
                <p>Ofereça a melhor prenda de aniversário, um surf voucher.</p>
            </div>
            <div class="col-md-4">
                <img src="img/sun.png" alt="Dia de Surf">
                <h4>Dia de Surf</h4>
                <p>Um dia dedicado ao Surf, nas melhores praias de Portugal.</p>
            </div>
        </div>
        <button class="carolina_reserve-btn">Reserve já!</button>
    </div>
</section>

<!---FIM SITE-->

        <?php
            require_once("footer.php");
        ?>

    </body>
</html>