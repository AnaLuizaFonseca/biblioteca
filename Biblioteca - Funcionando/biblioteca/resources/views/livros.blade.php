
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/livros.css') }}">
  <title>Harry Potter e a Pedra Filosofal</title>
</head>
<body>
<img src="{{ asset('storage/img/livro.jpg') }}" alt="Capa do livro Harry Potter e a Pedra Filosofal">
<div class="container">
  <button onclick="mostrarMensagem()" class="fa fa-star"></button>
  <script>
    function mostrarMensagem() {
      alert("Livro salvo nos favoritos!");
    }
  </script>
    <div class="book-container">
        <div class="book-info">
            <h2>Harry Potter e a Pedra Filosofal</h2>
            <p>J.K. Rowling</p>
            <ul class="avaliacao">
              <li class="star-icon" data-avaliacao="1" onclick="avaliar(1)"></li>
              <li class="star-icon" data-avaliacao="2" onclick="avaliar(2)"></li>
              <li class="star-icon" data-avaliacao="3" onclick="avaliar(3)"></li>
              <li class="star-icon" data-avaliacao="4" onclick="avaliar(4)"></li>
              <li class="star-icon" data-avaliacao="5" onclick="avaliar(5)"></li>
            </ul>
            
            <script>
              function avaliar(nota) {
                // Remove a classe "ativo" de todas as estrelas
                const estrelas = document.querySelectorAll('.star-icon');
                estrelas.forEach(estrela => estrela.classList.remove('ativo'));
            
                // Adiciona a classe "ativo" nas estrelas até a nota selecionada
                for (let i = 1; i <= nota; i++) {
                  estrelas[i - 1].classList.add('ativo');
                }
            
                // Envia a nota para algum lugar (substitua por sua lógica)
                console.log('Nota selecionada:', nota);
                // Aqui você pode fazer uma requisição AJAX para enviar a nota para um servidor
              }
            </script>

            <p>Harry Potter é um garoto cujos pais, feiticeiros, 
            foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. 
            Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. 
            Pelo contrário. Até os 10 anos 
            Harry foi uma espécie de...</p>
        </div>
      </div>
    <header>
<footer class="footer">
  <div class="icon-container">
    <a href="inicio"><i class="fa fa-house"></i></a>
    <a href="#"><i class="fa fa-comment"></i></a>
    <a href="#"><i class="fa fa-star"></i></a>
    <a href="#"><i class="fa fa-user"></i></a>
  </div>
</footer>
    </header>

</body>
</html>