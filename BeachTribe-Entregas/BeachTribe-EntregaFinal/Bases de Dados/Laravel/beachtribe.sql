-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2025 at 05:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beachtribe`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Marcelo', 'marcelo.png', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'João', 'joao.png', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'Carolina', 'carolina.png', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'Dinis', 'dinis.png', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(5, 'Samuel', 'samuel.png', '2025-01-28 17:16:21', '2025-01-28 17:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint UNSIGNED NOT NULL,
  `type` enum('A','M','B') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('A','H') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `location` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `bgtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `duration` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `type`, `title`, `state`, `location`, `date`, `bgtime`, `endtime`, `price`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Aula de Surf - Iniciação', 'A', 'Praia S. Pedro de Moel', '2024-06-15', '08:00', '10:00', '30.00', 2, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'M', 'Aula de Surf - Intermediário', 'A', 'Praia de Carcavelos', '2024-06-20', '10:00', '13:00', '45.50', 3, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'B', 'Aula de Surf - Avançado', 'A', 'Praia do Guincho', '2025-06-25', '09:30', '11:30', '50.00', 2, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'A', 'Aula de Surf - Iniciação', 'H', 'Praia de Santa Cruz', '2025-07-10', '07:00', '09:00', '25.00', 2, '2025-01-23 17:16:21', '2025-01-23 17:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `class_subscriptions`
--

CREATE TABLE `class_subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `classes_id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(360) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Formações','Festivais') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Festivais',
  `state` enum('ativado','desativado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'desativado',
  `local` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '2025-01-01 19:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `description`, `type`, `state`, `local`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Quim Barreiros dá à Costa!', 'quimbarreiros.png', 'A Praia da Rocha, um dos destinos mais icónicos do Algarve, prepara-se para receber uma das maiores celebrações da música popular portuguesa com o Festival de Quim Barreiros. Este evento, aberto ao público e gratuito, promete uma noite repleta de diversão, energia e nostalgia, ao som de um dos artistas mais carismáticos e queridos do país.\n\nMarcado para o próximo verão, o festival será realizado num palco montado ao ar livre, com o mar e o pôr do sol como pano de fundo. A escolha da Praia da Rocha para este espetáculo não é por acaso: conhecida pela sua vasta extensão de areia dourada e pela animação que atrai turistas de todo o mundo, a praia oferece o cenário ideal para uma festa que une tradição e modernidade.\n\nQuim Barreiros, verdadeiro ícone da música popular portuguesa, dispensa apresentações. Com décadas de carreira e uma vasta discografia, é conhecido pelas suas canções bem-humoradas e ritmos contagiantes que atravessam gerações. Sucessos como A Garagem da Vizinha, Bacalhau à Portuguesa e A Cabritinha não faltarão no repertório, garantindo que o público cante e dance do início ao fim.\n\n“O Festival de Quim Barreiros não é apenas um concerto, mas uma celebração da cultura portuguesa e da alegria que une pessoas de todas as idades. Estamos a preparar uma noite inesquecível para os fãs e para todos os que queiram juntar-se a esta grande festa”, afirma António Santos, organizador do evento.\n\nAlém do espetáculo principal com Quim Barreiros, o festival contará com várias atividades complementares ao longo do dia. Haverá bancas de comida típica portuguesa, onde os visitantes poderão saborear petiscos regionais, como chouriços assados, bifanas e o tradicional pão com chouriço. Haverá ainda uma área de animação infantil, com jogos e atividades para os mais pequenos, tornando o evento ideal para toda a família.\n\nPara os fãs de dança, o festival terá uma área reservada para um baile popular, onde os ritmos tradicionais portugueses irão animar a noite antes e depois do concerto principal. Também serão realizadas atuações de grupos folclóricos locais, que irão mostrar o melhor das tradições do Algarve e de outras regiões do país, enriquecendo ainda mais a experiência cultural do evento.\n\nA organização do festival espera milhares de pessoas na Praia da Rocha, e, para garantir o conforto de todos, estão a ser criadas várias infraestruturas temporárias, como casas de banho portáteis, áreas de descanso e postos de apoio médico. Recomenda-se que os participantes cheguem cedo para garantir um bom lugar e aproveitem ao máximo tudo o que o festival tem para oferecer.\n\nO Festival de Quim Barreiros é uma oportunidade imperdível para quem procura uma noite diferente, cheia de música, diversão e tradição, num dos locais mais deslumbrantes do Algarve. Quer seja fã de longa data do artista ou apenas alguém à procura de um evento animado, este festival promete momentos de pura alegria e celebração à beira-mar.\n\nMarque já na sua agenda: Praia da Rocha, 28 de junho, a partir das 18h00. Traga a família, os amigos e a boa disposição, e prepare-se para uma festa memorável ao som de Quim Barreiros, numa noite que ficará gravada na memória de todos os presentes.', 'Festivais', 'ativado', 'Praia da Rocha', '2024-06-28 18:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'Surf por Carcavelos', 'aulassurf.png', 'A Praia de Carcavelos, conhecida por ser um dos locais mais emblemáticos para a prática de surf em Portugal, irá receber no próximo verão uma formação de surf especialmente destinada a iniciantes. Este curso surge como uma oportunidade única para todos aqueles que sonham em deslizar pelas ondas e mergulhar no mundo do surf, um desporto que combina adrenalina, conexão com a natureza e momentos inesquecíveis.\n\nA formação, organizada por uma equipa de instrutores certificados e com anos de experiência, foi desenhada para proporcionar aos participantes uma introdução segura e eficaz ao universo do surf. “Queremos que todos, independentemente da idade ou da experiência, sintam que podem aprender e divertir-se nas ondas. A nossa missão é criar um ambiente de aprendizagem descontraído, mas sempre focado na segurança e no progresso individual”, afirma Catarina Alves, coordenadora do projeto.\n\nO curso será dividido em várias etapas práticas e teóricas, garantindo que os participantes não apenas aprendam a técnica, mas também compreendam os fundamentos do surf. Numa primeira fase, os alunos irão participar numa sessão teórica, onde serão apresentados os princípios básicos, como a leitura das condições do mar, o comportamento das marés, as regras de segurança e o manuseio adequado da prancha. Em seguida, a ação muda para a areia, onde os instrutores ensinarão a postura correta, técnicas de remada e o movimento para se levantar na prancha.\n\nA parte mais emocionante da formação, claro, acontece nas ondas. Sob a supervisão dos instrutores, os iniciantes terão a oportunidade de praticar em águas controladas e com condições ideais para aprender. Cada aluno será acompanhado de perto, garantindo um ambiente de aprendizagem seguro e personalizado. Além disso, os instrutores darão feedback constante para que os participantes possam evoluir e ganhar confiança na prática.\n\nPara muitos, a Praia de Carcavelos representa o cenário perfeito para dar os primeiros passos no surf. Localizada a poucos minutos de Lisboa, a praia destaca-se pelas suas ondas consistentes e pela extensão de areia que oferece espaço para todos os tipos de atividades. A sua infraestrutura moderna, com acesso a balneários, cafés e estacionamento, também a torna ideal para eventos e formações desta natureza.\n\nO curso destina-se a pessoas a partir dos 10 anos e não requer experiência prévia. Todo o equipamento necessário será disponibilizado pela organização, incluindo pranchas e fatos adequados às condições do mar e da temperatura. Os participantes são apenas aconselhados a trazer roupa confortável, protetor solar e muita vontade de aprender.\n\nAs inscrições já estão abertas e podem ser feitas online no site oficial da organização ou diretamente no centro de apoio localizado na Praia de Carcavelos. Os lugares são limitados, pelo que os organizadores recomendam que os interessados reservem a sua vaga o mais rapidamente possível.\n\nSe procura uma atividade que combina diversão, aprendizagem e um estilo de vida saudável, esta formação de surf na Praia de Carcavelos é a oportunidade ideal. Seja para quem quer começar a aventura no mundo do surf ou apenas explorar uma nova habilidade, esta experiência promete momentos únicos no coração de uma das praias mais icónicas de Portugal.', 'Formações', 'ativado', 'Praia de Carcavelos', '2024-07-10 09:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'Cinema às ondas do Mar', 'festival_cinema.jpg', 'A Praia de São Rafael, um dos destinos mais deslumbrantes da costa algarvia, será o cenário perfeito para uma experiência cinematográfica única: o Festival de Cinema ao Ar Livre. Este evento especial, aberto ao público e totalmente gratuito, promete combinar a magia do cinema com a beleza natural de uma das praias mais icónicas de Portugal.\n\nCom o objetivo de proporcionar uma experiência inesquecível para cinéfilos e amantes da natureza, o festival terá lugar ao longo de uma noite mágica, onde o som das ondas do mar e a brisa suave da praia servirão de pano de fundo para a projeção de filmes selecionados especialmente para este evento. O cenário é enriquecido pelas falésias douradas e águas cristalinas que tornam a Praia de São Rafael um local único e inspirador.\n\nA programação do festival inclui uma seleção diversificada de filmes, abrangendo géneros como drama, comédia, aventura e documentário, com o objetivo de agradar a um público de todas as idades. Destaque para a exibição de clássicos do cinema, que prometem trazer nostalgia aos mais velhos, e produções contemporâneas que irão cativar os mais jovens. Antes da projeção principal, o público será surpreendido com curtas-metragens de realizadores emergentes, celebrando o talento nacional e internacional.\n\n“Queremos que o Festival de Cinema na Praia de São Rafael seja muito mais do que uma simples exibição de filmes. É uma oportunidade de unir pessoas, promover a cultura cinematográfica e desfrutar de uma experiência única, onde o cinema e a natureza se encontram de forma harmoniosa”, explica Ana Martins, uma das organizadoras do evento.\n\nAlém da projeção dos filmes, o festival contará com uma série de atividades complementares ao longo do dia. Para os amantes da sétima arte, haverá workshops e palestras conduzidas por realizadores e especialistas do setor, abordando temas como direção, fotografia e guionismo. Para os mais pequenos, haverá uma área dedicada com atividades lúdicas relacionadas com o cinema, incluindo sessões de desenhos animados e oficinas de criação de stop-motion.\n\nA zona do evento será equipada com um espaço de food trucks, onde os visitantes poderão desfrutar de petiscos locais e snacks ideais para acompanhar a experiência cinematográfica, como pipocas e bebidas refrescantes. Para maior conforto, a organização irá disponibilizar almofadas e mantas para que os participantes possam relaxar e apreciar os filmes com toda a comodidade. Recomenda-se, no entanto, que os participantes tragam agasalhos para as horas mais frescas da noite.\n\nA organização espera atrair centenas de pessoas ao evento, e foram implementadas medidas para garantir o conforto e segurança de todos os participantes, incluindo áreas delimitadas para famílias, casas de banho portáteis e assistência médica no local. Para facilitar o acesso à praia, serão criados estacionamentos temporários e haverá transporte gratuito a partir de pontos estratégicos em Albufeira.\n\nO Festival de Cinema ao Ar Livre na Praia de São Rafael é um convite para todos aqueles que desejam desfrutar de uma noite especial, celebrando a arte do cinema num dos cenários mais encantadores do Algarve. Quer seja um amante de filmes ou apenas alguém que procura uma experiência diferente e memorável, este evento promete momentos de pura magia e descontração sob as estrelas.\n\nMarque já na sua agenda: Praia de São Rafael, 20 de Agosto, a partir das 21h00. Traga a família, amigos ou aquela pessoa especial, e deixe-se envolver pela magia do cinema num dos locais mais bonitos de Portugal. Uma experiência imperdível para todos os sentidos!', 'Festivais', 'ativado', 'Praia de São Rafael', '2024-08-20 21:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'Esticar e Alongar, Yoga pela praia', 'formacao_yoga.jpg', 'A Praia da Marinha, considerada uma das mais belas praias de Portugal e do mundo, será o cenário perfeito para uma nova formação de yoga, aberta a todos aqueles que desejam mergulhar numa experiência de bem-estar, relaxamento e autoconhecimento. Este evento especial promete combinar a serenidade do mar com os benefícios comprovados da prática de yoga, criando uma oportunidade única de conexão com a natureza e com o próprio corpo.\n\nCom início previsto para o próximo mês, a formação destina-se a todos os níveis de prática, desde iniciantes que nunca experimentaram yoga até praticantes mais experientes que procuram aprofundar os seus conhecimentos. A iniciativa é conduzida por uma equipa de instrutores qualificados e apaixonados, liderada pela renomada professora de yoga Marta Soares, conhecida pela sua abordagem holística e sensível às necessidades de cada participante.\n\n“Escolhemos a Praia da Marinha por ser um local que inspira tranquilidade e beleza natural. O som das ondas, a brisa do mar e a vista deslumbrante das falésias criam o ambiente perfeito para uma prática transformadora. O nosso objetivo é que cada pessoa, independentemente da sua experiência, possa sentir os benefícios do yoga e sair deste encontro mais equilibrada e revigorada”, afirma Marta Soares.\n\nO programa da formação será diversificado e adaptado ao público, começando com uma sessão de boas-vindas ao amanhecer, quando o sol nasce no horizonte e ilumina suavemente a paisagem. Durante a manhã, os participantes serão guiados através de práticas de yoga suave e exercícios de respiração (pranayama), desenhados para aliviar o stress, melhorar a flexibilidade e fortalecer o corpo e a mente. Seguem-se momentos de meditação guiada, que irão ajudar os participantes a encontrar um estado de calma interior e foco mental.\n\nAo longo do dia, haverá também sessões especiais focadas em diferentes estilos de yoga, como Hatha, Vinyasa e Yin Yoga, permitindo aos participantes explorar várias abordagens e escolher a que mais ressoa com o seu perfil. Para além das práticas, os participantes terão a oportunidade de participar em pequenas palestras e conversas inspiradoras sobre temas como alimentação saudável, mindfulness e técnicas para integrar o yoga no dia-a-dia.\n\nO evento está aberto a todos os que desejarem participar, não havendo qualquer requisito de idade ou experiência prévia. Todo o material necessário, incluindo tapetes de yoga e almofadas de meditação, será disponibilizado pela organização. Os participantes são apenas aconselhados a trazer roupa confortável, protetor solar e muita vontade de relaxar e aproveitar a experiência.\n\nA Praia da Marinha, com as suas águas cristalinas, areias douradas e falésias de cortar a respiração, oferece um ambiente único para esta formação. Este local icónico do Algarve é frequentemente apontado como um dos destinos mais belos e preservados da região, sendo o refúgio perfeito para quem procura escapar da rotina e reconectar-se com a natureza.\n\nAs inscrições para a formação já estão abertas e podem ser feitas online no site oficial do evento ou presencialmente no ponto de apoio instalado na Praia da Marinha. Com vagas limitadas, os organizadores incentivam os interessados a garantir a sua participação o mais cedo possível.\n\nQuer procure um momento de paz interior, uma nova forma de exercício ou simplesmente um dia diferente num dos locais mais bonitos do Algarve, esta formação de yoga promete ser uma experiência inesquecível. Abra as portas a um dia de harmonia, equilíbrio e inspiração no coração da natureza.', 'Formações', 'ativado', 'Praia da Marinha', '2024-09-05 08:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(5, 'Sal não falta na praia, mas no prato está excelente!', 'festival_gastronomia.jpg', 'A Praia do Guincho, conhecida pelas suas paisagens deslumbrantes e pela ligação à natureza, será o palco do Festival de Gastronomia, um evento especial que celebra os sabores e tradições culinárias de Portugal. Aberto ao público e com entrada gratuita, este festival promete atrair visitantes de todo o país, proporcionando uma experiência sensorial única, onde a gastronomia portuguesa será a grande protagonista.\n\nDurante dois dias, a praia será transformada num autêntico mercado gastronómico à beira-mar, reunindo chefs renomados, produtores locais e entusiastas da cozinha tradicional. O festival tem como objetivo destacar a riqueza e a diversidade da culinária portuguesa, oferecendo aos visitantes a oportunidade de saborear pratos típicos de várias regiões do país, preparados com ingredientes frescos e de alta qualidade.\n\n“O Festival de Gastronomia no Guincho é uma homenagem àquilo que nos define enquanto povo: o amor pela comida e pela partilha. Queremos que as pessoas venham, descubram novos sabores e se deixem levar pela experiência única de provar a nossa gastronomia num local tão especial como este”, afirma Maria Antunes, coordenadora do evento.\n\nA programação do festival inclui uma variedade de experiências para todos os gostos. Entre os destaques, estão demonstrações de cozinha ao vivo, onde chefs conceituados irão preparar pratos icónicos, como o bacalhau à brás, arroz de marisco, cataplana algarvia, leitão assado, entre outros. O público terá a oportunidade de aprender técnicas e segredos diretamente dos especialistas, enquanto aprecia o aroma e o sabor dos pratos acabados de confecionar.\n\nPara os amantes de doces, o festival contará com uma zona dedicada às sobremesas e pastelaria tradicional portuguesa, incluindo pastéis de nata, travesseiros de Sintra, ovos moles de Aveiro e o famoso bolo de mel da Madeira. Não faltarão também opções para os apreciadores de vinhos e licores, com uma seleção de bebidas de várias regiões do país, desde os vinhos verdes do Minho até aos intensos vinhos do Alentejo e Douro.\n\nAlém da componente gastronómica, o festival oferecerá um ambiente animado e familiar, com música ao vivo, dança e performances artísticas. Grupos de música tradicional portuguesa, como ranchos folclóricos e fadistas, irão atuar ao longo do dia, proporcionando uma banda sonora perfeita para o evento. Para os mais pequenos, haverá uma área de diversão com atividades lúdicas e oficinas interativas, como a criação de pratos simples com ingredientes frescos.\n\nO local do festival, a Praia do Guincho, foi escolhido pela sua beleza natural e pelo simbolismo que carrega enquanto destino de eleição para amantes da natureza e da boa vida. Com o oceano Atlântico como pano de fundo e as dunas que rodeiam a praia, o cenário é simplesmente idílico para este encontro de sabores e tradições.\n\nA organização do festival espera um grande afluxo de visitantes, pelo que estão a ser criadas infraestruturas temporárias para garantir o conforto de todos, incluindo zonas de descanso, casas de banho portáteis e estacionamentos próximos. Recomenda-se que os participantes tragam roupa confortável e protetor solar, para que possam desfrutar do evento ao máximo.\n\nO Festival de Gastronomia na Praia do Guincho é mais do que um evento: é uma celebração da identidade portuguesa, dos seus sabores únicos e da sua capacidade de unir pessoas em torno da mesa. Uma experiência imperdível para quem ama boa comida, boa música e momentos inesquecíveis em família ou entre amigos.\n\nGuarde a data: Praia do Guincho, 12 de outubro, a partir das 12h00. Venha com apetite e boa disposição e prepare-se para descobrir o melhor da gastronomia portuguesa num cenário de tirar o fôlego. Uma festa para os sentidos, onde cada prato conta uma história e cada momento se torna uma memória especial!', 'Festivais', 'ativado', 'Praia do Guincho', '2024-10-12 12:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(6, 'Construções de areia, animação verdadeira!', 'construcao_areia.jpg', 'A Praia da Vieira, uma das mais acolhedoras e icónicas da região centro de Portugal, prepara-se para receber o tão aguardado Festival de Construções de Areia, um evento aberto ao público e pensado para todas as idades. Este festival promete um dia inesquecível de criatividade, diversão e competição saudável à beira-mar, num cenário de tirar o fôlego.\n\nO festival, que se realizará ao longo de um dia inteiro, desafia os participantes a dar asas à imaginação e transformar a areia da praia em verdadeiras obras de arte. Castelos, esculturas temáticas, figuras abstratas e até criações inspiradas em histórias ou lendas locais serão algumas das atrações que o público poderá admirar. Para quem participa, o festival é uma oportunidade única de demonstrar talento e criatividade, seja em grupo, com a família ou individualmente.\n\n“A ideia do Festival de Construções de Areia é juntar pessoas de todas as idades num ambiente descontraído, promovendo o espírito de comunidade e, ao mesmo tempo, valorizando a criatividade e a ligação à natureza. É uma celebração do verão, da praia e, acima de tudo, da diversão”, explica João Marques, um dos organizadores do evento.\n\nOs participantes terão à sua disposição várias categorias de competição, incluindo infantil, juvenil e adulto, bem como uma categoria especial para famílias e grupos. Cada equipa ou participante individual terá um espaço delimitado na praia para criar a sua obra de arte, com um tempo estipulado para a conclusão do trabalho. No final, um júri composto por artistas locais, figuras públicas e representantes da organização irá avaliar as construções com base em critérios como originalidade, técnica e impacto visual.\n\nMas o festival não se limita à competição. Ao longo do dia, a Praia da Vieira será palco de várias atividades paralelas para entreter e animar o público. Oficinas de construção de areia irão ensinar técnicas básicas e avançadas para quem quiser melhorar as suas habilidades, enquanto zonas de recreio infantil com insufláveis, jogos de praia e pinturas faciais garantirão momentos de alegria para os mais pequenos.\n\nPara os amantes de música e animação, o festival contará com um palco onde artistas locais irão atuar, trazendo música ao vivo e espetáculos de dança. Haverá também um espaço dedicado à gastronomia, com bancas que oferecerão desde petiscos regionais, como os tradicionais tremoços e caracóis, até gelados e bebidas refrescantes para ajudar a enfrentar o calor.\n\nO evento tem como pano de fundo a beleza natural da Praia da Vieira, com o seu extenso areal dourado e o oceano Atlântico como companhia constante. A localização estratégica, aliada à facilidade de acesso e à infraestrutura da zona, torna este festival num destino ideal para famílias, amigos e turistas em busca de uma experiência diferente e memorável.\n\nPara garantir o conforto de todos os participantes e visitantes, a organização irá disponibilizar casas de banho portáteis, áreas de sombra e um ponto de apoio médico. Recomenda-se que os participantes tragam chapéus, protetor solar e roupa confortável para aproveitar ao máximo o dia. Não é necessário inscrição prévia para assistir ao festival, mas quem quiser competir deve inscrever-se online ou no local até ao início do evento.\n\nO Festival de Construções de Areia na Praia da Vieira promete ser muito mais do que uma competição: será um dia repleto de diversão, convívio e celebração da criatividade em plena harmonia com a natureza. Se procura um evento diferente, capaz de encantar crianças, jovens e adultos, não pode perder esta oportunidade de transformar um dia de praia numa experiência inesquecível.\n\nReserve já a data: Praia da Vieira, 18 de julho, a partir das 10h00. Traga a família, os amigos ou venha sozinho para se surpreender com a criatividade e a alegria que este festival único tem para oferecer. Um dia de verão que ficará na memória de todos!', 'Festivais', 'ativado', 'Praia da Vieira', '2024-11-18 15:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(7, 'Dança na Praia de Odeceixe', 'festival_danca.jpg', 'A Praia de Odeceixe, uma das mais emblemáticas e deslumbrantes do Algarve, prepara-se para receber o Festival de Dança, um evento único que promete transformar a costa numa grande pista de dança ao ar livre. Aberto ao público e com entrada gratuita, o festival irá reunir artistas, bailarinos e amantes da dança num espetáculo de criatividade, movimento e celebração cultural.\n\nCom o mar como pano de fundo e as falésias imponentes a emoldurar o cenário, o evento promete ser uma experiência inesquecível para todos os que participarem. O festival terá lugar ao longo de um dia inteiro, com uma programação rica e diversificada que inclui apresentações de dança ao vivo, workshops interativos e muita música para envolver e inspirar os presentes.\n\n“O Festival de Dança na Praia de Odeceixe é mais do que um evento artístico: é uma celebração da liberdade de expressão, do movimento e da união entre pessoas de diferentes culturas e gerações. Queremos que todos, independentemente da idade ou experiência, sintam que podem participar, aprender e, acima de tudo, divertir-se”, afirma Clara Almeida, diretora artística do festival.\n\nApresentações ao Vivo\nO grande destaque do festival serão as atuações de grupos de dança nacionais e internacionais, que irão apresentar coreografias vibrantes de diferentes estilos e géneros. Do tradicional ao contemporâneo, passando por danças urbanas, salsa, flamenco e hip-hop, o palco central da praia será tomado por espetáculos dinâmicos e cheios de energia. Os bailarinos prometem impressionar com a sua técnica e paixão, contagiando o público com o ritmo e emoção das suas performances.\n\nWorkshops e Aulas Abertas\nUma das grandes atrações do festival serão os workshops gratuitos, que estarão disponíveis para o público ao longo do dia. Instrutores profissionais irão guiar os participantes em sessões interativas onde poderão aprender passos básicos e coreografias simples de estilos variados, como samba, kizomba, tango ou até danças tradicionais portuguesas. Estas aulas abertas são perfeitas para quem quer arriscar os primeiros passos ou simplesmente divertir-se ao ritmo da música.\n\nMúsica e Animação\nPara manter a energia elevada durante todo o evento, o festival contará com DJ sets e bandas ao vivo que irão criar a banda sonora perfeita para o dia. Ritmos quentes e contagiantes irão animar o público e garantir que ninguém fique parado. Haverá também atuações de dançarinos freestyle que irão interagir diretamente com o público, desafiando os mais corajosos a juntar-se à dança.\n\nEspaço para Todos\nO festival foi pensado para ser inclusivo e acolhedor, oferecendo atividades para todas as idades. Para os mais pequenos, haverá uma zona infantil com atividades lúdicas relacionadas com dança, como oficinas de criação de acessórios e jogos interativos. Já para os adultos, o espaço lounge à beira-mar será o local ideal para relaxar entre sessões de dança, com bebidas refrescantes e petiscos à disposição.\n\nA organização também preparou uma área de alimentação com food trucks que irão servir desde pratos tradicionais algarvios a opções internacionais, garantindo que o público tenha energia para dançar o dia inteiro.\n\nUm Cenário de Sonho\nA Praia de Odeceixe, localizada na fronteira entre o Algarve e o Alentejo, foi escolhida como palco do festival pela sua beleza natural e ambiente tranquilo. Conhecida pelas suas areias douradas e águas cristalinas, a praia oferece um cenário de sonho que torna este evento ainda mais especial. Os participantes poderão aproveitar o festival e, ao mesmo tempo, desfrutar de um mergulho no mar ou de um passeio pela encantadora vila de Odeceixe.\n\nInformações e Recomendações\nO festival é aberto a todos, sem necessidade de inscrição prévia, e terá início às 10h00, estendendo-se até ao pôr do sol, quando uma grande performance final encerrará o evento em grande estilo. Recomenda-se que os visitantes tragam chapéus, protetor solar e roupa confortável para dançar, bem como uma toalha ou manta para momentos de descanso à beira-mar.\n\nO Festival de Dança na Praia de Odeceixe é uma oportunidade única para celebrar a arte do movimento, experimentar novos ritmos e criar memórias inesquecíveis num dos locais mais bonitos de Portugal. Junte-se a esta festa de energia e expressão e prepare-se para sentir o ritmo no coração de uma das praias mais encantadoras do Algarve. Guarde já a data: 25 de Setembro. Não perca este evento que promete ser um dos momentos altos do verão!', 'Festivais', 'ativado', 'Praia de Odeceixe', '2024-12-25 17:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(8, 'Atira-te ao mar, com os melhores mergulhadores', 'formacao_mergulho.jpg', 'A partir do próximo mês, a Praia do Amado, uma das joias da Costa Vicentina e reconhecida pelas suas ondas perfeitas para o surf, será também palco de uma emocionante formação de mergulho destinada a iniciantes. Este curso, que combina aventura, segurança e aprendizagem, promete proporcionar uma experiência inesquecível para aqueles que desejam explorar as maravilhas do mundo subaquático.\n\nOrganizada por uma equipa de instrutores certificados com vasta experiência, a formação tem como objetivo introduzir os participantes ao mergulho recreativo, garantindo que desenvolvam as competências básicas para explorar o fundo do mar com segurança e confiança. A iniciativa surge como uma resposta à crescente procura por atividades aquáticas diversificadas na região, especialmente entre turistas e moradores locais que desejam descobrir uma nova forma de ligação com o oceano.\n\nO curso será dividido em três partes principais: uma introdução teórica, onde serão abordados os princípios fundamentais do mergulho, como o uso do equipamento e as normas de segurança; uma sessão prática em águas rasas, que permitirá aos participantes familiarizarem-se com os movimentos e técnicas essenciais; e, finalmente, um mergulho supervisionado em águas mais profundas, onde será possível explorar a riqueza da vida marinha que habita a costa da Praia do Amado.\n\n“Queremos que esta formação seja acessível a todos, independentemente da experiência ou nível de confiança no mar. A nossa prioridade é garantir que os participantes aprendam de forma descontraída, mas sempre com o máximo de segurança”, explica João Pereira, coordenador do projeto.\n\nAlém de ser um destino ideal para surfistas, a Praia do Amado é também um local privilegiado para o mergulho, graças à sua biodiversidade marinha, águas cristalinas e paisagens subaquáticas deslumbrantes. Durante a formação, os participantes poderão observar de perto cardumes de peixes, estrelas-do-mar, polvos e, com alguma sorte, até pequenos cavalos-marinhos, típicos da região.\n\nA formação está aberta a indivíduos a partir dos 12 anos, sendo ideal para famílias, grupos de amigos ou qualquer pessoa que deseje descobrir a magia do mergulho. Todo o equipamento necessário será fornecido pela organização, e não é necessária experiência prévia. Para aqueles que completarem o curso, será entregue um certificado de participação, que poderá servir como primeiro passo para futuras aventuras subaquáticas.\n\nAs inscrições já estão abertas e podem ser feitas online através do site oficial da organização ou presencialmente no centro de apoio ao visitante na Praia do Amado. Com lugares limitados, os organizadores recomendam que os interessados garantam a sua vaga o mais cedo possível.\n\nSeja para os curiosos do mundo subaquático ou para aqueles que procuram uma nova aventura, esta formação promete ser uma oportunidade única para explorar o oceano e descobrir um lado totalmente novo da Praia do Amado.', 'Formações', 'ativado', 'Praia do Amado', '2025-01-15 10:00:00', '2025-01-28 17:16:21', '2025-01-28 17:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_11_27_122314_create_events_table', 1),
(7, '2024_11_28_142912_create_sports_table', 1),
(8, '2024_11_28_143243_create_classes_table', 1),
(9, '2024_12_02_133513_create_class_subscriptions_table', 1),
(10, '2024_12_02_141345_create_aboutus', 1),
(11, '2024_12_02_151830_create_contacts', 1),
(12, '2025_01_07_180124_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product-default.jpg',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Baralhos de Cartas', 'Acartasazul.png', 'https://wordpress.g6.dwm202425.online/product/baralho-de-cartas-azul/', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'Pins', 'Apin.png', 'https://wordpress.g6.dwm202425.online/product/pin/', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'Canecas', 'Acaneca1.png', 'https://wordpress.g6.dwm202425.online/product/caneca/', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'Autocolantes', 'Aautocolante.png', 'https://wordpress.g6.dwm202425.online/product/autocolante/', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(5, 'Hoodies', 'Roupa-BeachTribe-11.png', 'https://wordpress.g6.dwm202425.online/product/hoodies-beachtribe/', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(6, 'Bonés', 'Abone1preto-600x600.png', 'https://wordpress.g6.dwm202425.online/product/bone-branco/', '2025-01-28 17:16:21', '2025-01-28 17:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulty` enum('Easy','Medium','Hard') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Medium',
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `image`, `title`, `difficulty`, `description`, `created_at`, `updated_at`) VALUES
(1, 'surf.jpg', 'Surf', 'Medium', 'Deslize pelas ondas e sinta a adrenalina de surfar.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'yoga.jpg', 'Yoga', 'Easy', 'Relaxe e estique-se com as nossas aulas de yoga.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'futebol.jpg', 'Futebol', 'Hard', 'Jogue futebol com os seus amigos e sinta a competição.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'voleibol.jpg', 'Voleibol', 'Medium', 'Salte e ataque a bola com os seus amigos.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(5, 'natacao.jpg', 'Natação', 'Easy', 'Nade e sinta a frescura da água.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(6, 'caminhada.jpg', 'Caminhada', 'Easy', 'Caminhe e descubra novos locais.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(7, 'ciclismo.jpg', 'Ciclismo', 'Medium', 'Pedale e sinta a brisa do vento.', '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(8, 'corrida.jpg', 'Corrida', 'Hard', 'Corra e sinta a adrenalina da competição.', '2025-01-28 17:16:21', '2025-01-28 17:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` enum('A','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'C',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carolina', '2231378@my.ipleiria.pt', NULL, '$2y$12$H721hzcP85rWpz.s9xbpN.JSxSdx0p8RrlNkt3DytlzKZkDEwbc5u', NULL, NULL, 'A', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(2, 'Dinis', '2231338@my.ipleiria.pt', NULL, '$2y$12$arl0YeMW2WchZFNLaaquGeb2icaN5BfWOfCso7KheWRrHDk/xm1hK', NULL, NULL, 'A', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(3, 'João', '2223235@my.ipleiria.pt', NULL, '$2y$12$C16TSDbq8BUDBS3EzgK92Ojer/dSfqSv35d8D3n0F9vqTsrBsCpw6', NULL, NULL, 'A', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(4, 'Marcelo', '2231340@my.ipleiria.pt', NULL, '$2y$12$gYjfiz1yPg8mpinr9IVMtuz/XFpp4OrrtcLSloO2SQZvD88r4BfVS', NULL, NULL, 'A', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(5, 'Samuel', '2220841@my.ipleiria.pt', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', NULL, NULL, 'A', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(6, 'Felipe Pino', 'felipe.pino@gmail.com', NULL, '', 923547681, '2001-650, Rua do Pino, Guimarães', 'C', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(7, 'Gustavo Lima', 'gustavo.lima@gmail.com', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', 912345678, '1001-123, Rua da Favela, Minas Gerais', 'C', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21'),
(8, 'João Parente', '2231371@my.ipleiria.pt', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', 912775739, '175 Av. Gen. Humberto Delgado', 'C', NULL, '2025-01-28 17:16:21', '2025-01-28 17:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_subscriptions_classes_id_foreign` (`classes_id`),
  ADD KEY `class_subscriptions_users_id_foreign` (`users_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  ADD CONSTRAINT `class_subscriptions_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_subscriptions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
