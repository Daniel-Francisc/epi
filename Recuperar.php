<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Recuperar Senha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h4 class="text-center mb-4">Recuperar Senha</h4>
      <form method="POST" action="index.php">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
        </div>
        <div class="d-grid">
          <input type="submit" name="Recuperar" class="btn btn-warning">
        </div>
      </form>

      <div class="mt-3 text-center">
        <a href="principal.php">Voltar ao inicio</a>
      </div>
    </div>
  </div>

</body>
</html>