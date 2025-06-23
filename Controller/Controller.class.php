<?php

use function PHPSTORM_META\type;

class Controller
{

    public function pagina($pagina)
    {
        session_start();
        $menu = $this->menu();
        require_once 'view/' . $pagina . '.php';
    }

    public function Sair()
    {
        session_start();
        session_destroy();
        header('Location: principal.php');
        exit;
    }

    public function Login($email, $senha)
    {
        $obj = new Cliente;
        if ($obj->validarCliente($email, $senha) == true) {
            session_start();
            //print('logado!');die();
            $message = 'Bem vindo de volta!';
            $type = 'success';
            $_SESSION['email'] = $email;
            $this->consultar_sessao($email);
            include_once 'principal.php';
        } else {
            session_start();
            //print("não logado");die();
            $_SESSION['email'] = null;
            $message = 'Usuario não cadastrado!';
            $type = 'warning';
            include_once 'principal.php';
        }
        $this->Toast($message, $type);
    }

    public function recuperarSenha($email)
    {
        //instanciar a classe Usuário
        $obj = new Cliente();
        //verificar se email existe
        if ($obj->validarEmail($email) == true) {
            //gerar nova senha
            $novaSenha = substr(md5(date("YmdHis")), 0, 8);
            $senha = $novaSenha;

            if ($obj->alterarClienteSenha($senha, $email) != true) {
                include_once 'principal.php';
                $this->Toast("Erro ao atualizar a senha!", "danger");
                return;
            }

            // dados do e-mail...
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'senacdf.operadormicro@gmail.com';
            $mail->Password = 'uetz ezsn jjuy klyo';

            $mail->setFrom('senacdf.operadormicro@gmail.com', 'SISTEMA SGL');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Recuperação de Senha - SGL';
            $mail->Body = '<br>Sua nova senha é: <b>' . $novaSenha . '</b>';
            $mail->CharSet = 'UTF-8';

            try {
                $mail->send();
                include_once 'principal.php';
                $this->Toast("Nova senha enviada para o e-mail informado!", "success");
            } catch (Exception $e) {
                include_once 'principal.php';
                $this->Toast("Erro ao enviar e-mail: {$mail->ErrorInfo}", "danger");
            }
        } else {
            include_once 'principal.php';
            $this->Toast("Email não cadastrado!", "warning");
        }
    }

    public function inserir_cliente($nome, $email, $senha)
    {
        $obj = new Cliente;
        if ($obj->validarEmail($email) != true) {
            if (($obj->inserirCliente($nome, $email, $senha) == true)) {
                $message = 'Cadastrado com sucesso!';
                $type = 'success';
                //print("cadastrado!");die();
            } else {
                $message = 'Falha ao Cadastrar!';
                $type = 'danger';
            }
        } else {
            $message = 'Email já Cadastrado!';
            $type = 'warning';
            //print("não cadastrado!");die();
        }
        session_start();
        include_once 'principal.php';
        $this->Toast($message, $type);
    }

    public function consultar_sessao($email)
    {
        session_start();
        $obj = new Cliente;
        $objeto = $obj->consutarClienteNome($email);
        foreach ($objeto as $value) {
            $_SESSION['perfil'] = $value->nome;
        }
    }

    public function Toast($message, $type)
    {
        print ' <div class="toast align-items-center text-bg-' . $type . ' border-0 position-fixed bottom-0 end-0 m-3"';
        print '        role="alert" aria-live="assertive" aria-atomic="true" id="meu-toast">';
        print '      <div class="d-flex">';
        print '       <div class="toast-body">' . $message . '</div>';
        print '       <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>';
        print '     </div>';
        print '   </div>';

        print '   <script>';
        print '     document.addEventListener("DOMContentLoaded", function () {';
        print '       const toast = new bootstrap.Toast(document.getElementById("meu-toast"));';
        print '       toast.show();';
        print '    });';
        print '</script>';
    }

    public function menu()
    {
        print '  <!-- header -->';
        print '  <div class="top-bar d-flex flex-wrap justify-content-between align-items-center text-bg-warning">';
        print '    <div class="btn mx-auto brand"><a href="Principal.php" style="color: inherit; text-decoration: none;">EPI do Abelardo</a></div>';
        print '    <div>';
        if ($_SESSION['email'] == null) {
            print('<button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">entrar</button>');
        } else {
            print '<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-person-fill fs-3"></i></button>';
        }
        print '    </div>';
        print '  </div>';
        print '  <!-- categorias -->';
        print '  <div class="category-bar d-flex justify-content-between align-items-center flex-wrap gap-2 p-2 bg-light">';
        print '    <div class="d-flex flex-wrap gap-2 justify-content-between">';
        $categorias = [
            ['nome' => 'Construção civil', 'classe' => 'text-bg-warning'],
            ['nome' => 'Elétrica', 'classe' => 'dark'],
            ['nome' => 'Cozinha', 'classe' => 'text-bg-warning'],
            ['nome' => 'Bombeiros', 'classe' => 'dark'],
            ['nome' => 'Quimicos', 'classe' => 'text-bg-warning'],
            ['nome' => 'Mais...', 'classe' => 'dark']
        ];

        foreach ($categorias as $cat) {
            print '      <button class="btn flex-fill" style="min-width: 130px; flex: 1;">';
            print '        <span class="categoria-btn ' . $cat['classe'] . ' w-100 text-center">' . $cat['nome'] . '</span>';
            print '      </button>';
        }
        print '    </div>';
        print '    <form action="">';
        print '      <div class="d-flex align-items-center">';
        print '        <button class="btn btn-dark" style="margin: 5px;"><i class="bi bi-search me-2"></i></button>';
        print '        <input type="text" class="search-box form-control form-control-sm" placeholder="Busque por Nome ou tipo...">';
        print '      </div>';
        print '    </form>';
        print '  </div>';
        //off canvas
        print ' <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">';
        print ' <div class="offcanvas-header">';
        print '   <h5 class="offcanvas-title" id="offcanvasRightLabel">' . $_SESSION["perfil"] . '</h5>';
        print '   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>';
        print ' </div>';
        print '  <div class="offcanvas-body">';
        print '<form action="index.php" method="post" class="d-flex flex-column align-items-center">';
        print '  <div class="mb-3" style="width: 80%;">';
        print '    <input class="form-control" type="search" name="pesquisa" placeholder="Buscar produto..." aria-label="Pesquisar">';
        print '  </div>';
        print '  <div class="mb-3" style="width: 80%;">';
        print '    <button class="btn btn-outline-success w-100" type="submit" name="Buscar">Pesquisar</button>';
        print '  </div>';
        print '  <div style="width: 80%;">';
        print '    <input type="submit" name="Sair" class="btn btn-danger w-100" value="Sair">';
        print '  </div>';
        print '</form>';
        print '</form>';
        print '</div>';
        print '</div>';
    }
}
