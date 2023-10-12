<!DOCTYPE html>
<html>
<head>
  <title>Tela de Cadastro</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Estilo global para o corpo da página */
    body {
      background-color: #36393f; /* Cor de fundo escura do Discord */
      color: #fff; /* Cor do texto */
      font-family: Arial, sans-serif; /* Fonte padrão */
    }

    /* Estilo para o cabeçalho */
    header {
      background-color: #202225; /* Cor do cabeçalho do Discord */
      padding: 10px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
    }

    .logo img {
      width: 100px; /* Ajuste o tamanho da imagem do logo conforme necessário */
    }

    .cab a {
      color: #fff; /* Cor dos links no cabeçalho */
      text-decoration: none;
      margin: 0 10px;
    }

    /* Estilo para o container do formulário */
    .container {
      margin: 100px auto;
      background-color: #202225;
      padding: 20px;
      border-radius: 5px;
      width: 400px;
      text-align: center; /* Centralizar conteúdo */
    }

    /* Estilo para rótulos e campos de entrada */
    label {
      display: block;
      margin-top: 10px;
      color: #fff;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #72767d; /* Cor da borda dos campos de entrada */
      background-color: #2f3136; /* Cor de fundo dos campos de entrada */
      color: #fff; /* Cor do texto nos campos de entrada */
      border-radius: 4px;
    }

    /* Estilo para o botão de cadastro */
    button.button {
      background-color: #7289da; /* Cor do botão do Discord */
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      margin-top: 20px; /* Ajustado para centralizar verticalmente */
      cursor: pointer;
    }

    button.button:hover {
      background-color: #677bc4; /* Cor do botão ao passar o mouse por cima */
    }



    div a:hover {
      text-decoration: underline;
    }
    .hotbartext1 {
      font-family: "Helvetica", sans-serif;
      font-weight: bold;
      color: #FFFFFF;
      height: min-content;
    }
    .logo img {
      width: 70px;
    }

    .logo {
      margin-inline: 40px;
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
    .user-status{
    position: absolute;
    left: 73em;

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
      background-color: #333;
      color: white;
      font-weight: bolder;
      text-decoration: none;
      border: solid#8557F085 0px;
      border-radius: 250px;
      background: linear-gradient(76deg, rgba(99, 67, 135, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 5px;
      text-align: center;
      width: 200px;
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
    left: 73em;

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

  <div class="container">
    <h2>Tela de Cadastro</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" placeholder="Digite seu usuário">

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Digite seu email">

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" placeholder="Digite sua senha">

      <label for="nascimento">Data de Nascimento:</label>
      <input type="date" id="nascimento" name="nascimento">

      <button class="button" type="submit">Cadastrar</button>
      
      <div style="display: flex; justify-content: center; margin-top: 10px;">
       
      </div>
    </form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Dados de conexão com o banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "usuarios";

  // Conexão com o banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica se houve algum erro na conexão
  if ($conn->connect_error) {
      die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Obtém os dados do formulário
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nascimento = $_POST['nascimento']; // Adiciona essa linha para obter a data de nascimento

  // Verifica se o email já existe no banco de dados
  $email_check_query = "SELECT * FROM user WHERE email='$email'";
  $result = $conn->query($email_check_query);

  if ($result->num_rows > 0) {
      echo "O email já está cadastrado.";
  } else {
      // Prepara e executa a inserção no banco de dados
      $sql = "INSERT INTO user (username, email, password, nascimento) VALUES ('$username', '$email', '$password', '$nascimento')";

      if ($conn->query($sql) === TRUE) {
          echo "Cadastro realizado com sucesso!";
      } else {
          echo "Erro ao cadastrar: " . $conn->error;
      }
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>


  </div>
</body>
</html>