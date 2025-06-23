<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Loja EPI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <header>
    <?php
    include_once 'index.php';
    $q = new Controller;
    $q->menu();
    ?>
  </header>

  <main>
    <!-- banner (ajustar tamanho) -->
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/epi construção.webp" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br>

    <!-- produtos -->
<div class="container">
  <h5 class="border-bottom pb-2 mb-3 text-uppercase fw-bold text-center">
    EPI para construção
  </h5>
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4 d-flex">
      <div class="product-card flex-fill d-flex flex-column">
        <img src="assets/img/abafador EPI.webp" class="img-fluid mb-2">
        <strong>NOME DO PRODUTO</strong>
        <p>R$PREÇO</p>
        <button class="buy-btn mt-auto">COMPRAR <i class="fas fa-shopping-cart"></i></button>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 d-flex">
      <a href="pg3.php" class="text-decoration-none text-dark w-100">
        <div class="product-card flex-fill d-flex flex-column">
          <img src="assets/img/capacete-api-2.webp" class="img-fluid mb-2">
          <strong>Capacete Segurança Genesis</strong>
          <p>R$16,97</p>
          <button class="buy-btn text-bg-warning mt-auto">COMPRAR <i class="fas fa-shopping-cart"></i></button>
        </div>
      </a>
    </div>

    <!-- Card 3 (Exemplo) -->
    <div class="col-md-4 d-flex">
      <div class="product-card flex-fill d-flex flex-column">
        <img src="assets/images/luva pedreiro.jpeg" class="img-fluid mb-2">
        <strong>Luva de proteção ALUX</strong>
        <p>R$29,90</p>
        <button class="buy-btn mt-auto">COMPRAR <i class="fas fa-shopping-cart"></i></button>
      </div>
    </div>

  </div>
</div>
  </main>
  <footer class="text-bg-warning py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Contato</h5>
          <p>Email: contato@abelardoepi.com<br>Telefone: (11) 99999-9999</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Endereço</h5>
          <p>Rua das Botinas, 123<br>São Paulo - SP</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Redes Sociais</h5>
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="text-center mt-4">
        <small><i class="bi bi-c-circle"></i> 2025 EPI do Abelardo. Todos os direitos reservados.</small>

      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Cabeçalho com título centralizado -->
        <div class="modal-header justify-content-center">
          <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Login</h1>
          <!-- Botão de fechar ainda funciona, mas está oculto visualmente -->
          <button type="button" class="btn-close position-absolute end-0 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Corpo do modal -->
        <form action="index.php" method="post">
          <div class="modal-body container ">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu email"><br>
            <label for="inputPassword5" class="form-label">Senha</label>
            <input type="password" name="senha" id="inputPassword5" class="form-control" placeholder="Digite sua senha">
          </div>

          <!-- Rodapé com botão centralizado -->
          <div class="modal-footer flex-column align-items-center">
            <input type="submit" name="Entrar" class="btn btn-dark mb-2">
            <a href="Cadastro.php" class="text-muted small mt-1">Não possui login?</a>
            <a href="Recuperar.php" class="text-muted small mt-1">Esqueceu sua senha?</a>
          </div>

        </form>

      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>