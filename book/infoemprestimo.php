<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empréstimos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    /* Estilos para o formulário de pesquisa */
    .search-form {
        margin: 20px 0;
        text-align: center;
    color:#ffffff;
    }

    .search-input {
        padding: 8px;
        margin-right: 10px;
        border: 1px solid #ccc;
        background-color: #521b66;
        color:#ffffff;
    }
    .search-button {
        padding: 8px 20px;
        background-color: #521b66;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    /* Estilos para a tabela de resultados */
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        background-color: #141118;

    }

    th {
    background-color: #521b66;
    color:#ffffff;
    }

    .paginacao {
        margin-top: 20px;
    }

    .paginacao a {
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        margin-right: 5px;
        background-color: #f2f2f2;
        color: #333;
    }

    .paginacao a:hover {
        background-color: #1f1b24;
        color: #ffffff;
    }
    .apagar-btn{
        padding: 8px 20px;
        background-color: #521b66;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</center>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
  <nav>
      <ul class="navbar">
        <li><a href="cadastrarlivros.php">Adicionar Livros</a></li>
        <li><a href="dashboard.php">Voltar</a></li>
      </ul>
    </nav>
<body>
<center>  
    
<h1>Lista de Empréstimos</h1>

    
<form method="GET" action="" class="search-form">
            <input type="text" name="nome" placeholder="pesquisar o nome do aluno" id="nome" class="search-input">
            <input type="text" name="livro" placeholder="pesquisar o nome do livro" id="livro" class="search-input">
            <center>
                <input type="submit" value="Pesquisar" class="search-button">
            </center>
        </form>
<?php
        // Configurações de conexão com o banco de dados (substitua as informações com as suas)
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "locacao";

        // Número de resultados por página
        $resultados_por_pagina = 10;

        // Página atual (por padrão, será a primeira página)
        $pagina = 1;

        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        }

        // Conectando ao banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta SQL para buscar empréstimos com o nome do livro (inclui paginação)
        $sql = "SELECT emprestimo.id, emprestimo.nome, emprestimo.email, acervo.nome AS nome_acervo, emprestimo.data_emprestimo 
            FROM emprestimo 
            INNER JOIN livros.acervo ON emprestimo.livro_id = acervo.id 
            WHERE 1"; // 1 é usado como um valor verdadeiro

        // Verifica se há parâmetros de pesquisa e adiciona à consulta SQL
        if (isset($_GET['nome']) && !empty($_GET['nome'])) {
            $nome = $_GET['nome'];
            $sql .= " AND emprestimo.nome LIKE '%$nome%'";
        }

        if (isset($_GET['livro']) && !empty($_GET['livro'])) {
            $livro = $_GET['livro'];
            $sql .= " AND acervo.nome LIKE '%$livro%'";
        }

        $sql .= " LIMIT " . (($pagina - 1) * $resultados_por_pagina) . ", " . $resultados_por_pagina;

        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Livro</th><th>Data de Empréstimo</th><th>Ação</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='color: white;'>" . $row["id"] . "</td>";
                    echo "<td style='color: white;'>" . $row["nome"] . "</td>";
                    echo "<td style='color: white;'>" . $row["email"] . "</td>";
                    echo "<td style='color: white;'>" . $row["nome_acervo"] . "</td>";
                    echo "<td style='color: white;'>" . $row["data_emprestimo"] . "</td>";
                    echo "<td><button class='apagar-btn' data-id='" . $row["id"] . "'>Apagar</button></td>";
                    echo "</tr>";
                }

                echo "</table>";

                // Cálculo da quantidade total de páginas
                $sql = "SELECT COUNT(*) AS total FROM emprestimo";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_resultados = $row['total'];
                $total_paginas = ceil($total_resultados / $resultados_por_pagina);

                // Exibindo links para navegação entre páginas
                echo "<div class='paginacao'>";
                for ($pagina = 1; $pagina <= $total_paginas; $pagina++) {
                    echo "<a href='?pagina=" . $pagina . "'>" . $pagina . "</a> ";
                }
                echo "</div>";
            } else {
                echo "Nenhum empréstimo encontrado.";
            }
        } else {
            echo "Erro na consulta: " . $conn->error;
        }

        $conn->close();
        ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".apagar-btn");

        buttons.forEach(function (button) {
            button.addEventListener("click", function () {
                const emprestimoId = this.getAttribute("data-id");
                const currentButton = this; // Armazena a referência do botão atual

                // Aqui você faz a solicitação AJAX para excluir o empréstimo
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "excluir_emprestimo.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            // Remova a linha da tabela usando a referência armazenada
                            currentButton.closest('tr').remove();

                            // Aqui você faz a solicitação AJAX para aumentar o estoque do livro
                            const xhrEstoque = new XMLHttpRequest();
                        xhrEstoque.open("POST", "aumentar_estoque.php", true);
                        xhrEstoque.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhrEstoque.onreadystatechange = function () {
                            if (xhrEstoque.readyState === 4 && xhrEstoque.status === 200) {
                                const responseEstoque = JSON.parse(xhrEstoque.responseText);
                                if (responseEstoque.success) {
                                    // Atualização do estoque bem-sucedida
                                } else {
                                    alert('Erro ao aumentar o estoque do livro.');
                                }
                            }
                        };
                        xhrEstoque.send("emprestimoId=" + emprestimoId); // Alteração aqui
                            xhrEstoque.send("emprestimoId=" + emprestimoId); // Alteração aqui
                        } 
                    }
                };
                xhr.send("id=" + emprestimoId);
            });
        });
    });
</script>



</body>

</html>
