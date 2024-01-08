<?php
require_once 'conexao.php'; // Incluindo o arquivo de conexão

class InsertAction {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao(); // Instanciação da classe de conexão
    }

    public function inserirUsuario($nome, $datanasc, $id_idlogin) {
        try {
            $conexao = $this->conexao->getConexao();

            $query = "INSERT INTO usuario (nome, datanasc, id_idlogin) VALUES (:nome, :datanasc, :id_idlogin)";
            $stmt = $conexao->prepare($query);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':datanasc', $datanasc);
            $stmt->bindParam(':id_idlogin', $id_idlogin);

            $stmt->execute();

            return true; // Inserção bem-sucedida
        } catch(PDOException $exception) {
            echo "Erro ao inserir usuário: " . $exception->getMessage();
            return false; // Falha na inserção
        }
    }

    public function inserirLogin($email, $senha) {
        try {
            $conexao = $this->conexao->getConexao();

            $query = "INSERT INTO login (email, senha) VALUES (:email, :senha)";
            $stmt = $conexao->prepare($query);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);

            $stmt->execute();

            return $conexao->lastInsertId(); // Retorna o ID do último registro inserido
        } catch(PDOException $exception) {
            echo "Erro ao inserir login: " . $exception->getMessage();
            return false; // Falha na inserção
        }
    }
}

$insertAction = new InsertAction(); // Instanciação da classe de ação de inserção

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Supondo que o campo no formulário seja 'senha'
    $nome = $_POST['nome'];
    $datanasc = $_POST['datanasc'];

    $id_login = $insertAction->inserirLogin($email, $senha);

    if ($id_login) {
        if ($insertAction->inserirUsuario($nome, $datanasc, $id_login)) {
            header("Location: meuPerfilTrabalhador.php");
            exit();
        } else {
            header("Location: cadastro.html");
            exit();
        }
    } else {
        header("Location: cadastro.html");
        exit();
    }
} else {
    // Se não for uma requisição POST, redirecione para página de erro ou faça algo adequado
    header("Location: cadastro.html");
    exit();
}
?>


