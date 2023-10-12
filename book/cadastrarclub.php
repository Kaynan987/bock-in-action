<!-- ฅ•ω•ฅ -->
<?php
session_start();

// Verifica se o usuário está logado
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  
    <title>Cadastro de Livros no club</title>
    <header>
        <nav>
            <ul>
                <li><a href="dashboard.php">Voltar</a></li>
                <div>
                </div>
                <script>
                    
                </script>
            </ul>
        </nav>
    </header>
    
    <!DOCTYPE html>
<html>
<head>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .container input[type="text"],
        .container input[type="date"],
        .container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #6200ff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .container img {
            max-width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    
</head>
<body>   
    <div class="container">
        <h2>Cadastro de Livros no club</h2>
    <hr>

    <form id="uploadForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <label for="imagem">Selecione uma imagem:</label>
            <input type="file" name="imagem" accept="image/*" id="imagemInput" onchange="previewImage(event)">
            <br>
            <img id="imagemPreview" src="" alt="Preview da imagem" style="max-width: 300px;">
            <br>

    <hr>
    <label for="nome">Nome do Livro:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do livro" required>

            <label for="sinopse">Sinopse:</label>
            <textarea id="sinopse" name="sinopse" placeholder="Digite a sinopse do livro" required></textarea>

            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" placeholder="Digite a categoria do livro" required>

            <label for="data">Data de Lançamento:</label>
            <input type="date" id="data" name="data" required>

            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" placeholder="Digite o autor do livro" required>

            <label for="Idadeleitura">Faixa Etária:</label>
            <input type="text" id="Idadeleitura" name="Idadeleitura" placeholder="Digite a faixa etária do livro" required>

            <label for="paginas">Quantidade de Páginas:</label>
            <input type="text" id="paginas" name="paginas" placeholder="Digite a quantidade de páginas do livro" required>

            <label for="idioma">Idioma:</label>
            <input type="text" id="idioma" name="idioma" placeholder="Digite o idioma do livro" required>
            
            <label for="estoque">Estoque:</label>
            <input type="text" id="estoque" name="estoque" placeholder="Quantidade de livros em estoque" required>

            <label for="locarização">locarização:</label>
            <input type="text" id="localizacao" name="localizacao" placeholder="localizacao do livro" required>
            
            
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
        

        
        <?php

        // Conexão com o banco de dados
        $host = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "livros";

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST['nome'];
            $category = $_POST['categoria'];
            $date = $_POST['data'];
            $author = $_POST['autor'];
            $age_range = $_POST['Idadeleitura'];
            $pages = $_POST['paginas'];
            $language = $_POST['idioma'];
            $imagem = $_FILES["imagem"];
            $sinopse = $_POST['sinopse'];
            $estoque = $_POST['estoque'];           
            $localizacao = $_POST['localizacao'];            

            // Verifica se uma imagem foi enviada
            if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
                $imagem = $_FILES["imagem"];
                $nomeFinal = time() . '_' . $imagem["name"];

            if (move_uploaded_file($imagem["tmp_name"], $nomeFinal)) {
                $conteudo = file_get_contents($nomeFinal);
                $conteudo = $conn->real_escape_string($conteudo);

                    // Prepara e executa a inserção no banco de dados
                   $sql = "INSERT INTO club (nome, categoria, data, autor, Idadeleitura, paginas, idioma, imagem, sinopse, estoque, localizacao) 
                     VALUES ('$name', '$category', '$date', '$author', '$age_range', '$pages', '$language', '$conteudo', '$sinopse', '$estoque', '$localizacao')";

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

    </div>
</div>
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
</body>
</html>
