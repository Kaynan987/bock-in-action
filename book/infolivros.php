<!-- ฅ•ω•ฅ -->
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
<link rel="stylesheet" href="style.css">
  
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      color: #333;
      text-align: center;
    }
    
    .book-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .book-card img {
      border-radius: 8px;
      max-width: 500px;
      height: auto;
      margin-right: 20px;
    }
    
    .book-card-content {
      flex: 1;
    }
    
    .book-card h2 {
      color: #333;
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
  </style>
</head>
<body>
  <h1>Biblioteca</h1>
  
  <?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "livros";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = $pdo->prepare("SELECT * FROM acervo WHERE id = :id");
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $post = $sql->fetch(PDO::FETCH_ASSOC);
        

        if ($post) {
            echo "<h2>Detalhes do Livro</h2>";
            echo "<img src='data:image/jpeg;base64," . base64_encode($post['imagem']) . "' alt='" . $post['nome'] . "' width='200'>";
            echo "<h3>" . $post['nome'] . "</h3>";
            echo "<p>" . $post['sinopse'] . "</p>";
            echo "<p>Categoria: " . $post['categoria'] . "</p>";
            echo "<p>Data: " . $post['data'] . "</p>";
            echo "<p>Idade de Leitura: " . $post['Idadeleitura'] . "</p>";
            echo "<p>Páginas: " . $post['paginas'] . "</p>";
            echo "<p>Idioma: " . $post['idioma'] . "</p>";

          } else {
            echo "<p>Livro não encontrado.</p>";
        }
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
  
  
  
  
</body>



</html>
