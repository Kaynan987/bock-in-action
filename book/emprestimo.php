<!-- ฅ•ω•ฅ -->
<?php
session_start();

// Verifica se o usuário está logado
function isLoggedIn()
{
  return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Livros</title>

  <style>
    /* Estilos gerais */
body {
  font-family: Arial, sans-serif;
  background-color: black;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Estilos do cabeçalho */
header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
  text-align: left;
  display: flex;
  justify-content: center;
  align-items: center;
}


.cab {
  margin-top: 10px;
  flex-grow: 1; /* Os elementos .cab ocuparão o espaço restante */
}

.hotbartext1 {
  text-decoration: none;
  color: #fff;
  margin: 0 10px;
  font-family: arial, monospace;
  font-weight: bold;

}

.hotbartext1:hover {
  text-decoration: underline;
}



/* Estilos do formulário */
.formulario {
  max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.formulario h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.formulario label {
  display: block;
  margin-bottom: 5px;
}

.formulario input[type="text"],
.formulario input[type="date"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.formulario input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.formulario input[type="submit"]:hover {
  background-color: #555;
}

/* Mensagens de sucesso e erro */
.mensagem-sucesso {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  margin: 10px 0;
  border-radius: 3px;
}

.mensagem-erro {
  background-color: #FF5733;
  color: white;
  padding: 10px;
  margin: 10px 0;
  border-radius: 3px;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Estilo Global */
    body {
      font-family: Arial, sans-serif;
      background-color: #1D1D1D;
      color: #000000;

    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Estilos do Cabeçalho */
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

    .logo img {
      width: 70px;
    }

    .logo {
      margin-inline: 40px;
    }

    .book-list {
      padding: 40px 0;
      text-align: center;
    }

    .book-list h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .book-list ul {
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      padding: 0;
    }

    .book-list ul li {
      width: 30%;
      /* Add the following two properties to center the cards */
      display: flex;
      justify-content: center;

    }

    /* esse de baixo */
    .book-card {
      background-color: #E0E0E0;
      color: #000000;
      border-radius: 0%;
      padding: 5px;
      width: 250px;
      /* Largura desejada para cada elemento de livro */
      margin: 10px;
      /* Espaçamento entre os elementos */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }



    .btn-secondary:hover {
      background-color: #555;
    }

    /* Estilos do Rodapé */
    footer {
      background-color: #333;
      padding: 10px;
      text-align: center;
    }

    footer p {
      color: #ffffff;
    }


    /* Estilo do botão de alternar modo */

    header {
      /* Estilos do cabeçalho no modo claro */
      background-color: #1D1D1D;
      display: flex;
      align-items: center;
      flex-direction: row;
      align-content: center;
    }

    .hotbartext1 {
      font-family: "Helvetica", sans-serif;
      font-weight: bold;
      color: #FFFFFF;
      height: min-content;
    }

    .botão {
      background-color: #B79BD8;
      border-radius: 10px;
      position: fixed;
      left: 90%;
      color: white;
      top: 90%;
      height: 20px;
    }


    /* Estilo para estrelas inativas */



    body {
      font-family: Arial, sans-serif;
      background-color: #252525;
      color: #333;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .main {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .lista-livros {
      margin-top: 5em;
      width: 90%;
      display: flex;
      flex-flow: row wrap;
      justify-content: space-between;
      row-gap: 50px;
    }

    .cartao {
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 250px;
      gap: 10px;
    }

    .cartao img {
      width: 200px;
      height: 300px;
      border-radius: 20px;
    }

    .imagem {
      padding: 5px;
      display: flex;
      align-items: center;
      border-radius: 20px;
      background-image: linear-gradient(to bottom, purple, blue);
    }

    .btn-secondary {
      background-color: #333;
      color: #7233DF;
      font-weight: bolder;
      text-decoration: none;
      border: white 0px solid;
      border-radius: 250px;
      background-color: #FFFFFF;
      padding: 5px;
      text-align: center;
      width: 200px;
    }

    .btn-secondary2 {
      background-color: transparent;
      color: white;
      font-weight: bolder;
      text-decoration: none;
      border: solid white 1px;
      border-radius: 250px;
      padding: 5px;
      text-align: center;
      width: 250px;
    }



    .bannr {
      display: flex;
      padding: 1em;
      justify-content: center;
    }

    .corzinha {
      border-radius: 10px;
      width: 90%;
      background: rgb(99, 67, 135);
      background: linear-gradient(76deg, rgba(99, 67, 135, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px;
    }

    .white {
      color: white;
    }

    .bolinhast {
      width: 10px;
      height: 10px;
    }


    .cab {
      display: flex;
      align-items: center;
      gap: 7px;
      width: 100%;
    }

    .cab a {
      padding: 7px;
      text-decoration: none;
      padding-inline: 10px;
      border-radius: 5px;
      transition-duration: 100ms;
    }

    .cab a:hover {
      background-color: #0000005D;
    }

    .botaozinho {
      width: 25px;
      background-color: transparent;
      color: white;
      border: none;

    }

    .hidden {
      display: none;
    }

    .navLateral {
      background-color: #161616;
      position: fixed;
      inset: 0;
      left: 0;
      height: 100%;
      width: 15%;
    }
    
   

  
  .user-status{
    position: absolute;
    left: 1050px;
    bottom: 15px;
    color: white;
    padding: 10px 10px;
    border: white 1px solid;
    border-radius: 10px;
  }
  
  </style>
</head>

<body>
<header style="z-index: 40;">

<a href="index.php" class="logo">
  <img src="https://media.discordapp.net/attachments/1110882147201454142/1141344175133036594/logogk.png"></a>
<div class="cab">
  <a href="index.php" class="hotbartext1">INÍCIO</a>
  <a href="cadastro.php" class="hotbartext1">CONTA</a>
  
  <?php
if (isset($_SESSION['email']) && $_SESSION['email'] == 'root@root.com') {
    echo '<a href="dashboard.php" class="hotbartext1">ADMIN</a>';
}
?>      
  <a href="clube.php" class="hotbartext1">CLUBE</a>

  <?php
  if (isset($_SESSION['email'])) {
// Usuário está conectado, exibir o status
    echo '<li><a class="hotbartext1" href="logout.php">Sair</a><p class="user-status">Conectado como: ' . $_SESSION['email'] . '</p></li>';
  } else {
    // Usuário não está conectado, exibir mensagem alternativa
    echo '<li><a href="login.php" class="hotbartext1">entrar</a><p class="user-status">Você não está em nenhuma conta</p></li>';
    }?>


</header>

  <div class="flex">
    <div id="nav-Lateral" style="margin-bottom:100px;" class="white navLateral hidden">
      <!-- Conteúdo da barra lateral -->
    </div>
    <div id="espacamento" class="esquerda hidden">
    
    </div>
    <center>
      <?php

      // Conexão com o banco de dados
      $host = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "locacao";

      $conn = new mysqli($host, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
      }

      // Verifica se o formulário foi enviado
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $data_emprestimo = $_POST['data_emprestimo'];
        $livro_id = $_POST['livro_id'];

        // Prepara e executa a inserção no banco de dados

        $sql = "INSERT INTO emprestimo (nome, email, data_emprestimo, livro_id) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
          die("Erro na preparação da consulta: " . $conn->error);
        }

        $result = $stmt->bind_param("sssi", $name, $email, $data_emprestimo, $livro_id);

        if (!$result) {
          die("Erro ao vincular parâmetros: " . $conn->error);
        }

        if ($stmt->execute()) {
          echo '<div class="mensagem-sucesso">Empréstimo adicionado com sucesso!</div>';

          // Diminui o estoque do livro
          $sql = "UPDATE livros.acervo SET estoque = estoque - 1 WHERE id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("i", $livro_id);
          $stmt->execute();
      
          echo "
          
          <script>
          window.location.replace('index.php');
          </script>
          ";

        } else {
          echo '<div class="mensagem-erro">Erro ao adicionar empréstimo: ' . $stmt->error . '</div>';
        }

        $stmt->close();
      }
      ?>

      <?php

      echo '<div class="formulario">';
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
        }


        if ($post['estoque'] > 0) {
          // Atualize o estoque após um empréstimo bem-sucedido
          $sql = "UPDATE acervo SET estoque = estoque - 1 WHERE id = :livro_id";
          $stmt = $pdo->prepare($sql);
          $stmt->bindParam(":livro_id", $livro_id, PDO::PARAM_INT);
          $stmt->execute();


          // Verificar se o usuário está conectado
          if (isLoggedIn()) {
    // Obtém o email da conta do usuário logado
    $emailUsuarioLogado = $_SESSION['email'];

    '<center>';
    // Mostrar o formulário de reserva com o email preenchido
    echo '<div class="formulario">';
    echo '<h1>Reservar livros</h1>';
    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';
    echo '<label for="nome">Nome:</label>';
    echo '<input type="text" id="nome" name="nome" required>';
    echo '<br>';
    echo '<label for="email">Email:</label>';
    echo '<input type="text" id="email" name="email" required value="' . $emailUsuarioLogado . '">';
    echo '<br>';
    echo '<label for="data_emprestimo">Data de Empréstimo:</label>';
    echo '<input type="date" id="data_emprestimo" name="data_emprestimo" required>';
    echo '<br>';
    echo '<input type="hidden" name="livro_id" value="' . $id . '">';
    echo '<br>';
    echo '<input type="submit" value="Adicionar Empréstimo">';
    echo '</form>';
    echo '</div>';
    echo "<h2>Detalhes do Livro</h2>";
    echo "<img src='data:image/jpeg;base64," . base64_encode($post['imagem']) . "' alt='" . $post['nome'] . "' width='200'>";
    echo "<h3>" . $post['nome'] . "</h3>";
    echo "<p>" . $post['sinopse'] . "</p>";
    echo "<p>Idade de Leitura: " . $post['Idadeleitura'] . "</p>";
    echo "<p>Páginas: " . $post['paginas'] . "</p>";
} else {
    // Usuário não está conectado, mostrar mensagem de login
    echo '<div class="formulario">';
    echo '<h1>Reservar livros</h1>';
    echo '<p class="textlogin">Para reservar um livro, é necessário estar conectado em uma conta.</p>';
    echo '<p><a class="botaologin" href="login.php">Faça login</a> ou <a class="botaologin" href="cadastro.php">registre-se</a> para continuar.</p>';
    echo '</div>';
}
'</center>';
        } else {
          echo '<h1><div class="mensagem-erro">Este livro não está disponível para aluguel no momento.</div></h1>';
        }
      } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
      }

      ?>
    </center>
  </div>
  </div>
</body>

</html>