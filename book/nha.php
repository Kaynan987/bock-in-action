ฅ•ω•ฅ
=================INDEX======================

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livros</title>
  <style>
    body.light-mode {
      /* Estilos para o modo claro */
      background-color: #FFFFFF;
      color: #000000;
    }

    body.dark-mode {
      /* Estilos para o modo escuro */
      background-color: #000000;
      color: #FFFFFF;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Estilo Global */
    body {
      font-family: Arial, sans-serif;
      background-color: #FFFFFF;
      color: #000000;
      line-height: 1.6;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Estilos do Cabeçalho */
    header {
      background-color: #333333;
      padding: 10px;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: space-between;
    }

    nav ul li a {
      color: #ffffff;
      text-decoration: none;
      padding: 10px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    /* Estilos da Lista de Livros */
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
      margin: 20px;
    }

    .book-card {
    background-color: #EBB65A;
    color: #000000;
    border-radius: 20px;
    padding: 10px;
    width: 215px;
    /* Remover margens e transformar em elemento inline-block */
    margin: 0;
    display: inline-block;
    vertical-align: top; /* Alinha os elementos no topo */
  }

  .book-card img {
    width: 100px;
    border-radius: 4px;
    /* Adicionar margin para ajuste */
    margin-bottom: 10px;
    border-radius: 10px;
    /* Tornar a imagem um elemento inline-block */
    display: inline-block;
    vertical-align: top; /* Alinha os elementos no topo */
  }


    /* .book-card h3 {
      font-size: 24px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */

    /* .book-card p {
      font-size: 16px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */

    .btn-secondary {
      display: inline-block;
      background-color: #333;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 10px;
      background-color: #F8B24C;
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

    .titulo {
      color: #3CB7A8;
    }

    
    .book-card img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 10px;
    border-radius: 10px;
    /* Define o mesmo tamanho para todas as imagens */
    width: 200px;
    height: 300px; /* Defina a altura desejada */
    object-fit: cover; /* Para garantir que a imagem seja ajustada corretamente */
  }
  

    /* Estilo do botão de alternar modo */
   
    header {
        /* Estilos do cabeçalho no modo claro */
        background-color: #FFF0D6;
        padding: 1px;
        border: 4px solid #F1B454;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header.dark-mode {
        /* Estilos do cabeçalho no modo escuro */
        background-color: #F1B454;
        padding: 1px;
        border: 4px solid #FCF5E9;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

    #txtBusca {
        /* Estilos do formulário de pesquisa no modo claro */
        padding: 5px;
        border-radius: 13px;
        background-color: #FFD27B;
        font-size: 18px;
        height: 30px;
        width: 380px;
        position: relative;
        left: 12em;
        bottom: 25px;
    }

    #txtBusca.dark-mode {
        /* Estilos do formulário de pesquisa no modo escuro */
        background-color: #FFD27B;
    
      }
    .hotbartext1 {
      color: #000000;
      padding: 10px;
      position: relative;
      left: 25em;
      top: 15px;
    }
      .botão{
      background-color: #FFD27B;
      color: #000000;
      border-radius: 15px;
      position: relative;
      left: 30em;
      top: 8px;
      
    }
.text{
  background-color: #FDEFD8;
  border: 3px dashed #EBB85F;
  color: #000000;
}
/* estrelas */ 
.rating i {
    cursor: pointer;
    color: #FFD700;
}

/* Estilo para estrelas inativas */
.rating .star {
    cursor: pointer;
    color: #000000;
}

/* Estilo para estrelas ativas (selecionadas) */
.rating .star.active {
    color: #FFD900; /* Cor das estrelas selecionadas */
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
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

.rating {
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
}

.rating i {
    cursor: pointer;
    color: #FFD700;
}

.rating i[data-value="1"].active ~ i,
.rating i[data-value="2"].active ~ i,
.rating i[data-value="3"].active ~ i,
.rating i[data-value="4"].active ~ i,
.rating i[data-value="5"].active ~ i {
    color: #dddddd;
}

button {
    display: block;
    margin: 20px auto 0;
    background-color: #FFD700;
    border: none;
    color: #333;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}      

</style>
</head>
<body class="<?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
    <header class="<?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
        <div class="main-container <?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
            <nav>
                <ul>
                <li><a href="index.php" class="logo">a logo fica aqui</a></li>
                <li><a href="index.php" class="hotbartext1">Início</a></li>
                <li><a href="index.php" class="hotbartext1">Livros</a></li>
                <li><a href="emprestimo.php" class="hotbartext1">Locação de livros</a></li>
                <li><a href="cadastro.php" class="hotbartext1">Conta</a></li>
                <li><a href="dashboard.php" class="hotbartext1">Admin</a></li>
                <li><a href="dashboard.php" class="hotbartext1">Admin</a></li>

                <button class="botão" id="theme-toggle" onclick="toggleTheme()">Alternar Modo</button>
                <?php if (isLoggedIn()) : ?>
                    <li><p class="user-status">Conectado como: <?php echo $_SESSION['username']; ?></p></li>
                    <li><a href="dashboard.php" class="hotbartext1">Admin</a></li>
                    <li><a href="logout.php" class="hotbartext1">Sair</a></li>
                <?php else : ?>
                    <li><a href="login.php" class="hotbartext1">Entrar</a></li>
                <?php endif; ?>

                <form action="pesquisa.php" method="GET">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo">
                <input type="submit" value="Pesquisar">
            </form>
                </ul>
                </div>
            </nav>
        </div>
    </header>
<section class="book-list">
    <h2 class="titulo">Livros Disponíveis</h2>
    <ul>
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
        echo '<li>';
        echo '<div class="book-card">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($livro['imagem']) . '" alt="' . $livro['nome'] . '" width="200">';
        echo '<h3>' . $livro['nome'] . '</h3>';
        echo '<p>Idade de Leitura: ' . $livro['Idadeleitura'] . '</p>';

        // Aqui vem o sistema de estrelas para avaliação
         // Aqui vem o sistema de estrelas para avaliação
      echo '<h3>Avalie este livro:</h3>';
      echo '<div class="rating">';
      for ($i = 1; $i <= 5; $i++) {
        echo '<span class="star livro-' . $livro['id'] . '" data-livro-id="' . $livro['id'] . '" data-value="' . $i . '">&#9733;</span>';
      }
      echo '</div>';
    echo '<form action="" method="post">';
    echo '<input type="hidden" name="estrelas" id="estrelas_' . $livro['id'] . '" value="0">';
    echo '<input type="hidden" name="livro_id" value="' . $livro['id'] . '">';
    echo '<textarea name="comentario" placeholder="Deixe um comentário..."></textarea>';
    echo '<button type="submit">Enviar Avaliação</button>';
    echo '</form>';
        // Fim do sistema de estrelas

        

echo '<a href="infolivros.php?id=' . $livro['id'] . '" class="btn-secondary">Detalhes</a>';
        echo '</div>';
        echo '</li>';
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obtém os dados do formulário
  $estrelas = intval($_POST['estrelas']); // Convertendo para inteiro
  $comentario = $_POST['comentario'];
  $livro_id = $_POST['livro_id'];

  // Debug: Exibir dados do formulário recebidos
  echo "Estrelas: " . $estrelas . "<br>";
  echo "Comentário: " . $comentario . "<br>";
  echo "Livro ID: " . $livro_id . "<br>";

  // Conexão com o banco de dados (caso ainda não esteja aberta)
  if (!isset($conn)) {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  // Prepara e executa a inserção no banco de dados
  $sql = "INSERT INTO avaliacoes (estrelas, comentario, id_livro) VALUES (:estrelas, :comentario, :livro_id)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':estrelas', $estrelas, PDO::PARAM_INT);
  $stmt->bindParam(':comentario', $comentario, PDO::PARAM_STR);
  $stmt->bindParam(':livro_id', $livro_id, PDO::PARAM_INT);
  $stmt->execute();

  echo "Avaliação enviada com sucesso!";
}
?>

    </ul>
  </section>


<footer>
    <p>&copy; 2023 Livraria. Todos os direitos reservados.</p>
  </footer>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');

    stars.forEach(star => {
      star.addEventListener('click', function () {
        const livroId = this.getAttribute('data-livro-id');
        const clickedValue = this.getAttribute('data-value');
        const starsLivro = document.querySelectorAll('.livro-' + livroId + ' .star');

        // Remove a classe 'active' de todas as estrelas
        starsLivro.forEach(starLivro => starLivro.classList.remove('active'));

        // Adiciona a classe 'active' à estrela atual e todas as anteriores
        for (let i = 0; i < clickedValue; i++) {
          starsLivro[i].classList.add('active');
        }

        // Atualiza o valor das estrelas selecionadas no campo hidden do formulário
        document.getElementById('estrelas_' + livroId).value = clickedValue;
      });
    });
  });

  function selectStar(element, livroId, ratingValue) {
    const stars = document.querySelectorAll('.livro-' + livroId + ' .star');

    // Remove a classe 'selected' de todas as estrelas
    stars.forEach(star => star.classList.remove('selected'));

    // Adiciona a classe 'selected' à estrela atual e todas as anteriores
    for (let i = 0; i < ratingValue; i++) {
      stars[i].classList.add('selected');
    }

    // Atualiza o valor das estrelas selecionadas no campo hidden do formulário
    document.getElementById('estrelas_' + livroId).value = ratingValue;
  }

  // Função para alternar o modo claro e escuro
  function toggleTheme() {
    const body = document.querySelector('body');
    const container = document.querySelector('.main-container');
    const header = document.querySelector('header');
    const searchBar = document.getElementById('txtBusca');

    if (body.classList.contains('light-mode')) {
      body.classList.remove('light-mode');
      body.classList.add('dark-mode');
      container.classList.remove('light-mode');
      container.classList.add('dark-mode');
      header.classList.remove('light-mode');
      header.classList.add('dark-mode');
      searchBar.classList.remove('light-mode');
      searchBar.classList.add('dark-mode');
    } else {
      body.classList.remove('dark-mode');
      body.classList.add('light-mode');
      container.classList.remove('dark-mode');
      container.classList.add('light-mode');
      header.classList.remove('dark-mode');
      header.classList.add('light-mode');
      searchBar.classList.remove('dark-mode');
      searchBar.classList.add('light-mode');
    }
  }
</script> 
  <script src="scripts.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');

    stars.forEach(star => {
      star.addEventListener('click', function () {
        const livroId = this.getAttribute('data-livro-id');
        const clickedValue = this.getAttribute('data-value');
        const starsLivro = document.querySelectorAll('.livro-' + livroId + ' .star');

        // Remove a classe 'active' de todas as estrelas
        starsLivro.forEach(starLivro => starLivro.classList.remove('active'));

        // Adiciona a classe 'active' à estrela atual e todas as anteriores
        for (let i = 0; i < clickedValue; i++) {
          starsLivro[i].classList.add('active');
        }

        // Atualiza o valor das estrelas selecionadas no campo hidden do formulário
        document.getElementById('estrelas_' + livroId).value = clickedValue;
      });
    });
  });
function selectStar(element, livroId, ratingValue) {
    const stars = document.querySelectorAll('.livro-' + livroId + ' .star');

    // Remove a classe 'selected' de todas as estrelas
    stars.forEach(star => star.classList.remove('selected'));

    // Adiciona a classe 'selected' à estrela atual e todas as anteriores
    for (let i = 0; i < ratingValue; i++) {
        stars[i].classList.add('selected');
    }

    // Atualiza o valor das estrelas selecionadas no campo hidden do formulário
    document.getElementById('estrelas_' + livroId).value = ratingValue;
}

</script>
<script>
 

   livros.forEach(livro => {
     const li = document.createElement('li');
     li.innerHTML = `
       <div class="book-card">
         <img src="data:image/jpeg;base64,${livro.imagem}" alt="${livro.nome}" width="200">
         <h3>${livro.nome}</h3>
         <p>Idade de Leitura: ${livro.Idadeleitura}</p>
         <!-- Aqui você pode adicionar outros detalhes do livro
         <a href="infolivros.php?id=${livro.id}" class="btn-secondary">Detalhes</a>
       </div>
     `;
     listaLivros.appendChild(li);
   });
  
</script>
</body>
</html>





ฅ•ω•ฅ

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
      background-image: url('teste.png');
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



    /* .book-card h3 {
      font-size: 24px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */

    /* .book-card p {
      font-size: 16px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */



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


    */
    /* Estilo do botão de alternar modo */

    header {
      /* Estilos do cabeçalho no modo claro */
      background-color: #1D1D1D;

      border: 4px solid #B2A0C5;
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
      color: white;
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
    }

    .imagem {
      padding: 5px;
      display: flex;
      align-items: center;
      background-color: #B79BD8;
    }

    .btn-secondary {
      background-color: #333;
      color: #7233DF;
      font-weight: bolder;
      text-decoration: none;
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
      border: solid#8557F085 1px;
      border-radius: 250px;
      background-color: #7233DF;
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

    .w-10 {
      width: 125px;
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


    .formulario {
      width: 500px;
      padding: 25px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      border: black 0px solid;
      background: black;
      backdrop-filter: blur(20px);
      position: relative;
      top: 100px;
    }

    /* Estilos para o título */
    .formulario h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
    }

    /* Estilos para as labels */
    .formulario label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }

    /* Estilos para os inputs */
    .formulario input[type="text"],
    .formulario input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 14px;
    }

    /* Estilos para o botão de envio */
    .formulario input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    /* Estilos para o botão de envio quando hover */
    .formulario input[type="submit"]:hover {
      background-color: #0056b3;
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
      <a href="emprestimo.php" class="hotbartext1">LOCAÇÃO</a>
      <a href="login.php" class="hotbartext1">CONTA</a>
      <?php
    if (isset($_SESSION['email']) && $_SESSION['email'] == 'root@root.com') {
        echo '<a href="dashboard.php" class="hotbartext1">ADMIN</a>';
    }
    ?>      <a href="clube.php" class="hotbartext1">CLUBE</a>
      <li><p class="user-status">Conectado como: <?php echo $_SESSION['email']; ?></p></li>
    
    </div>
  </header>
  
  <div class="flex">
    <div id="nav-Lateral" style="margin-bottom:100px;" class="white navLateral hidden">
      <p>Contfefea</p>
    </div>
    <div id="espacamento" class="esquerda hidden">
      -------------
    </div>




    <div class="formulario">
      <h1>Reservar livros
      </h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">email:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="data_emprestimo">Data de Empréstimo:</label>
        <input type="date" id="data_emprestimo" name="data_emprestimo" required>
        <br>
        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" id="data_devolucao" name="data_devolucao" required>
        <br>
        <label for="livro">Livro:</label>
        <input type="text" id="livro" name="livro" required>
        <input type="submit" value="Adicionar Empréstimo">
      </form>
    </div>

    <body>
      <?php





      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "locacao";

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "livros";
        // Conectando ao banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificando a conexão
        if ($conn->connect_error) {
          die("Falha na conexão: " . $conn->connect_error);
        }

        // Obtendo os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_emprestimo = $_POST['data_emprestimo'];
        $data_devolucao = $_POST['data_devolucao'];
        $livro = $_POST['livro'];


        // Inserindo os dados no banco de dados
        $sql = "INSERT INTO empretimo (nome, email, data_emprestimo,)
                VALUES ('$nome', '$email', '$data_emprestimo', '$data_devolucao', '$livro')";

        if ($conn->query($sql) === TRUE) {
          echo "<p>Empréstimo adicionado com sucesso!</p>";
        } else {
          echo "<p>Erro ao adicionar empréstimo: " . $conn->error . "</p>";
        }
        if (isset($_GET['livro_id'])) {
          $livro_id = $_GET['livro_id'];
      
          if (isset($_GET['livro_id'])) {
            $livro_id = $_GET['livro_id'];
        
            // Consultar o banco de dados para obter informações do livro com base no $livro_id
        
            $sql = "SELECT * FROM livros WHERE id = $livro_id";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                $livro = $result->fetch_assoc();
        
                // Exibir informações do livro
                echo "<h2>Detalhes do Livro:</h2>";
                echo "<p>Título: " . $livro['nome'] . "</p>";
                echo "<p>Categoria: " . $livro['categoria'] . "</p>";
                echo "<p>Autor: " . $livro['autor'] . "</p>";
                echo "<p>Páginas: " . $livro['paginas'] . "</p>";
                echo "<p>Idade de Leitura: " . $livro['idadeleitura'] . "</p>";
                // ... e assim por diante
            } else {
                echo "Livro não encontrado.";
            }
        }
        // Fechando a conexão com o banco de dados
        $conn->close();
      }
    }
      ?>


    </body>
</html>





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
      background-image: url('teste.png');
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



    /* .book-card h3 {
      font-size: 24px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */

    /* .book-card p {
      font-size: 16px;
      margin-bottom: 10px;
      border-radius: 10px;
    } */



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


    */
    /* Estilo do botão de alternar modo */

    header {
      /* Estilos do cabeçalho no modo claro */
      background-color: #1D1D1D;

      border: 4px solid #B2A0C5;
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
      color: white;
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
    }

    .imagem {
      padding: 5px;
      display: flex;
      align-items: center;
      background-color: #B79BD8;
    }

    .btn-secondary {
      background-color: #333;
      color: #7233DF;
      font-weight: bolder;
      text-decoration: none;
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
      border: solid#8557F085 1px;
      border-radius: 250px;
      background-color: #7233DF;
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

    .w-10 {
      width: 125px;
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


    .formulario {
      width: 500px;
      padding: 25px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      border: black 0px solid;
      background: black;
      backdrop-filter: blur(20px);
      position: center;
      top: 100px;
      left:30em;
    }

    /* Estilos para o título */
    .formulario h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
    }

    /* Estilos para as labels */
    .formulario label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }

    /* Estilos para os inputs */
    .formulario input[type="text"],
    .formulario input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 14px;
    }

    /* Estilos para o botão de envio */
    .formulario input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    /* Estilos para o botão de envio quando hover */
    .formulario input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .user-status{
    position: absolute;
    left: 73em;

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
    }
    .imagem {
      padding: 5px;
      display: flex;
      align-items: center;
      background-color: #B79BD8;
    }
    .botaologin{
      width: 100%;
      padding: 10px;
      background: rgb(99, 67, 135);
      background: linear-gradient(76deg, rgba(99, 67, 135, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      position: relative;
      top: 15px;
    }
    .textlogin{
    color:#ffffff;
    padding: 10px;
    }
    .mensagem-erro{
      background-color:#FF0000 ;
      border-radius: 10px;
      color:#ffffff ;
      
    }
  </style>
</head>

<body>
<header style="z-index: 40;">  
  <a href="index.php" class="logo">
      <img src="https://media.discordapp.net/attachments/1110882147201454142/1141344175133036594/logogk.png"></a>
    <div class="cab">
      <a href="index.php" class="hotbartext1">INÍCIO</a>
      <a href="login.php" class="hotbartext1">CONTA</a>
      <?php
    if (isset($_SESSION['email']) && $_SESSION['email'] == 'root@root.com') {
        echo '<a href="dashboard.php" class="hotbartext1">ADMIN</a>';
    }
    ?>      <a href="clube.php" class="hotbartext1">CLUBE</a>
          
      <a href="clube.php" class="hotbartext1">CLUBE</a>
      <?php
      if (isset($_SESSION['email'])) {
    // Usuário está conectado, exibir o status
        echo '<li><a class="hotbartext1" href="logout.php">Sair</a><p class="user-status">Conectado como: ' . $_SESSION['email'] . '</p></li>';
      } else {
        // Usuário não está conectado, exibir mensagem alternativa
        echo '<li><a href="login.php" class="hotbartext1">entrar</a><p class="user-status">Você não está em nenhuma conta</p></li>';
        }?>
    </div>
  </header>
  
 <div class="flex">
        <div id="nav-Lateral" style="margin-bottom:100px;" class="white navLateral hidden">
            <!-- Conteúdo da barra lateral -->
        </div>
        <div id="espacamento" class="esquerda hidden">
            -------------
        </div>
        <center>
        <?php
            // Conexão com o banco de dados
            $host = "localhost";
            $username = "root";
            $password = "";
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
                $livro_id = $_POST['livro_id']; // Adicione essa linha para obter o ID do livro

                // Prepara e executa a inserção no banco de dados
                $sql = "INSERT INTO emprestimo (nome, email, data_emprestimo, livro_id) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if (!$stmt) {
                    die("Erro na preparação da consulta: " . $conn->error);
                }

                $result = $stmt->bind_param("sssi", $name, $email, $data_emprestimo, $livro_id);

                if (!$result) {
                    die("Erro ao vincular parâmetros: " . $stmt->error);
                }

                if ($stmt->execute()) {
                    echo '<div class="mensagem-sucesso">Empréstimo adicionado com sucesso!</div>';
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
      $password = "";
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

      
          
            if ($post['estoque'] >= 0) {
              // Atualize o estoque após um empréstimo bem-sucedido
              $sql = "UPDATE acervo SET estoque = estoque - 1 WHERE id = :livro_id";
              $stmt = $pdo->prepare($sql);
              $stmt->bindParam(":livro_id", $livro_id, PDO::PARAM_INT);
              $stmt->execute(); 

    
              // Verificar se o usuário está conectado
                   if (isLoggedIn()) {
                        // Processar o formulário de reserva
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            $name = $_POST['nome'];
                            $email = $_POST['email'];
                            $data_emprestimo = $_POST['data_emprestimo'];
                            $livro_id = $_POST['livro_id'];
                           
                      
                            // Verificar se há estoque disponív
                                            
                        } else {
                            // Mostrar o formulário de reserva
                            echo '<div class="formulario">';
                            echo '<h1>Reservar livros</h1>';
                            echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';
                            echo '<label for="nome">Nome:</label>';
                            echo '<input type="text" id="nome" name="nome" required>';
                            echo '<br>';
                            echo '<label for="email">Email:</label>';
                            echo '<input type="text" id="email" name="email" required>';
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
                      
                      }
                    } else {
                        // Usuário não está conectado, mostrar mensagem de login
                        echo '<div class="formulario">';
                        echo '<h1>Reservar livros</h1>';
                        echo '<p class="textlogin">Para reservar um livro, é necessário estar conectado em uma conta.</p>';
                        echo '<p><a class="botaologin" href="login.php">Faça login</a> ou <a class="botaologin" href="cadastro.php">registre-se</a> para continuar.</p>';
                        echo '</div>';
                    }
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
















 



  class="caixa"