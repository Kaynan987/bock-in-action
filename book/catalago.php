<!-- ฅ•ω•ฅ
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

//</style>
//</head>
//<body class="<?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
//    <header class="<?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
//        <div class="main-container <?php echo isLoggedIn() ? 'logged-in' : 'not-logged-in'; ?>">
//            <nav>
//                <ul>
//                <li><a href="index.php" class="logo">a logo fica aqui</a></li>
//                <li><a href="index.php" class="hotbartext1">Início</a></li>
//                <li><a href="catalago.php" class="hotbartext1">Livros</a></li>
//                <li><a href="cadastro.php" class="hotbartext1">Conta</a></li>
//                <li><a href="dashboard.php" class="hotbartext1">Admin</a></li>
//                <button class="botão" id="theme-toggle" onclick="toggleTheme()">Alternar Modo</button>
//                <?php if (isLoggedIn()) : ?>
//                    <li><p class="user-status">Conectado como: <?php echo $_SESSION['username']; ?></p></li>
//                    <li><a href="dashboard.php" class="hotbartext1">Admin</a></li>
//                    <li><a href="logout.php" class="hotbartext1">Sair</a></li>
//                <?php else : ?>
//                    <li><a href="login.php" class="hotbartext1">Entrar</a></li>
//                <?php endif; ?>
//
//                <form action="pesquisa.php" method="GET">
//                <label for="titulo">Título:</label>
//                <input type="text" id="titulo" name="titulo">
//                <input type="submit" value="Pesquisar">
//            </form>
//                </ul>
//                </div>
//            </nav>
//        </div>
//    </header>
//<section class="book-list">
//    <h2 class="titulo">Livros Disponíveis</h2>
//    <ul>
//<?php
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$dbname = "livros";
//
//try {
//    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    
//
//   
//$sql = $pdo->prepare("SELECT * FROM acervo");
//    $sql->execute();
//    $livros = $sql->fetchAll(PDO::FETCH_ASSOC);
//
//    
//
//   
//
//
//foreach ($livros as $livro) {
//        echo '<li>';
//        echo '<div class="book-card">';
//        echo '<img src="data:image/jpeg;base64,' . base64_encode($livro['imagem']) . '" alt="' . $livro['nome'] . '" width="200">';
//        echo '<h3>' . $livro['nome'] . '</h3>';
//        echo '<p>Idade de Leitura: ' . $livro['Idadeleitura'] . '</p>';
//
//        // Aqui vem o sistema de estrelas para avaliação
//         // Aqui vem o sistema de estrelas para avaliação
//      echo '<h3>Avalie este livro:</h3>';
//      echo '<div class="rating">';
//      for ($i = 1; $i <= 5; $i++) {
//        echo '<span class="star livro-' . $livro['id'] . '" data-livro-id="' . $livro['id'] . '" data-value="' . $i . '">&#9733;</span>';
//      }
//      echo '</div>';
//    echo '<form action="" method="post">';
//    echo '<input type="hidden" name="estrelas" id="estrelas_' . $livro['id'] . '" value="0">';
//    echo '<input type="hidden" name="livro_id" value="' . $livro['id'] . '">';
//    echo '<textarea name="comentario" placeholder="Deixe um comentário..."></textarea>';
//    echo '<button type="submit">Enviar Avaliação</button>';
//    echo '</form>';
//        // Fim do sistema de estrelas
//
//        
//
//echo '<a href="infolivros.php?id=' . $livro['id'] . '" class="btn-secondary">Detalhes</a>';
//        echo '</div>';
//        echo '</li>';
//    }
//} catch (PDOException $e) {
//    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
//}
//
//// Verifica se o formulário foi enviado
//if ($_SERVER["REQUEST_METHOD"] === "POST") {
//  // Obtém os dados do formulário
//  $estrelas = intval($_POST['estrelas']); // Convertendo para inteiro
//  $comentario = $_POST['comentario'];
//  $livro_id = $_POST['livro_id'];
//
//  // Debug: Exibir dados do formulário recebidos
//  echo "Estrelas: " . $estrelas . "<br>";
//  echo "Comentário: " . $comentario . "<br>";
//  echo "Livro ID: " . $livro_id . "<br>";
//
//  // Conexão com o banco de dados (caso ainda não esteja aberta)
//  if (!isset($conn)) {
//      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  }
//
//  // Prepara e executa a inserção no banco de dados
//  $sql = "INSERT INTO avaliacoes (estrelas, comentario, id_livro) VALUES (:estrelas, :comentario, :livro_id)";
//  $stmt = $conn->prepare($sql);
//  $stmt->bindParam(':estrelas', $estrelas, PDO::PARAM_INT);
//  $stmt->bindParam(':comentario', $comentario, PDO::PARAM_STR);
//  $stmt->bindParam(':livro_id', $livro_id, PDO::PARAM_INT);
//  $stmt->execute();
//
//  echo "Avaliação enviada com sucesso!";
//}
//?>

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
         Aqui você pode adicionar outros detalhes do livro -->
                  <!-- <a href="infolivros.php?id=${livro.id}" class="btn-secondary">Detalhes</a>
               </div>
              `;
              listaLivros.appendChild(li);
           }); -->

        <!-- </script>
        </body>
         </html> -->