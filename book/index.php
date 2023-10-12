<!-- ฅ•ω•ฅ -->
<?php
session_start();

// Verifica se o usuário está logado
function isLoggedIn() {
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
    .flex {
      display: flex;
    }
    .esquerda {
      margin-left: 10%;
    }
    .pusca input[type="text"] {
    border-radius: 10px;
    font-size: 18px;
    border: 0px solid white;
    padding: 5px;
    color: white;
    background-color: #18191b;
    width: 40em;
    margin: 10px;
    height: 50px;
  }

  .pusca button {
    border-radius: 10px;
    font-size: 18px;
    border: 0px solid white;
    padding: 5px 20px;
    color: white;
    background-color: #18191b;
    height: 50px;
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
  .nometext{
  color:#FFFFFF;
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

    </div>
    <div class="direita">
      <div class="bannr">
        <div class="corzinha">
          <h1 class="white"> O que você quer ler hoje?</h1>
          
          <form class="pusca" action="pesquisa.php" method="GET">
          <input type="text" id="titulo" name="titulo" placeholder="Pesquise seu próximo livro">
          <button type="submit">Pesquisar</button>          
          <center>
          <div class="bolinhas">
            <a href="index.php" class="bolinhast">
            
            <a href="categoria.php?categoria=romance" class="bolinhast">
            <img src="https://cdn.discordapp.com/attachments/1113420011533504526/1139208023315849296/image-removebg-preview.png" width="125" height="125" alt="Imagem">
            </a>
            
            <a href="categoria.php?categoria=terror" class="bolinhast">
            <img src="https://cdn.discordapp.com/attachments/1113420011533504526/1139208252400341032/image-removebg-preview_1.png" width="125" height="125" alt="Imagem">
            </a>
            
            <a href="categoria.php?categoria=ação" class="bolinhast">
            <img src="https://cdn.discordapp.com/attachments/1113420011533504526/1139208485175836813/image-removebg-preview_2.png" width="125" height="125" alt="Imagem">
            </a>
            
            <a href="categoria.php?categoria=estudos" class="bolinhast">
            <img src="https://cdn.discordapp.com/attachments/1113420011533504526/1139209491297087622/image-removebg-preview_5.png" width="125" height="125" alt="Imagem">
            </a>                        
            
            <a href="categoria.php?categoria=infantil" class="bolinhast">
            <img src="https://cdn.discordapp.com/attachments/1113420011533504526/1139208778634506330/image-removebg-preview_4.png" width="125" height="125" alt="Imagem">
            </a> 
            
          
          </div>
        </div>
      </div>
      </center>
      <section class="main">

        <div class="lista-livros">

          <?php
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "livros";

          try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




            $sql = $pdo->prepare("SELECT * FROM acervo");
            $sql->execute();
            $livros = $sql->fetchAll(PDO::FETCH_ASSOC);



            foreach ($livros as $livro) {
              echo '<div class="cartao">';
              echo '
              <div class="imagem">
                  <img src="data:image/jpeg;base64,' . base64_encode($livro['imagem']) . '" alt="' . $livro['nome'] . '" width="200">
              </div>
              ';
          
              // Display the book name instead of stars
              echo '<h3 class="nometext" >' . $livro['nome'] . '</h3>';
          
              echo '<form action="" method="post">';
              echo '<class="nometext" input type="hidden"   name="livro_id" value="' . $livro['id'] .  '">';
              echo '</form>';
              
              echo '<a href="emprestimo.php?id=' . $livro['id'] . '" class="btn-secondary2">Alugar</a>';
              echo '</div>';
          }
          
          } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
          }

          ?>


        </div>
      </section>
    </div>
  </div>

</body>

</html>