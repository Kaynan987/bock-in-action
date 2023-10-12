<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Certifique-se de realizar a validação adequada dos dados recebidos do formulário

    // Conecte-se ao banco de dados (substitua pelos detalhes do seu banco)
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'root';
    $db_name = 'livros';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Obtenha os dados do formulário
    $livro_id = $_POST['livro_id'];
    $novo_nome = $_POST['nome'];
    $novo_estoque = $_POST['estoque'];
    $nova_localizacao = $_POST['localizacao'];
    $novo_disponivel = isset($_POST['disponivel']) ? 1 : 0; // Transforma o checkbox em 0 ou 1
    
    // Atualize os dados do livro no banco
    $sql = "UPDATE acervo SET nome='$novo_nome', estoque=$novo_estoque, localizacao='$nova_localizacao', disponivel=$novo_disponivel WHERE id=$livro_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados do livro atualizados com sucesso.";
    } else {
        echo "Erro na atualização dos dados do livro: " . $conn->error;
    }
    
    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
