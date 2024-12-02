@extends('layout.master')
@section('title','Contactos')

@section('styles')
<link rel="stylesheet" href="{{asset('css/normalize.')}}">
<link rel="stylesheet" href="{{asset('css/Samuel/style.css?v=1.0')}}">
<link rel="website icon" type="image/apng" href="img/DarkSolo.png">
<link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
@endsection

@section('content')
<body>
    <div id="nav_spacer"></div>

    <div class="contact-container">
        <h1>Contacte-nos</h1>
        <p>Bem vindo à nossa página de contactos, se tiver alguma dúvida preencha os campos a baixo.</p>
      
        <form>
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" required>
      
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
      
          <label for="message">Mensagem:</label>
          <textarea id="message" name="message" required></textarea>
      
          <button type="submit">Submeter</button>
        </form>
      </div>

@endsection