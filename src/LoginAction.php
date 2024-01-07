<?php
require_once 'conexao.php'; // Incluindo o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Supondo que o campo no formulário seja 'senha'

    try {
        $conexao = new Conexao(); // Criando uma instância da classe de conexão
        $pdo = $conexao->getConexao(); // Obtendo a conexão PDO

        // Consulta SQL para verificar as credenciais na tabela 'login'
        $sql = "SELECT * FROM login WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($sql);

        // Executando a consulta com os dados fornecidos no formulário
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Verificando se as credenciais correspondem
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado) {
            // Credenciais válidas, redirecionar para página de sucesso ou realizar outras ações
            header("Location: servicos.php");
            exit();
        } else {
            // Credenciais inválidas, redirecionar para página de erro ou mensagem de login inválido
            header("Location: index.php");
            exit();
        }
    } catch(PDOException $e) {
        echo "Erro ao autenticar: " . $e->getMessage();
    }
} else {
    // Se não for uma requisição POST, redirecione para página de erro ou faça algo adequado
    header("Location: index.php");
    exit();
}
?>
