<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPI - Checkout</title>
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
  <div class="container my-4">
    <div class="row">
      <div class="col-lg-8">
        <h5>Endereços de Entrega</h5>
        <a href="#" class="text-primary">+ Adicionar Novo Endereço</a>

        <h5 class="mt-4">Métodos de Pagamento</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pagamento" id="pix">
          <img src="pix.webp">
          <label class="form-check-label" for="pix">Pix</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pagamento" id="cartao">
          <img src="cartao.webp">
          <label class="form-check-label" for="cartao">Cartão <small class="text-muted">*ate 12 parcelas</small></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pagamento" id="boleto">
          <img src="boleto.webp">
          <label class="form-check-label" for="boleto">Boleto</label>
        </div>

        <h5 class="mt-4">Opções de entrega</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="entrega" id="loja">
          <label class="form-check-label" for="loja">Retirada em loja - <strong>GRÁTIS</strong><br><small>Prazo: 4 dias úteis</small></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="entrega" id="pac" checked>
          <label class="form-check-label" for="pac">Pac - <strong>R$10,00</strong><br><small>Prazo: até 7 dias úteis</small></label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="entrega" id="sedex">
          <label class="form-check-label" for="sedex">Sedex - <strong>R$19,21</strong><br><small>Prazo: até 2 dias úteis</small></label>
        </div>

        <h5 class="mt-4">Detalhes do(s) item(ns)</h5>
        <div class="d-flex align-items-center border p-2">
          <input type="checkbox" checked class="me-2">
          <img src="capacete-api-2.webp" alt="capacete" style="width: 70px;">
          <div class="ms-3">
            <strong>Capacete Segurança Genesis com Suspensão e Jugular CA 36099 Libus</strong>
            <div>R$16,97</div>
            <div class="d-flex align-items-center mt-1">
              quantidade:
              <button class="btn btn-sm btn-outline-secondary ms-2">-</button>
              <span class="mx-2">1</span>
              <button class="btn btn-sm btn-outline-secondary">+</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="resumo-box">
          <h5>RESUMO</h5>
          <label for="cupom">Cupom de desconto</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="cupom">
            <button class="btn btn-orange">Aplicar</button>
          </div>
          <p><strong>subtotal:</strong> R$16,97</p>
          <p><strong>frete:</strong> R$10,00</p>
          <p><strong>total:</strong> R$26,97</p>
          <button class="btn btn-orange w-100">Confirmar compra</button>
        </div>
      </div>
    </div>

    <h5 class="mt-5 text-center">PRODUTOS RECOMENDADOS</h5>
    <div class="row recommended-products text-center">
      <div class="col-6 col-sm-4 col-md-2">
        <img src="placeholder.png" alt="produto">
        <p class="mb-1">NOME DO PRODUTO</p>
        <p>R$preco</p>
        <button class="btn btn-orange btn-sm">COMPRAR</button>
      </div>
      <!-- Repita mais colunas semelhantes -->
    </div>
  </div>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>