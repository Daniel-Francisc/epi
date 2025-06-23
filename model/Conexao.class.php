<?php
class Conexao{
    #region Atributos
        private $host = 'localhost';
        private $db = 'db_clients';
        private $user = 'root';
        private $psw = "";
        private $link = null;
    #endregion

    #region Métodos
    public function conectarClient(){
        try{
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", "{$this->user}", "{$this->psw}");
            $this->link=$pdo;
            //print("Conectado");
            return $this->link;
        }
        catch(PDOException $e){
            print $e;
        }
    }
}
$obj = new Conexao();
$obj->conectarClient();