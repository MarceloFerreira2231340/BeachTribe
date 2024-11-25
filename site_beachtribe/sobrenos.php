<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre Nós - BeachTribe</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="website icon" type="image/apng" href="img/DarkSolo.png">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>
           
        <main class="samuel_about-container">
            <h1>Sobre Nós</h1>
            <div class="samuel_divider-small"></div>
            <h2>Bem-vindo à nossa página sobre nós</h2>
            
            <!-- Hero Section with Overlay -->
            <div class="samuel_hero-banner">
                <img src="img/pexels-jess-vide-4321501.jpg" alt="Vista aérea da praia" class="samuel_hero-banner-img">
                <div class="samuel_hero-overlay">
                    <h2>Beach Tribe</h2>
                    <p>Mais que um estilo de vida, uma comunidade</p>
                </div>
            </div>
        
            <!-- Stats Section -->
            <div class="samuel_stats-grid">
                <div class="samuel_stat-card">
                    <div class="samuel_stat-number">1000+</div>
                    <div class="samuel_stat-label">Membros na tribo</div>
                </div>
                <div class="samuel_stat-card">
                    <div class="samuel_stat-number">50+</div>
                    <div class="samuel_stat-label">Eventos anuais</div>
                </div>
                <div class="samuel_stat-card">
                    <div class="samuel_stat-number">10</div>
                    <div class="samuel_stat-label">Anos de experiência</div>
                </div>
            </div>
        
            <!-- About Text Section -->
            <div class="samuel_about-text">
                <p class="samuel_highlight-text">Na Beach Tribe, acreditamos que a praia é muito mais do que areia e mar — é um estilo de vida. 🌴</p>
                <div class="samuel_text-columns">
                    <div class="samuel_text-column">
                        <p>Somos apaixonados por criar experiências memoráveis para amantes do mar e da aventura.</p>
                    </div>
                    <div class="samuel_text-column">
                        <p>Desde os melhores equipamentos aquáticos até os acessórios perfeitos para relaxar à beira-mar, estamos aqui para ajudar-le a aproveitar cada momento ao máximo.</p>
                    </div>
                </div>
            </div>
        
            <div class="samuel_divider-large"></div>
        
            <!-- Team Section with Hover Effects -->
            <h2 class="samuel_team-title">Nossa Equipe</h2>
            <div class="samuel_team-section">
                <div class="samuel_team-member">
                    <div class="samuel_member-image">
                        <img src="path-to-joao-image.jpg" alt="João">
                        <div class="samuel_member-overlay">
                            <p>Fundador</p>
                            <p>Especialidade: Surf</p>
                        </div>
                    </div>
                    <h3>João</h3>
                </div>
                <div class="samuel_team-member">
                    <div class="member-image">
                        <img src="path-to-carolina-image.jpg" alt="Carolina">
                        <div class="member-overlay">
                            <p>Gestora de Eventos</p>
                            <p>Especialidade: SUP</p>
                        </div>
                    </div>
                    <h3>Carolina</h3>
                </div>
                <div class="samuel_team-member">
                    <div class="samuel_member-image">
                        <img src="path-to-marcelo-image.jpg" alt="Marcelo">
                        <div class="samuel_member-overlay">
                            <p>Instrutor Chefe</p>
                            <p>Especialidade: Bodyboard</p>
                        </div>
                    </div>
                    <h3>Marcelo</h3>
                </div>
                <div class="samuel_team-member">
                    <div class="samuel_member-image">
                        <img src="path-to-dinis-image.jpg" alt="Dinis">
                        <div class="samuel_member-overlay">
                            <p>Marketing</p>
                            <p>Especialidade: Kitesurf</p>
                        </div>
                    </div>
                    <h3>Dinis</h3>
                </div>
                <div class="samuel_team-member">
                    <div class="samuel_member-image">
                        <img src="path-to-enrique-image.jpg" alt="Samuel">
                        <div class="samuel_member-overlay">
                            <p>Relações Públicas</p>
                            <p>Especialidade: Windsurf</p>
                        </div>
                    </div>
                    <h3>Samuel</h3>
                </div>
            </div>
        </main>

        <?php
            require_once("footer.php");
        ?>

    </body>
</html>