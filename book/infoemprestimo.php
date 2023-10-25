<!DOCTYPE html>
<?php
session_start();

// Verifica se o usuário está logado
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}
?>
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
    .logo img {
      width: 70px;
    }

    .logo {
      margin-inline: 40px;
    }
    .hotbartext1 {
      font-family: "Helvetica", sans-serif;
      font-weight: bold;
      color: #FFFFFF;
      height: min-content;
    }
    header {
      background-color: #161616;
      display: flex;
      padding: 10px;
      padding-inline: 20px;
      position: sticky;
      width: 100%;
      gap: 10px;
      top: 0;
    }
 header {
      /* Estilos do cabeçalho no modo claro */
      background-color: #1D1D1D;
      display: flex;
      align-items: center;
      flex-direction: row;
      align-content: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <header style="z-index: 40;">
<a href="index.php" class="logo">
  <img src="https://media.discordapp.net/attachments/1110882147201454142/1141344175133036594/logogk.png"></a>
<div class="cab">
<a href="index.php" class="hotbartext1">inicio</a>  
<a href="dashboard.php" class="hotbartext1">VOLTA</a>
<?php
      if (isset($_SESSION['email'])) {
    // Usuário está conectado, exibir o status
        echo '<li><a class="hotbartext1" href="logout.php">Sair</a><p class="user-status">Conectado como: ' . $_SESSION['email'] . '</p></li>';
      } else {
        // Usuário não está conectado, exibir mensagem alternativa
        echo '<li><a href="login.php" class="hotbartext1">entrar</a><p class="user-status">Você não está em nenhuma conta</p></li>';
        }?>
</header>
</head>
<body>

<h1>Lista de Empréstimos</h1>

<form method="GET" action="" class="search-form">
    <input type="text" name="nome" placeholder="pesquisar o nome do aluno" id="nome" class="search-input">
    <input type="text" name="livro" placeholder="pesquisar o nome do livro" id="livro" class="search-input">
    <center>
        <input type="submit" value="Pesquisar" class="search-button">
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
            echo "<td>";
            echo "<form method='POST'>";
            echo "<input type='hidden' name='action' value='delete'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<button class='apagar-btn' type='submit'>Apagar</button>";
            echo "</form>";
            echo "</td>";
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


function getLivroIdFromEmprestimoId($conn, $emprestimoId) {

    $sql = "SELECT livro_id FROM emprestimo WHERE id = $emprestimoId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['livro_id'];
    } else {
        return null;
    }
}

// Manipulador de formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'delete') {
        $emprestimoId = $_POST['id'];

        // Excluir o empréstimo
        $sqlDelete = "DELETE FROM emprestimo WHERE id = $emprestimoId";
        if ($conn->query($sqlDelete) === TRUE) {
            // Atualizar o estoque (adicionar 1)
            $livroId = getLivroIdFromEmprestimoId($conn, $emprestimoId);

      
        }
    }
}
?>
</body>
</html>

