<?php
include_once 'conexao.php'; // Incluindo o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Supondo que o campo no formulário seja 'senha'

    try {
        $conexao = new Conexao(); // Criando uma instância da classe de conexão
        $pdo = $conexao->getConexao(); // Obtendo a conexão PDO

        // Preparando a consulta SQL para inserção na tabela 'login'
        $sql = "INSERT INTO login (email, senha) VALUES (:email, :senha)";
        $stmt = $pdo->prepare($sql);

        // Executando a inserção dos dados do formulário na tabela 'login'
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Redirecionamento após inserção bem-sucedida, se desejado
        header("Location: pagina_de_sucesso.php");
        exit();
    } catch(PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
} else {
    // Se não for uma requisição POST, redirecione para página de erro ou faça algo adequado
    header("Location: pagina_de_erro.php");
    exit();
}
?>
