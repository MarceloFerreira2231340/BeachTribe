@extends('layout.master')
@section('title', 'BeachTribe')

@section('styles')
<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('css/Dinis/style.css')}}">
<link rel="website icon" type="image/apng" href="img/Dinis/DarkSolo.png">
<link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
@endsection

@section('content')
        <section id="index_banner_section">
            <div id="index_banner_title_area">
                <img src="img/Dinis/BeachTribeShadow.png"  class="index_banner_title" id="index_banner_title_shadow">
                <img src="img/Dinis/BeachTribe.png" class="index_banner_title">
            </div>
            <div id="index_banner_shadow"></div>
            <h5>Por uma vida mais ativa e saudável.</h5>
            <img src="img/Dinis/bannerIndex.jpg" id="index_banner_image">
        </section>



        <section id="index_section1">
            <p>Somos uma associação focada na importância de manter um dia a dia ativo, aproveitando a beleza natural nacional e benefícios de saúde de um ambiente de praia.<br><br>Faça cada dia valer a pena.</p>
        </section>



        <section id="index_section2">
            <div id="index_s2_box" class="index_s2_boxes">
                <div class="index_s2_cards" id="index_s2_rightcard1">
                    <img src="img/Dinis/indexSurf.jpg">
                    <div class="index_s2_textareas">
                        <h2>Surf</h2>
                        <p>Desde aulas de surf a pranchas costumizadas, sinta-se à vontade para começar a praticar o desporto aquático mais popular do mundo.</p>
                        <a href="{{route('surf')}}">
                            <div class="index_s2_vermais">
                                Ver mais
                            </div>
                        </a>
                    </div>
                </div>
                <div class="index_s2_cards" id="index_s2_leftcard">
                    <div class="index_s2_textareas">
                        <h2>Windsurf</h2>
                        <p>Encontre tudo o que precisar para se aventurar no vento das marés portuguesas.</p>
                        <a href="">
                            <div class="index_s2_vermais" id="index_s2_vermais_id2">
                                Ver mais
                            </div>
                        </a>
                    </div>
                    <img src="img/Dinis/indexWindsurf.jpg">
                </div>
                <div class="index_s2_cards" id="index_s2_rightcard2">
                    <img src="img/Dinis/indexBodyboard.jpg">
                    <div class="index_s2_textareas">
                        <h2>Bodyboard</h2>
                        <p>Descanse, refresque-se e aproveite a jornada de aprender uma nova atividade ao ar livre.</p>
                        <a href="">
                            <div class="index_s2_vermais">
                                Ver mais
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section id="index_section3">
            <div id="index_s3_area">
                <div class="index_s3_cards">
                    <img src="img/Dinis/indexEvento1.webp">
                    <div class="index_s3_textarea">
                        <h4>Formações de Nadador Salvador</h4>
                        <p>Aprenda a salvar pessoas em situações de urgência da forma correta.</p>
                    </div>
                </div>
                <div class="index_s3_cards">
                    <img src="img/Dinis/indexEvento2.jpg">
                    <div class="index_s3_textarea">
                        <h4>Portugal em Festa de passagem</h4>
                        <p>Faça parte desta experiência única no dia 29 de Junho na praia do Pedrogão.</p>
                    </div>
                </div>
                <div class="index_s3_cards" id="index_s3_card3">
                    <img src="img/Dinis/indexEvento3.png">
                    <div class="index_s3_textarea" id="index_s3_card3">
                        <h4>Concerto de Quim Barreiros</h4>
                        <p>Veja o espetáculo da estrela nacional no dia 28 de Junho na Praia da Nazaré.</p>
                    </div>
                </div>
            </div>
            <a href="{{route('eventos')}}">
                <div id="index_s3_verevetos">
                    Ver eventos
                </div>
            </a>
        </section>



        <section id="index_section4">
            <h3>Ajude-nos a espalhar a palavra!</h3>
            <div id="index_s4_area">
                <a href="https://wordpress.g6.dwm202425.online/product/baralho-de-cartas-azul/?preview=true">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Acartasazul.png">
                        <p>Baralho de Cartas</p>
                    </div>
                </a>
                <a href="https://wordpress.g6.dwm202425.online/product/pin/">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Apin.png">
                        <p>Pin</p>
                    </div>
                </a>
                <a href="https://wordpress.g6.dwm202425.online/product/caneca/">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Acaneca1.png">
                        <p>Caneca</p>
                    </div>
                </a>
                <a href="https://wordpress.g6.dwm202425.online/product/autocolante/">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Aautocolante.png">
                        <p>Autocolante</p>
                    </div>
                </a>
                <a href="https://wordpress.g6.dwm202425.online/product/hoodies-beachtribe/">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Roupa-BeachTribe-11.png">
                        <p>Hoodies BeachTribe</p>
                    </div>
                </a>
                <a href="https://wordpress.g6.dwm202425.online/product/bone-branco/">
                    <div class="index_s4_cards">
                        <img src="https://wordpress.g6.dwm202425.online/wp-content/uploads/2024/11/Abone1preto.png">
                        <p>Boné</p>
                    </div>
                </a>
            </div>
            <a href="https://wordpress.g6.dwm202425.online/">
                <div id="index_s4_loja">
                    Loja
                </div>
            </a>
        </section>



        <section id="index_section5">
                <div id="index_s5_form_area">
                    <div id="index_s5_form_title">
                        <p>Não perca nenhuma novidade!</p>
                    </div>
                    <form id="index_s5_form">
                        <div class="index_s5_form_items" id="index_s5_form_name">
                            <label for="IF_name">Nome: *</label>
                            <input type="text" id="IF_name" required>
                        </div>
                        <div class="index_s5_form_items" id="index_s5_form_email">
                            <label for="IF_email">Email: *</label>
                            <input type="email" id="IF_email" required>
                        </div>
                        <div class="index_s5_form_items" id="index_s5_form_phone">
                            <label for="IF_phone">Telemóvel/Telefone:</label>
                            <input type="tel" id="IF_phone">
                        </div>
                        <button type="submit" id="index_s5_submit_button">Submeter</button>
                    </form>
                </div>
            </div>
        </section>
        <div id="index_s5_popup_form">
            <div id="index_s5_popup_area">
                <span id="index_s5_close">&times;</span>
                <p>Obrigado por preencher o formulário!</p>
            </div>
        </div>
@endsection

@section('scripts')
<script src="{{asset('js/login_animation.js')}}"></script>
<script src="{{asset('js/dropdown_animation.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
