<?php
session_start();

// Verifica se o usuário está logado
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: white;
            border: white 2px solid;
            border-radius: 30px;
            padding: 10px 10px; 
        }

        .book-card {
            background-color: #CDB3FF;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .book-card img {
            border-radius: 8px;
            max-width: 200px;
            height: auto;
            margin-right: 20px;
        }

        .book-card-content {
            flex: 1;
        }

        .book-card h2 {
            color: #000000;
            margin-top: 0;
        }

        .book-card p {
            color: #666;
        }

        .book-card .category {
            font-weight: bold;
        }

        .book-card .synopsis {
            margin-top: 10px;
        }

        .details-button {
            background-color: #9B67FF;
            color: #000;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
        }

        .botão{
            background-color: #8700FF;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            position: absolute;
            top:3em;
            }
    .funto{
    background-color: #000000;
    color: #CDB3FF;
}
    </style>
</head>
<body class="funto">
    
    <h1 class="titulo">SUA PESQUISA FOI ESSA:</h1>
    
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "livros";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if (isset($_GET['categoria']) or isset($_GET['titulo'])) {            
            if (isset($_GET['categoria'])){
                $categoria = $_GET['categoria'];
            }
            if (isset($_GET['titulo'])){
                $titulo = $_GET['titulo'];
                "SELECT * FROM acervo 
                WHERE nome LIKE '%$titulo%'";

            };
   
            $sql = "SELECT * FROM acervo 
                    WHERE (categoria LIKE '%$categoria%' 
                         OR FIND_IN_SET('romance', categoria)
                         OR FIND_IN_SET('terror', categoria)
                         OR FIND_IN_SET('ação', categoria)
                         OR FIND_IN_SET('infantil', categoria)
                         OR FIND_IN_SET('estudos', categoria))
                         ";
    
            $result = $pdo->query($sql);
    
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="book-card">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" alt="' . $row['nome'] . '" width="200">';
                    echo '<div class="book-card-content">';
                    echo '<h2>' . $row['nome'] . '</h2>';
                    echo '<p>Categoria: <span class="category">' . $row['categoria'] . '</span></p>';
                    echo '<p>Idade de Leitura: ' . $row['Idadeleitura'] . '</p>';
                    echo '<p>' . $row['sinopse'] . '</p>';
                    echo '<a href="infolivros.php?id=' . $row['id'] . '" class="details-button">Detalhes</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } 
            else {
                echo "<p>Nenhum livro encontrado nas categorias relacionadas.</p>";
            }
        }
    
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
     
    ?>


</body>
</html>
