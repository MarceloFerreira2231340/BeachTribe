@extends('layout.master')
@section('title', 'BeachTribe')

@section('styles')
<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('css/Dinis/style.css?=1.0')}}">
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
            <div id=index_section1_div>
                <p>Somos uma associação focada na importância de manter um dia a dia ativo, aproveitando a beleza natural nacional e benefícios de saúde de um ambiente de praia.<br><br>Faça cada dia valer a pena.</p>
            </div>
            <div id="index_video_div">
                <embed id="index_video" type="video/webm" src="https://youtube.com/embed/iTC8Zueooq0?si=G5vUQsNDgL_EsEi3" width="auto" height="400px">
                <div>
                    <h2 style="margin: 50px 0 0 5%; font-size:32pt; text-align:left;">Loja BeachTribe</h2>
                    <p>Veja a nossa loja!<br><br>Aqui pode encontrar diversos produtos com o intuito de <span style="color:var(--laranja)">melhorar a qualidade dos nossos serviços</span> e aumentar a influência de um <span style="color:var(--laranja)">estilo de vida saudável</span>.<br><br>Faça parte de algo maior ainda hoje e <span style="color:var(--laranja)">junte-se a nós nesta aventura</span>.</p>
                    <a href="https://wordpress.g6.dwm202425.online/" style="text-decoration:none">
                        <div id="index_section1_loja" style="margin:50px 0 0 5%;">
                            Loja
                        </div>
                    </a>
                </div>
            </div>
        </section>



        <section id="index_section2">
            <div id="index_s2_box" class="index_s2_boxes">
                <div class="index_s2_cards" id="index_s2_rightcard1">
                    <img src="img/Carolina/Modalidades/surf.jpg">
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
                        <h2>Voleibol</h2>
                        <p>Salte, divirta-se e exercite-se a praticar desportos em equipa como o voleibol.</p>
                        <a href="">
                            <div class="index_s2_vermais" id="index_s2_vermais_id2">
                                Ver mais
                            </div>
                        </a>
                    </div>
                    <img src="img/Carolina/Modalidades/voleibol.jpg">
                </div>
                <div class="index_s2_cards" id="index_s2_rightcard2">
                    <img src="img/Carolina/Modalidades/natacao.jpg">
                    <div class="index_s2_textareas">
                        <h2>Natação</h2>
                        <p>Aprenda ou melhore a sua técnica de natação para aproveitar o mar ao máximo.</p>
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

                @foreach($events->take(3) as $event)
                    <div class="index_s3_cards">
                        <img src="{{ $path_events.$event->image }}">
                        <div class="index_s3_textarea">
                            <h4>{{ $event->title }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($event->description, 100, '...') }}</p>
                        </div>
                    </div>
                @endforeach

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

                @foreach($products->shuffle()->take(6) as $product)
                    <a href="{{ $product->link }}">
                        <div class="index_s4_cards">
                            <img src="{{ $path_products.$product->image }}">
                            <p>{{ $product->name }}</p>
                        </div>
                    </a>
                @endforeach

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
