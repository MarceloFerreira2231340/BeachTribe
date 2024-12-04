<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @yield('styles')

    @yield('scripts')

</head>

<body>
    <nav>
        <div id="nav_logo_div">
            <a href="{{route('index')}}">
                <img src="{{asset('img/LightHorizontal.png')}}">
            </a>
        </div>
        <div id="nav_section">
            <div id="nav_main">
                <div id="nav_aaa">
                    <a class="content_nav nav_widescreen" href="https://wordpress.g6.dwm202425.online/">
                        <p>Loja</p>
                    </a>
                    <a class="content_nav nav_widescreen" href="{{route('eventos')}}">
                        <p>Eventos</p>
                    </a>
                    <a class="content_nav nav_widescreen" href="">
                        <p>Modalidades</p>
                    </a>
                    <a class="content_nav nav_widescreen" href="{{route('calendario')}}">
                        <p>Calendário</p>
                    </a>
                    <a class="content_nav nav_widescreen" href="{{route('contactos')}}">
                        <p>Contactos</p>
                    </a>
                    <a class="content_nav nav_widescreen" href="">
                        <p>Sobre Nós</p>
                    </a>
                    <a class="content_nav nav_widescreen" id="nav_login" href="{{route('login')}}">
                    @if(Auth::check())
                        <p>{{ Auth::user()->name }}</p>
                    @else
                    <p class="nav_widescreen">Log in</p>
                    @endif
                    <img id="login_logo" class="nav_widescreen" src="{{asset('img/login_logo.png')}}">
                    </a>
                </div>
                <a class="dropbtn">
                    <img id="dropdownIcon1" class="dorpdownIcons" src="{{asset('img/dropdown1.png')}}">
                    <img id="dropdownIcon2" class="dorpdownIcons" src="{{asset('img/dropdown2.png')}}">
                </a>
            </div>
            <div class="content_nav dropdown">
                <div class="dropdown-content">
                    <a class="nav_responsive" href="https://wordpress.g6.dwm202425.online/">
                        <p>Loja</p>
                    </a>
                    <a class="nav_responsive" href="{{route('eventos')}}">
                        <p>Eventos</p>
                    </a>
                    <a class="nav_responsive" href="">
                        <p>Modalidades</p>
                    </a>
                    <a class="nav_responsive" href="{{route('calendario')}}">
                        <p>Calendário</p>
                    </a>
                    <a class="nav_responsive" href="{{route('contactos')}}">
                        <p>Contactos</p>
                    </a>
                    <a class="nav_responsive" href="">
                        <p>Sobre Nós</p>
                    </a>
                    <a class="nav_responsive" href="{{route('login')}}">
                        <p>Log in</p>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div id="nav_spacer"></div>
    <script src="{{asset('js/dropdown_animation.js')}}"></script>
    <script src="{{asset('js/login_animation.js')}}"></script>

<section>
    @yield('content')
</section>

    <footer>
        <div id="footer_body">
            <div id="footer_section1">
                <a class="content_footer" id="title_footer" href="https://wordpress.g6.dwm202425.online/">
                    <p>Loja</p>
                </a>
                <div id="footer_line1"></div>
                <div id="footer_table">
                    <div class="footer_textarea" id="footer_textarea_1">
                        <a class="content_footer" href="https://wordpress.g6.dwm202425.online/product-category/merch/">
                            <p>Merch</p>
                        </a>
                        <a class="content_footer"
                            href="https://wordpress.g6.dwm202425.online/product-category/acessorios/">
                            <p>Acessórios</p>
                        </a>
                        <a class="content_footer"
                            href="https://wordpress.g6.dwm202425.online/product-category/chapeus/">
                            <p>Chapéus</p>
                        </a>
                        <a class="content_footer" href="https://wordpress.g6.dwm202425.online/product-category/malas/">
                            <p>Malas</p>
                        </a>
                    </div>
                    <div class="footer_textarea">
                        <a class="content_footer"
                            href="https://wordpress.g6.dwm202425.online/product-category/material-desporto/">
                            <p>Material Desportivo</p>
                        </a>
                        <a class="content_footer" href="https://wordpress.g6.dwm202425.online/product-category/praia/">
                            <p>Praia</p>
                        </a>
                        <a class="content_footer" href="https://wordpress.g6.dwm202425.online/product-category/roupas/">
                            <p>Roupa</p>
                        </a>
                    </div>
                </div>
            </div>
            <div id="footer_section2">
                <div id="footer_line2"></div>
                <div class="footer_textarea">
                    <a class="content_footer" href="eventos.html">
                        <p>Eventos</p>
                    </a>
                    <a class="content_footer" href="modalidades.html">
                        <p>Modalidades</p>
                    </a>
                    <a class="content_footer" href="calendario.html">
                        <p>Calendário</p>
                    </a>
                    <a class="content_footer" href="contactos.html">
                        <p>Contactos</p>
                    </a>
                    <a class="content_footer" href="sobrenos.html">
                        <p>Sobre Nós</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
