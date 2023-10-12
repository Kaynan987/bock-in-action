<?php
// Configurações de conexão com o banco de dados (substitua com suas informações)
$servername = "localhost";
$username = "root";
$password = "root";
$dbnameLocacao = "locacao"; // Substitua pelo nome correto do banco de dados de locação
$dbnameLivros = "livros"; // Substitua pelo nome correto do banco de dados de livros

// Verifique se o ID do empréstimo foi enviado via POST
if (isset($_POST['id'])) {
    $emprestimoId = $_POST['id'];

    // Conectando ao banco de dados de locação
    $connLocacao = new mysqli($servername, $username, $password, $dbnameLocacao);

    if ($connLocacao->connect_error) {
        die("Erro na conexão com o banco de dados de locação: " . $connLocacao->connect_error);
    }

    // Consulta SQL para excluir o empréstimo na tabela de locação
    $sqlLocacao = "DELETE FROM emprestimo WHERE id = $emprestimoId";

    if ($connLocacao->query($sqlLocacao) === TRUE) {
        // Exclusão bem-sucedida na tabela de locação, agora vamos aumentar o estoque na tabela de livros

        // Conectando ao banco de dados de livros
        $connLivros = new mysqli($servername, $username, $password, $dbnameLivros);

        if ($connLivros->connect_error) {
            die("Erro na conexão com o banco de dados de livros: " . $connLivros->connect_error);
        }

        // Consulta SQL para obter o ID do livro associado ao empréstimo na tabela de locação
        $sqlLivros = "SELECT livro_id FROM emprestimo WHERE id = $emprestimoId";
        $resultLivros = $connLocacao->query($sqlLivros);

        if ($resultLivros->num_rows > 0) {
            $rowLivros = $resultLivros->fetch_assoc();
            $livroId = $rowLivros['livro_id'];

            // Consulta SQL para aumentar a quantidade disponível do livro na tabela de livros
            $updateSqlLivros = "UPDATE acervo SET quantidade_disponivel = quantidade_disponivel + 1 WHERE id = $livroId";

            if ($connLivros->query($updateSqlLivros) === TRUE) {
                // Aumento do estoque do livro bem-sucedido na tabela de livros
                $response = array('success' => true);
                echo json_encode($response);
            } else {
                // Erro ao aumentar o estoque do livro na tabela de livros
                $response = array('success' => false, 'message' => $connLivros->error);
                echo json_encode($response);
            }
        } else {
            // Empréstimo não encontrado na tabela de locação
            $response = array('success' => false, 'message' => 'Empréstimo não encontrado na tabela de locação');
            echo json_encode($response);
        }

        $connLivros->close();
    } else {
        // Erro ao excluir na tabela de locação
        $response = array('success' => false, 'message' => $connLocacao->error);
        echo json_encode($response);
    }

    $connLocacao->close();
}
?>