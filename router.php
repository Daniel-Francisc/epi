<?php
#region Não sei o que é mas é obigatório!!!
//pegar a url
$url = explode('?', $_SERVER['REQUEST_URI']);
//escolher na variável $url do link desejado
$pagina = $url[1];

#ROTAS DE REDIRECIONAMENTO
//redirecionar para pagina informada
if (isset($pagina)) {
    $objController = new Controller();
    $objController->pagina($pagina);
}
#endregion

if (isset($_POST['Entrar'])) {
    $obj = new Controller;
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $obj->Login($email, $senha);
}

if (isset($_POST['Cadastrar'])) {
    $obj = new Controller;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $obj->inserir_cliente($nome, $email, $senha);
}

if (isset($_POST['Recuperar'])) {
    $obj = new Controller;
    $email = $_POST['email'];
    $obj->recuperarSenha($email);
}

if (isset($_POST['Sair'])) {
    $obj = new Controller;
    $obj->Sair();
}
