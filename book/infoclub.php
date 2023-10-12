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
    /* Reset de estilos para remover margens e preenchimentos padrão do navegador */
/* Reset de estilos para remover margens e preenchimentos padrão do navegador */
body, h1, img, p {
    margin: 0;
    padding: 0;
}

/* Define uma cor de fundo preto e estilos de fonte para a página */
body {
    font-family: Arial, sans-serif;
    background-color: #000; /* Cor de fundo preta */
    color: #fff; /* Cor do texto branca */
    text-align: center; /* Centraliza o conteúdo horizontalmente */
    padding: 20px;
}

/* Estiliza o cabeçalho h1 */
h1 {
    font-size: 36px;
    margin-top: 20px;
    margin-bottom: 20px;
}

/* Estiliza a imagem do livro */
img {
    max-width: 100%;
    height: auto;
    margin: 20px auto; /* Centraliza a imagem horizontalmente com margem superior e inferior */
}

/* Estiliza o texto do livro */
h3 {
    font-size: 24px;
    margin-top: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 10px;
}

/* Estiliza o link de volta */
a {
    color: #0078d4;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.hotbartext1 {
  border: white 1px solid;
  border-radius: 20px;
  padding: 10px 10px;
  color: #fff; 
 

}


  </style>
</head>
<body>
<a  href="index.php" class="hotbartext1">VOLTAR</a>
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
        $sql = $pdo->prepare("SELECT * FROM club WHERE id = :id");
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
