<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho - EPI</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .top-bar {
      background-color: #f58220;
      padding: 10px 20px;
    }
    .brand {
      font-size: 32px;
      font-weight: bold;
      
    }
    .category-bar {
      background-color: white;
      padding: 5px 0;
    }
    .icon-btn {
      font-size: 20px;
      color: #000;
      cursor: pointer;
    }
    .category-bar {
      background-color: #fff;
      padding: 10px 15px;
      white-space: nowrap;
      overflow-x: auto;
    }
    .fa-bars {
      font-size: 25px;
    }
    .fa-shopping-cart {
      font-size: 25px;
    }
    .fa-solid {
      font-size: 25px;
    }
    .categoria-btn {
      display: inline-block;
      color: black;
      background-color: #f58220;
      font-weight: bold;
      padding: 6px 30px;
      margin-right: 6px;
      font-size: 19px;
      clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%);
      
      cursor: pointer;
    }
    .categoria-btn.dark {
      color: white;
      background-color: #1a1a1a;
    }
    .search-box {
      padding: 5px;
      font-size: 14px;
      border: 1px solid #aaa;
      border-radius: 3px;
    }
    .card-produto {
      border: 1px solid #999;
      padding: 10px;
    }
    .resumo {
      border: 1px solid #999;
      padding: 20px;
    }
    .btn-orange {
      background-color: #f58220;
      color: white;
    }
    footer {
      background-color: #f58220;
      color: #222;
      text-align: center;
      padding: 150px;
    }
  </style>
</head>
<body>
  <!-- Topbar -->
  <header>
    <?php
    include_once 'index.php';
    $q = new Controller;
    $q->menu();
    ?>
  </header>

  <div class="category-bar d-flex align-items-center">
    <span class="categoria-btn">Categoria 1</span>
    <span class="categoria-btn dark">Categoria 2</span>
    <span class="categoria-btn">Categoria 3</span>
    <span class="categoria-btn dark">Categoria 4</span>
    <span class="categoria-btn">Categoria 5</span>
    <span class="categoria-btn dark">Categoria 6</span>
    <input type="text" class="ms-auto search-box" placeholder="🔍">
  </div>

  <div class="container my-4">
    <div class="row">
      <!-- Carrinho -->
      <div class="col-lg-8">
        <div class="card card-produto mb-3">
          <h5 class="fw-bold"><i class="fas fa-check-circle text-orange me-2"></i> CARRINHO (NUMERO DE ITENS)</h5>
          <div class="form-check my-2">
            <input class="form-check-input" type="checkbox" id="selecionarTodos">
            <label class="form-check-label" for="selecionarTodos">Selecionar todos os itens</label>
          </div>
        </div>

        <div class="card card-produto d-flex flex-row align-items-center">
          <input class="form-check-input me-3" type="checkbox">
          <img src="capacete-api-2.webp" alt="Capacete" width="80">
          <div class="ms-3">
            <p class="m-0 fw-bold">Capacete Segurança Genesis com Suspensão e Jugular CA 36099 Libus</p>
            <p class="m-0">R$16,97</p>
            <div class="d-flex align-items-center mt-2">
              <span class="me-2">quantidade</span>
              <button class="btn btn-outline-secondary btn-sm">-</button>
              <span class="mx-2">1</span>
              <button class="btn btn-outline-secondary btn-sm">+</button>
            </div>
          </div>
          <div class="ms-auto">
            <i class="fas fa-trash"></i>
          </div>
        </div>
      </div>

      <!-- Resumo -->
      <div class="col-lg-4">
        <div class="resumo">
          <h5 class="fw-bold">RESUMO</h5>
          <img src="capacete-api-2.webp" alt="Resumo produto" width="60" class="my-2">
          <p>subtotal: R$16,97</p>
          <p>frete: R$10,00</p>
          <p><strong>total: R$26.97</strong></p>
          <a href="pg5.php"><button class="btn btn-orange w-100">CONTINUAR(1)</button></a>
        </div>
      </div>
    </div>

    <!-- Produtos recomendados -->
    <h5 class="mt-5">PRODUTOS RECOMENDADOS</h5>
    <div class="d-flex align-items-center">
      <i class="fas fa-chevron-left me-3"></i>
      <div class="d-flex overflow-auto">
        <div class="text-center mx-2">
          <div class="border" style="width:80px; height:80px;"></div>
          <small>NOME DO PRODUTO</small><br>
          <small>R$preco</small><br>
          <button class="btn btn-orange btn-sm mt-1">COMPRAR <i class="fas fa-cart-plus"></i></button>
        </div>
        <!-- Repetir para outros produtos -->
      </div>
      <i class="fas fa-chevron-right ms-3"></i>
    </div>
  </div>

  <!-- Rodapé -->
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

</body>
</html>
