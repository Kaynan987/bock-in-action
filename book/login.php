    <?php
    session_start();

    // Verifica se o usuário está logado
    function isLoggedIn() {
        return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    }
    ?>
    <?php
    // Configuração do banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "usuarios";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows === 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
        } else {
            $loginError = "Credenciais inválidas";
        }
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <style>
        /* Estilos gerais */

        body {
        background-color: black;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Isso ajuda a centralizar verticalmente o conteúdo */
    }
    

    h1{
        color: white;
        text-align: center;
        position: relative;
        bottom: 20px;
    }

    p{
        color: white;   
    }



    /* Estilos para o link "Sair" */
    a {
        color: white; /* Cor do texto cinza escuro */
        text-decoration: none;
        border: white 1px solid;
        padding: 10px 10px;
        border-radius: 20px;
        position: relative;
        top: 25px;
        margin-inline: 50px;
    }

    a:hover {
        color: white;
        background-color: gray; 
    }

.teste{
    border: white 1px solid;
    background-color: #333333;
    border-radius: 20px;
    padding: 50px 20px;
}

/* Estilo para o formulário de autenticação */
.auth-card {
 
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Estilo para o cabeçalho do formulário */
.auth-card h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
}

/* Estilo para o texto de erro, se houver */
.auth-card p {
    color: white;
    text-align: center;
}

/* Estilo para os campos de entrada de texto */
.auth-card label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: white;
}

.auth-card input[type="text"],
.auth-card input[type="password"] {

    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 30px;
    text-align: center;
}

.button{
    color: white;
    background-color: transparent;
    border: white 1px solid;
    border-radius: 20px;
    padding: 10px 10px;
    
}



/* Centralizar o formulário na página */
.center {
    text-align: center;
}
    </style>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div class="teste">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
        <h1>Dashboard</h1>
        <p>Bem-vindo à página de dashboard, <?php echo $_SESSION['email']; ?>!</p>
        <div class="botom">
        <a href="?logout=true">SAIR</a>
        <a href="index.php">VOLTAR</a>
        </div>
       
        <?php else : ?>
            <center><h1><p class="texto">LOGIN</p></h1></center>
            
            <?php if (isset($loginError)) : ?>
                <p><?php echo $loginError; ?></p>
            <?php endif; ?>
            <center><div class="auth-card">
            <form method="post">
            <label class="texto" for="email">Usuário:</label>
            <center> <input class="caixa" type="text" id="email" name="email" required><br></center>

                <label class="texto" for="password">Senha:</label>
                <center><input class="caixa" type="password" id="password" name="password" required><br></center>

                <center><input class="button" href="index.php"type="submit" value="Entrar"></center>
            </form>
            </div>   </center> 
    <?php endif; ?>
    </div>
    </body>
    </html>
