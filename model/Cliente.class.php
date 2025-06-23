<?php
include_once 'Conexao.class.php';

class Cliente extends Conexao
{
    #region Atributo
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $id_privilegio;
    #endregion

    #region objetos
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getId_privilegio()
    {
        return $this->id_privilegio;
    }
    public function setId_privilegio($id_privilegio)
    {
        $this->id_privilegio = $id_privilegio;
    }
    #endregion

    #region Login 
    public function validarCliente($email, $senha)
    {
        $this->setEmail($email);
        $this->setSenha($senha);

        $sql = 'SELECT COUNT(*) AS q FROM tb_cliente WHERE email = :email and senha = :senha';

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);

            foreach ($resultado as $key => $valor) {
                $quantidade = $valor->q;
            }
            if ($quantidade == 1) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    #endregion

    #region Validar email
    public function validarEmail($email)
    {
        $this->setEmail($email);

        $sql = 'SELECT COUNT(*) AS q FROM tb_cliente WHERE email = :email';
        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return ($resultado->q > 0);
        } catch (PDOException $e) {
            return false;
        }
    }

    #endregion

    #region Sessão
    public function sessaoCliente($email)
    {
        $this->setEmail($email);

        $sql = 'SELECT nome FROM tb_cliente WHERE email = :email';

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($resultado as $key => $valor) {
                $perfil = $valor->descricao;
            }
            return $perfil;
        } catch (PDOException) {
            return false;
        }
    }
    #endregion

    #region Inserir
    public function inserirCliente($nome, $email, $senha)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $sql = "INSERT INTO tb_cliente VALUES (null,:nome,:email,:senha,1)";

        try {
            $db  = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':nome',  $this->getNome(), PDO::PARAM_STR);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
            $query->execute();
            //print "Feito";

            return true;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion

    #region Consultar
    public function consutarClienteGeral($nome)
    {
        $this->setNome($nome);
        $sql = "SELECT * FROM tb_cliente where true ";

        if ($this->getNome() != null) {
            $sql .= " and nome like :nome";
        }

        $sql .= " order by nome";

        try {
            $bd = $this->conectarClient();
            $query = $bd->prepare($sql);

            if ($this->getNome() != null) {
                $this->setNome("%" . $nome . "%");
                $query->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
            }

            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);

            return $resultado;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion
    #region Consultar
    public function consutarClienteNome($email)
    {
        $this->setEmail($email);
        $sql = "SELECT nome FROM tb_cliente where email = :email";

        try {
            $bd = $this->conectarClient();
            $query = $bd->prepare($sql);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);

            return $resultado;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion
    #region Alterar Nome
    public function alterarClienteNome($id, $nome)
    {
        $this->setId($id);
        $this->setNome($nome);

        $sql = "UPDATE tb_cliente SET nome = :nome WHERE id_cliente = :id";

        try {
            $bd = $this->conectarClient();
            $query = $bd->prepare($sql);
            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            $query->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
            $query->execute();
            //print "Feito";
            return true;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion

    #region Alterar Senha
    public function alterarClienteSenha($senha, $email)
    {
        $this->setSenha($senha);
        $this->setEmail($email);

        $sql = "UPDATE tb_cliente SET senha = :senha WHERE email = :email";

        try {
            $bd = $this->conectarClient();
            $query = $bd->prepare($sql);
            $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $query->execute();
            //print "Feito";
            return true;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion

    #region Deletar
    public function excluirCliente($id)
    {
        $this->setId($id);

        $sql = "DELETE FROM tb_cliente WHERE id_cliente = :id";

        try {
            $bd = $this->conectarClient();
            $query = $bd->prepare($sql);
            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            $query->execute();
            //print "Feito";

            return true;
        } catch (PDOException $e) {
            print $e;
            return false;
        }
    }
    #endregion
}

//$obj = new Cliente;
//$obj->inserirCliente('Josias','Josias@email.com','0000');
//$obj->alterarClienteSenha('123456', "Josias@email.com");
//$obj->excluirCliente(1);
/*
$objeto = $obj->consutarClienteGeral('');
foreach ($objeto as $key => $value) {
    print($value->nome);
}
*//*
$objeto =  $obj->consutarClienteNome('Carlos@email.com');
foreach ($objeto as $key => $value) {
    print($value->nome);
}*/