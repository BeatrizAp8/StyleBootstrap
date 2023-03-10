<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
            'resources/css/app.css', 
                'resources/js/app.js',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livraria books</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/livros')}}">Livros recomendados</a></li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            O que você procura?
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Sobre</a></li>
            <li><a class="dropdown-item" href="#">Quem somos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nosso contato</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn btn-info">Search</button>
      </form>
    </div>
  </div>
</nav>


<br>
<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://lojasaraivanew.vtexassets.com/arquivos/ids/198343-300-300?v=1764791159&width=300&height=300&aspect=true" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">É assim que acaba é um livro muito emocionante, super recomendo!</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
    <img src="https://images-americanas.b2w.io/produtos/1748613966/imagens/livro-fazendo-meu-filme-lado-b-capa-classica/1748613966_1_large.jpg" class= "card-img-top" alt="...">
    <div class="card-body">
    <p class="card-text">Livro super incrível, mais um para lista de recomendações</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://cf.shopee.com.br/file/sg-11134201-22100-cul5edauusivab" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">É assim que começa é a continuação do livro: É assim que acaba, super recomendo também!</p>
  </div>
    </div>
  </div>
</div>


</body>
</html>