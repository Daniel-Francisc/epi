<?php

require_once 'Conexao.class.php';

class Produto extends Conexao
{
    #region Atributos
    private $id_produto;
    private $produto;
    private $preco_unitario;
    private $categoria;
    private $descricao;
    private $qtd;
    private $id_fornecedor;
    private $valor_total;
    private $cor;
    #endregion
    #region Objetos
    public function getIdProduto()
    {
        return $this->id_produto;
    }
    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    public function getProduto()
    {
        return $this->produto;
    }
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }
    public function getPrecoUnitario()
    {
        return $this->preco_unitario;
    }
    public function setPrecoUnitario($preco_unitario)
    {
        $this->preco_unitario = $preco_unitario;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getQtd()
    {
        return $this->qtd;
    }
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }
    public function setIdFornecedor($id_fornecedor)
    {
        $this->id_fornecedor = $id_fornecedor;
    }

    public function getValorTotal()
    {
        return $this->valor_total;
    }
    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    #endregion
    #region Inserir Produto
    public function inserirProduto()
    {
        $sql = "INSERT INTO tb_produtos (produto, preco_unitario, categoria, descricao, qtd, id_fornecedor, valor_total, cor)
                VALUES (:produto, :preco_unitario, :categoria, :descricao, :qtd, :id_fornecedor, :valor_total, :cor)";

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':produto', $this->getProduto(), PDO::PARAM_STR);
            $query->bindValue(':preco_unitario', $this->getPrecoUnitario());
            $query->bindValue(':categoria', $this->getCategoria(), PDO::PARAM_STR);
            $query->bindValue(':descricao', $this->getDescricao(), PDO::PARAM_STR);
            $query->bindValue(':qtd', $this->getQtd(), PDO::PARAM_INT);
            $query->bindValue(':id_fornecedor', $this->getIdFornecedor(), PDO::PARAM_INT);
            $query->bindValue(':valor_total', $this->getValorTotal());
            $query->bindValue(':cor', $this->getCor(), PDO::PARAM_STR);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            print "Erro ao inserir produto: " . $e->getMessage();
            return false;
        }
    }
    #endregion

    #region Listar Produtos
    public function listarProdutos()
    {
        $sql = "SELECT * FROM tb_produtos ORDER BY produto";

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            print "Erro ao listar produtos: " . $e->getMessage();
            return false;
        }
    }
    #endregion

    #region Buscar Produto por ID
    public function buscarProduto($produto,$descricao)
    {   
        $this->setProduto($produto);
        $this->setDescricao($descricao);
        $sql = "SELECT * FROM tb_produtos WHERE produto LIKE :produto OR descricao LIKE :descricao";

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue('::produto', $this->getDescricao(), PDO::PARAM_STR);
            $query->bindValue(':DESCRICAO', $this->getProduto(), PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            print "Erro ao buscar produto: " . $e->getMessage();
            return false;
        }
    }
    #endregion

    #region Atualizar Produto
    public function atualizarProduto()
    {
        $sql = "UPDATE tb_produtos SET 
                    produto = :produto,
                    preco_unitario = :preco_unitario,
                    categoria = :categoria,
                    descricao = :descricao,
                    qtd = :qtd,
                    id_fornecedor = :id_fornecedor,
                    valor_total = :valor_total,
                    cor = :cor
                WHERE id_produto = :id";

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':produto', $this->getProduto(), PDO::PARAM_STR);
            $query->bindValue(':preco_unitario', $this->getPrecoUnitario());
            $query->bindValue(':categoria', $this->getCategoria(), PDO::PARAM_STR);
            $query->bindValue(':descricao', $this->getDescricao(), PDO::PARAM_STR);
            $query->bindValue(':qtd', $this->getQtd(), PDO::PARAM_INT);
            $query->bindValue(':id_fornecedor', $this->getIdFornecedor(), PDO::PARAM_INT);
            $query->bindValue(':valor_total', $this->getValorTotal());
            $query->bindValue(':cor', $this->getCor(), PDO::PARAM_STR);
            $query->bindValue(':id', $this->getIdProduto(), PDO::PARAM_INT);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            print "Erro ao atualizar produto: " . $e->getMessage();
            return false;
        }
    }
    #endregion

    #region Deletar Produto
    public function deletarProduto($id_produto)
    {
        $sql = "DELETE FROM tb_produtos WHERE id_produto = :id";

        try {
            $db = $this->conectarClient();
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id_produto, PDO::PARAM_INT);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            print "Erro ao deletar produto: " . $e->getMessage();
            return false;
        }
    }
    #endregion
}
