<!-- Digite sua solução para o desafio (AQUI) -->
<?php
// Ativar exibição de erros para podermos ver o que aconteceu
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Conexão com o banco de dados 'exercicio'
$servidor = "localhost";
$usuario  = "root";
$senha    = "Senai@118";
$banco    = "exercicio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se a conexão falhou
if (!$conexao) {
    die("<h3 style='color:red;'>Erro de conexão com o banco de dados: " . mysqli_connect_error() . "</h3>");
}

$mensagem = "";

// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = trim($_POST["nome"] ?? "");
    $preco = $_POST["preco"] ?? "";

    // Validação 
    if (empty($nome)) {
        $mensagem = "<p style='color: red;'>Erro: O nome do produto não pode ficar em branco.</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        $mensagem = "<p style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
    } else {
        // 4. Inserção no banco se for válido
        $nome_limpo = mysqli_real_escape_string($conexao, $nome);
        $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome_limpo', '$preco')";

        if (mysqli_query($conexao, $sql)) {
            $mensagem = "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
        } else {
            $mensagem = "<p style='color: red;'>Erro ao cadastrar: " . mysqli_error($conexao) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <h2>Cadastro de Produtos</h2>

    <!-- Exibe a mensagem de sucesso ou erro -->
    <?php echo $mensagem; ?>

    <!-- Formulário HTML -->
    <form method="POST" action="">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" step="0.01" id="preco" name="preco"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>