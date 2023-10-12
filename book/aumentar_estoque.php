<?php
// Configurações de conexão com o banco de dados (substitua com suas informações)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "livros";

// Verifique se o ID do empréstimo a ser excluído foi enviado via POST
if (isset($_POST['emprestimoId'])) {
    $emprestimoId = $_POST['emprestimoId'];

    // Conectando ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para obter o ID do livro associado ao empréstimo
    $sql = "SELECT livro_id FROM emprestimo WHERE id = $emprestimoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $livroId = $row['livro_id'];

        // Consulta SQL para aumentar a quantidade disponível do livro
        $updateSql = "UPDATE livros.acervo SET estoque = estoque + 1 WHERE id = $livroId";

        if ($conn->query($updateSql) === TRUE) {
            // Aumento do estoque bem-sucedido
            $response = array('success' => true);
            echo json_encode($response);
        } else {
            // Erro ao atualizar o estoque do livro
            $response = array('success' => false);
            echo json_encode($response);
        }
    } 

    $conn->close();
}
?>