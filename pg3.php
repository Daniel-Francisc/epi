<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produto - EPI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Topo -->
  <header>
    <?php
    include_once 'index.php';
    $q = new Controller;
    $q->menu();
    ?>
  </header>
  <!-- Produto -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-5 text-center">
        <img src="capacete-api-2.webp" class="img-fluid border" alt="Capacete">
        <div class="d-flex justify-content-center flex-wrap mt-2">
          <div class="thumb-color" style="background-color: yellow;"></div>
          <div class="thumb-color" style="background-color: blue;"></div>
          <div class="thumb-color" style="background-color: red;"></div>
          <div class="thumb-color" style="background-color: green;"></div>
        </div>
        <a href="#" class="d-block mt-2">🔵 Guia para cores de capacete</a>
      </div>

      <div class="col-md-7">
        <h4>Capacete Segurança Genesis com Suspensão e Jugular CA 36099 Libus</h4>
        <p>
          <span class="estrela">★★★★☆</span>
          <span>4.0</span>
        </p>
        <p class="preco">R$16,97</p>

        <h6>Escolha os tamanhos e quantidades desejadas</h6>
        <table class="table table-bordered text-center">
          <tr>
            <td>Amarelo</td>
            <td>Azul</td>
            <td>Branco</td>
          </tr>
          <tr>
            <td>Cinza</td>
            <td>Laranja</td>
            <td>Verde</td>
          </tr>
        </table>

        <div class="d-flex gap-2">
          <button class="btn btn-secondary">Adicionar ao carrinho</button>
          <button class="btn btn-orange">Comprar</button>
        </div>

        <div class="input-group mt-3">
          <input class="form-control" placeholder="Calcule seu frete">
          <button class="btn btn-dark">CALCULAR</button>
        </div>
      </div>
    </div>

    <!-- Descrição -->
    <div class="mt-4">
      <h5>Descrição longa:</h5>
      <ul>
        Capacete de Segurança Genesis com Suspensão e Jugular - CA 36099 Libus
        Descrição do Produto
        O Capacete de Segurança Genesis com Suspensão e Jugular CA 36099 Libus é a escolha ideal para profissionais que buscam proteção máxima em ambientes de trabalho que exigem segurança rigorosa. Projetado para oferecer resistência e conforto, este capacete é fabricado com materiais de alta qualidade que garantem durabilidade e proteção contra impactos. Equipado com suspensão ajustável e jugular, o capacete Genesis da Libus proporciona uma adaptação perfeita, mantendo-se firme na cabeça durante todo o período de uso.

        <h5>Aplicações:</h5>
        <li>Construção Civil: Essencial para proteger contra quedas de objetos e impactos em ambientes de construção.</li>
        <li>Mineração e Extração: Proporciona segurança em ambientes agressivos onde há risco de desabamento e objetos em queda.</li>
        <li>Indústria de Manufatura: Ideal para trabalhadores que operam em fábricas, oferecendo proteção contra riscos diversos.</li>
        <li>Energia e Infraestrutura: Adequado para profissionais que trabalham em altitudes e instalações elétricas.</li>
        <h5>Diferenciais:</h5>
        <li>Suspensão Ajustável: Sistema de ajuste que proporciona um encaixe seguro e confortável, adaptando-se a diferentes tamanhos de cabeça.</li>
        <li>Design Ergonômico e Leve: Confortável para uso prolongado, com um design aerodinâmico que reduz a fadiga do usuário.</li>
        <li>Resistência e Durabilidade: Fabricado em materiais resistentes que atendem aos mais altos padrões de segurança, garantindo proteção confiável.</li>
        <li>Jugular Integrada: Proporciona estabilidade adicional, garantindo que o capacete permaneça firme durante atividades dinâmicas.</li>
        <h5>Ficha Técnica do Produto:</h5>
        <li>Marca: Libus</li>
        <li>Modelo: Genesis</li>
        <li>Certificado de Aprovação (CA): 36099</li>
        <li>Material: Polietileno de alta densidade</li>
        <li>Cor: Disponível em várias cores (dependendo da disponibilidade)</li>
        <li>Peso: Leve, projetado para conforto durante o uso contínuo</li>
        <h5>Usabilidades:</h5>
        <li>Proteção Confiável em Ambientes de Risco: Garante segurança contra impactos e riscos associados a quedas de objetos.</li>
        <li>Versatilidade de Aplicação: Adequado para uma ampla gama de indústrias, oferecendo proteção versátil e eficaz.</li>
        <li>Facilidade de Ajuste e Uso: Sistema de suspensão fácil de ajustar, permitindo rápida adaptação e máximo conforto.</li>
        <li>Economia a Longo Prazo: Construído para durar, oferecendo excelente custo-benefício com menos necessidade de substituições frequentes.</li>
    </div>

    <!-- Avaliações -->
    <div class="mt-5">
      <h5>AVALIAÇÕES</h5>
      <p><span class="estrela">★★★★☆</span> 4.0</p>
      <div class="d-flex align-items-center">
        <i class="fa-solid fa-circle-user"></i>
        <div>
          <strong>NOME_USUARIO</strong>
          <p>[comentário]</p>
        </div>
      </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>