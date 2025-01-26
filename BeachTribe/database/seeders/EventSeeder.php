<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table to reset the auto-increment value
        DB::table('events')->truncate();

        $events = [
            [
                'title' => 'Quim Barreiros',
                'image' => 'quimbarreiros.png',
                'description' => 'Veja o espetáculo da estrela nacional Quim Barreiros',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia da Rocha',
                'date' => '2024-06-28 18:00:00',
            ],
            [
                'title' => 'Surf',
                'image' => 'aulassurf.png',
                'description' => 'Aprenda a surfar com os melhores instrutores das nossas praias.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia de Carcavelos',
                'date' => '2024-07-10 09:00:00',
            ],
            [
                'title' => 'Festival do Cinema',
                'image' => 'festival_cinema.jpg',
                'description' => 'Exibição de filmes ao ar livre, aberto ao público.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia de São Rafael',
                'date' => '2024-08-20 21:00:00',
            ],
            [
                'title' => 'Formação de Yoga',
                'image' => 'formacao_yoga.jpg',
                'description' => 'Sessões de yoga ao amanhecer, aprender a esticar-se e a relaxar.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia da Marinha',
                'date' => '2024-09-05 08:00:00',
            ],
            [
                'title' => 'Festival de Gastronomia',
                'image' => 'festival_gastronomia.jpg',
                'description' => 'Degustação de pratos típicos portugueses.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia do Guincho',
                'date' => '2024-10-12 12:00:00',
            ],
            [
                'title' => 'Construções de areia',
                'image' => 'construcao_areia.jpg',
                'description' => 'Vem competir no concurso de construções de areia, qualquer um pode divertir-se!',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia da Vieira',
                'date' => '2024-11-18 15:00:00',
            ],
            [
                'title' => 'Festival de Dança',
                'image' => 'festival_danca.jpg',
                'description' => 'Apresentações de dança, e animação ao publico.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia de Odeceixe',
                'date' => '2024-12-25 17:00:00',
            ],
            [
                'title' => 'Formação de Mergulho',
                'image' => 'formacao_mergulho.jpg',
                'description' => 'A partir do próximo mês, a Praia do Amado, uma das joias da Costa Vicentina e reconhecida pelas suas ondas perfeitas para o surf, será também palco de uma emocionante formação de mergulho destinada a iniciantes. Este curso, que combina aventura, segurança e aprendizagem, promete proporcionar uma experiência inesquecível para aqueles que desejam explorar as maravilhas do mundo subaquático.

Organizada por uma equipa de instrutores certificados com vasta experiência, a formação tem como objetivo introduzir os participantes ao mergulho recreativo, garantindo que desenvolvam as competências básicas para explorar o fundo do mar com segurança e confiança. A iniciativa surge como uma resposta à crescente procura por atividades aquáticas diversificadas na região, especialmente entre turistas e moradores locais que desejam descobrir uma nova forma de ligação com o oceano.

O curso será dividido em três partes principais: uma introdução teórica, onde serão abordados os princípios fundamentais do mergulho, como o uso do equipamento e as normas de segurança; uma sessão prática em águas rasas, que permitirá aos participantes familiarizarem-se com os movimentos e técnicas essenciais; e, finalmente, um mergulho supervisionado em águas mais profundas, onde será possível explorar a riqueza da vida marinha que habita a costa da Praia do Amado.

“Queremos que esta formação seja acessível a todos, independentemente da experiência ou nível de confiança no mar. A nossa prioridade é garantir que os participantes aprendam de forma descontraída, mas sempre com o máximo de segurança”, explica João Pereira, coordenador do projeto.

Além de ser um destino ideal para surfistas, a Praia do Amado é também um local privilegiado para o mergulho, graças à sua biodiversidade marinha, águas cristalinas e paisagens subaquáticas deslumbrantes. Durante a formação, os participantes poderão observar de perto cardumes de peixes, estrelas-do-mar, polvos e, com alguma sorte, até pequenos cavalos-marinhos, típicos da região.

A formação está aberta a indivíduos a partir dos 12 anos, sendo ideal para famílias, grupos de amigos ou qualquer pessoa que deseje descobrir a magia do mergulho. Todo o equipamento necessário será fornecido pela organização, e não é necessária experiência prévia. Para aqueles que completarem o curso, será entregue um certificado de participação, que poderá servir como primeiro passo para futuras aventuras subaquáticas.

As inscrições já estão abertas e podem ser feitas online através do site oficial da organização ou presencialmente no centro de apoio ao visitante na Praia do Amado. Com lugares limitados, os organizadores recomendam que os interessados garantam a sua vaga o mais cedo possível.

Seja para os curiosos do mundo subaquático ou para aqueles que procuram uma nova aventura, esta formação promete ser uma oportunidade única para explorar o oceano e descobrir um lado totalmente novo da Praia do Amado.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia do Amado',
                'date' => '2025-01-15 10:00:00',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
