<?php
  session_start();

  // Verifica se o usuário está logado
  function isLoggedIn() {
      return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
  }
  ?>
<?php

// Conecte-se ao banco de dados (substitua pelos detalhes do seu banco)
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'livros';


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recupere os dados dos livros do banco
$sql = "SELECT * FROM acervo";
$result = $conn->query($sql);
$livros = array();

if ($result === false) {
    die("Erro na consulta: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $livros[] = $row;
    }
}


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $livro_id = (int)$_POST['livro_id'];
  $novo_nome = isset($_POST['nome']) ? $conn->real_escape_string($_POST['nome']) : '';
  $nova_categoria = isset($_POST['categoria']) ? $conn->real_escape_string($_POST['categoria']) : '';
  $nova_data = isset($_POST['data']) ? $_POST['data'] : '';
  $novo_autor = isset($_POST['autor']) ? $conn->real_escape_string($_POST['autor']) : '';
  $nova_Idadeleitura = isset($_POST['Idadeleitura']) ? (int)$_POST['Idadeleitura'] : 0;
  $novas_paginas = isset($_POST['paginas']) ? (int)$_POST['paginas'] : 0;
  $novo_idioma = isset($_POST['idioma']) ? $conn->real_escape_string($_POST['idioma']) : '';
  $nova_sinopse = isset($_POST['sinopse']) ? $conn->real_escape_string($_POST['sinopse']) : '';
  $novo_estoque = isset($_POST['estoque']) ? (int)$_POST['estoque'] : 0;
  $nova_localizacao = isset($_POST['localizacao']) ? $conn->real_escape_string($_POST['localizacao']) : '';

  // Update the database records for all fields
  $sql = "UPDATE acervo SET 
      nome='$novo_nome', 
      categoria='$nova_categoria', 
      data='$nova_data', 
      autor='$novo_autor', 
      Idadeleitura='$nova_Idadeleitura', 
      paginas='$novas_paginas', 
      idioma='$novo_idioma', 
      sinopse='$nova_sinopse', 
      estoque='$novo_estoque', 
      localizacao='$nova_localizacao' 
      WHERE id=$livro_id";

  if ($conn->query($sql) === TRUE) {
      echo "Dados do livro atualizados com sucesso.";
  } else {
      echo "Erro na atualização dos dados do livro: " . $conn->error;
  }
}
  ?>
  
  <?php

  $servernameLivros = "localhost";
  $usernameLivros = "root";
  $passwordLivros = "root";
  $dbnameLivros = "livros";


  $servernameUsuarios = "localhost";
  $usernameUsuarios = "root";
  $passwordUsuarios = "root";
  $dbnameUsuarios = "usuarios";

  $connLivros = new mysqli($servernameLivros, $usernameLivros, $passwordLivros, $dbnameLivros);
  $connUsuarios = new mysqli($servernameUsuarios, $usernameUsuarios, $passwordUsuarios, $dbnameUsuarios);

  if ($connLivros->connect_error || $connUsuarios->connect_error) {
    die("Falha na conexão: " . $connLivros->connect_error . " / " . $connUsuarios->connect_error);
  }

  function getLivrosDisponiveis($connLivros) {
    $sql = "SELECT id, nome, estoque, localizacao, imagem FROM acervo ";
  $result = $connLivros->query($sql);

    $livros = array();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $livros[] = $row;
      }
    }

    return $livros;
  }
  function getUsuarios($connUsuarios) {
    $sql = "SELECT usuarios FROM user"; // Use 'user' instead of 'username'
    $result = $connUsuarios->query($sql);
    $usuarios = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row['usuarios']; // Make sure to fetch the correct column
        }
    }
    return $usuarios;
  }

  function incrementarEstoque($conn, $livro_id) {
    $sql = "UPDATE acervo SET estoque = estoque + 1 WHERE id = $livro_id";
    $conn->query($sql);
  }

  $livrosDisponiveis = getLivrosDisponiveis($connLivros);
  //$usuarios = getUsuarios($connUsuarios);
  ?>


  <!DOCTYPE html>
  <html lang="en">

  <style>
    /* Additional CSS for the search bar */
    .imagem {
        padding: 5px;
        display: flex;
        align-items: center;
        background-color: #1a1a1a;
      }
    
      .search-container {
        margin-top: 20px;
        text-align: center;
        position: relative;
        bottom: 2em;      
      }
      .btn-search {
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
      #livroSearch {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 5px;
      }
      .caixa{
         margin: 5px 0;
         text-align: center;
         color:#ffffff;
         padding: 8px;
         margin-right: 10px;
         border: 1px solid #ccc;
         background-color: #1a1a1a;
         color:#ffffff;
      }
      .salva{
        padding: 8px 12px;
        background-color: #3B0041;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;      
      }

      /* Reset de Estilos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a; /* Preto */
    color: #ffffff; /* Branco */
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
  
  h1 {
    font-size: 24px;
    color: #ffffff; /* Branco */
  }
  
  nav {
    background-color: #1a1a1a; /* Roxo forte */
    padding: 10px;
  }
  
  .navbar {
    list-style: none;
  }
  
  .navbar li {
    display: inline-block;
    margin-right: 10px;
  }
  
  .navbar li a {
    color: #ffffff; /* Branco */
    text-decoration: none;
  }
  
  main {
    padding: 20px;
  }
  
  #livros,
  #usuarios {
    margin-bottom: 30px;
  }
  
  h2 {
    font-size: 20px;
    margin-bottom: 10px;
  }
  
  ul {
    list-style: none;
  }
  
  ul li {
    margin-bottom: 5px;
  }
  
  .estoque {
    font-weight: bold;
  }
  
  .btn-decrementar {
    background-color: #1a1a1a; /* Roxo forte */
    color: #ffffff; /* Branco */
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 5px;
  }
  
  .btn-incrementar:hover,
  .btn-decrementar:hover {
    background-color: #1a1a1a; /* Roxo mais claro */
  }
  .livro-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr ; /* Dois livros por linha */
        gap: -10em; /* Espaçamento entre os livros */
    
      }
    
    .livro-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .imagem {
      padding: 5px;
      display: flex;
      align-items: center;
      border-radius: 20px;
      background-image: linear-gradient(to bottom, purple, blue);
      width: 200px;
      height: 300px;
      border-radius: 20px;
    }
    .nometext{
  color:#FFFFFF;
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

  </style>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard da Biblioteca</title>
    <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
  
  <header style="z-index: 40;">

    <a href="index.php" class="logo">
      <img src="https://media.discordapp.net/attachments/1110882147201454142/1141344175133036594/logogk.png"></a>
    <div class="cab">
      <a href="index.php" class="hotbartext1">Voltar</a>
      <a href="cadastrarlivros.php" class="hotbartext1">cadastrar Livros</a>
      <a href="cadastrarclub.php"class="hotbartext1">cadastrar club</a>
      <a href="infoemprestimo.php" class="hotbartext1">informação de emprestimo</a>
           
      <?php
      if (isset($_SESSION['email'])) {
    // Usuário está conectado, exibir o status
        echo '<li><a class="hotbartext1" href="logout.php">Sair</a><p class="user-status">Conectado como: ' . $_SESSION['email'] . '</p></li>';
      } else {
        // Usuário não está conectado, exibir mensagem alternativa
        echo '<li><a href="login.php" class="hotbartext1">entrar</a><p class="user-status">Você não está em nenhuma conta</p></li>';
        }?>
        ,

  
</header>
    <main>
      <section id="livros">    
  </ul>
        <!-- Search Bar -->
        <div class="search-container">
    <input type="text" id="livroSearch" placeholder="Pesquisar por Nome do Livro...">
    <br>
    <br>
    <button class="btn-search">Pesquisar</button>
</div>
          
  <ul id="livrosDisponiveisList"class="livro-grid">
    <?php foreach ($livros as $livro): ?>
        <li class="livro-item">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="livro_id" value="<?php echo $livro['id']; ?>">
                <img class="imagem" src="data:image/jpeg;base64,<?php echo base64_encode($livro['imagem']); ?>" alt="<?php echo $livro['nome']; ?>"width="200">
                <br>                
                <center>
                <div style="width: 10em;">
                <?php 
                echo '<h3 class="nometext" >' . $livro['nome'] . '</h3>';
                ?>
                </center>  
                </div>
                <br>
                <input class="caixa" type="text" name="nome" value="<?php echo $livro['nome']; ?>"><br>

                <label for="categoria"style='color: white;'>Categoria:</label>
                <br>
                <input class="caixa" type="text" name="categoria" value="<?php echo $livro['categoria']; ?>"><br>

                <label for="data"style='color: white;'>Data:</label>
                <br>
                <input class="caixa" type="text" name="data" value="<?php echo $livro['data']; ?>"><br>

                <label for="autor"style='color: white;'>Autor:</label>
                <br>
                <input class="caixa" type="text" name="autor" value="<?php echo $livro['autor']; ?>"><br>

                <label for="Idadeleitura"style='color: white;'>Idade de Leitura:</label>
                <br>
                <input class="caixa" type="text" name="Idadeleitura" value="<?php echo $livro['Idadeleitura']; ?>"><br>

                <label for="paginas"style='color: white;'>Páginas:</label>
                <br>
                <input class="caixa" type="text" name="paginas" value="<?php echo $livro['paginas']; ?>"><br>

                <label for="idioma"style='color: white;'>Idioma:</label>
                <br>
                <input class="caixa" type="text" name="idioma" value="<?php echo $livro['idioma']; ?>"><br>

                <label for="sinopse"style='color: white;'>Sinopse:</label>
                <br>
                <textarea class="caixa" name="sinopse"><?php echo $livro['sinopse']; ?></textarea><br>

                <label for="estoque"style='color: white;'>Estoque:</label>
                <br>
                <input class="caixa" type="text" name="estoque" value="<?php echo $livro['estoque']; ?>"><br>

                <label for="localizacao"style='color: white;'>Localização:</label>
                <br>
                <input class="caixa" type="text" name="localizacao" value="<?php echo $livro['localizacao']; ?>"><br>

                <!-- Adicione outros campos aqui conforme necessário -->
              <center>
                <button class="salva" type="submit">Salvar</button>
              </center>            
              </form>
        </li>
    <?php endforeach; ?>
</ul>

<?php

// Conexão com o banco de dados
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "livros";

$conn = new mysqli ($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se uma imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = $_FILES["imagem"];
        $nomeFinal = time() . '_' . $imagem["name"];

    if (move_uploaded_file($imagem["tmp_name"], $nomeFinal)) {
        $conteudo = file_get_contents($nomeFinal);
        $conteudo = $conn->real_escape_string($conteudo);

            // Prepara e executa a inserção no banco de dados
    
            if ($conn->query($sql) === TRUE) {
                echo "Cadastro do livro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar o livro: " . $conn->error;
            }

            // Remove o arquivo temporário da imagem
            unlink($nomeFinal);
        } else {
            echo "Erro ao fazer o upload da imagem.";
        }
    } else {
        echo "Você não enviou uma imagem.";
    }
}


?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        function atualizarEstoqueAutomaticamente() {
          $.ajax({
            type: "GET",
            url: "atualizar_estoque.php",
            success: function(data) {
              const livros = JSON.parse(data);
              livros.forEach(livro => {
                const estoqueElement = $(`span[data-livro-id="${livro.id}"]`);
                estoqueElement.text(livro.estoque);
              });
            },
            error: function() {
              alert("Ocorreu um erro ao atualizar o estoque.");
            }
          });
        }

        // Atualizar o estoque automaticamente a cada 5 segundos (5000ms)
        setInterval(atualizarEstoqueAutomaticamente, 5000);

        $(".btn-incrementar").on("click", function() {
          const livroId = $(this).data("livro-id");

          $.ajax({
            type: "POST",
            url: "atualizar_estoque.php",
            data: { livro_id: livroId, operacao: "incrementar" },
            success: function(data) {
              const estoqueElement = $(`span[data-livro-id="${livroId}"]`);
              const novoEstoque = parseInt(estoqueElement.text()) + 1;
              estoqueElement.text(novoEstoque);
            },
            error: function() {
              alert("Ocorreu um erro ao atualizar o estoque.");
            }
          });
        });

        $(".btn-decrementar").on("click", function() {
          const livroId = $(this).data("livro-id");

          $.ajax({
            type: "POST",
            url: "atualizar_estoque.php",
            data: { livro_id: livroId, operacao: "decrementar" },
            success: function(data) {
              const estoqueElement = $(`span[data-livro-id="${livroId}"]`);
              const novoEstoque = parseInt(estoqueElement.text()) - 1;
              estoqueElement.text(novoEstoque >= 0 ? novoEstoque : 0);
            },
            error: function() {
              alert("Ocorreu um erro ao atualizar o estoque.");
            }
          });
        });

        // Search Functionality
        $(".btn-search").on("click", function() {
          const searchTerm = $("#livroSearch").val().toLowerCase();

          // Show/hide livro items based on search term
          $(".livro-item").each(function() {
            const livroNome = $(this).text().toLowerCase();
            if (livroNome.indexOf(searchTerm) !== -1) {
              $(this).show();
            } else {
              $(this).hide();
            }
          });
        });

        // Clear search and show all when search input is empty
        $("#livroSearch").on("keyup", function() {
          if ($(this).val() === "") {
            $(".livro-item").show();
          }
        });
      });
      livros.forEach(livro => {
      const li = document.createElement('li');
      li.innerHTML = `
        <div class="book-card">
          <img src="data:image/jpeg;base64,${livro.imagem}" alt="${livro.nome}" width="200">
          <h3>${livro.nome}</h3>
          <p>Idade de Leitura: ${livro.Idadeleitura}</p>
          <!-- Aqui você pode adicionar outros detalhes do livro -->
          <a href="infolivros.php?id=${livro.id}" class="btn-secondary">Detalhes</a>
        </div>
  `;
      listaLivros.appendChild(li);
    });
    </script>
<script>
        // Função para mostrar a imagem selecionada no elemento <img>
        function previewImage(event) {
            var input = event.target;
            var img = document.getElementById("imagemPreview");

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                img.src = "";
            }
        }
    </script>  
 <script> 
$(document).ready(function() {
    $(".btn-search").on("click", function() {
        const nomeSearchTerm = $("#nomeSearch").val().toLowerCase();
        const livroSearchTerm = $("#livroSearch").val().toLowerCase();

        // Mostrar/ocultar itens de livro com base nos termos de pesquisa
        $(".livro-item").each(function() {
            const livroNome = $(this).find("h3").text().toLowerCase();
            const nome = $(this).find("input[name='nome']").val().toLowerCase();

            const nomeMatch = nome.includes(nomeSearchTerm);
            const livroMatch = livroNome.includes(livroSearchTerm);

            if (nomeMatch && livroMatch) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script> 

</body>
  </html>