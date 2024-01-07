<?php
class Conexao {
    private $host = 'localhost';
    private $db_name = 'jobsflex_';
    private $username = 'root';
    private $password = '';
    public $conexao;

    public function getConexao(){
        $this->conexao = null;

        try{
            $this->conexao = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception){
            echo "Erro de conexão: " . $exception->getMessage();
        }

        return $this->conexao;
    }
}
?>
