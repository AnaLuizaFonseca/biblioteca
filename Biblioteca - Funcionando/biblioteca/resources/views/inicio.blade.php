<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
  <title>Inicio</title>
</head>
<body>
  <div class="top-half"></div>
  <div class="container">
    <header>
      <div class="word-container">
        <div class="word">Recomendados</div>
        <div class="word">Romance</div>
        <div class="word">Fantasia</div>
        <div class="word">Comédia</div>
        <div class="word">Bibliografia</div>
        <div class="word">Ficção</div>
        <div class="word">Educacional</div>
      </div>
      <div class="icon1"><i class="fa-solid fa-magnifying-glass"></i></div>
      <div class="icon-container">
        <i class="fa fa-house"></i>
        <i class="fa fa-comment"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-user"></i>
      </div>
      <div class="titulo">
        <div class="swiper-wrapper">
            <div style="flex: 1;" class="box">
            <a href="livros">
                <img src="{{ asset('storage/img/livro.jpg') }}" class="swiper-slide">
            </a>
                <p class="caption">Harry Potter e a Pedra Filosofal</p>
            </div>
            <div style="flex: 1;" class="box">
                <img src="{{ asset('storage/img/livro3.jpg') }}" class="swiper-slide">
                <p class="caption">Orgulho e Preconceito</p>
            </div>
            <div style="flex: 1;" class="box">
                <img src="{{ asset('storage/img/livro4.jpg') }}" class="swiper-slide">
                <p class="caption">Extraordinário</p>
            </div>
            <div style="flex: 1;" class="box">
                <img src="{{ asset('storage/img/livro5.jpg') }}" class="swiper-slide">
                <p class="caption">Diário de um Banana</p>
            </div>
        </div>
      </div>
      <script src="script.js"></script>
    </header>
  </div>
</body>
</html>