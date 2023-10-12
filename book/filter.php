<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultados do Filtro</title>
</head>
<body>
    <header>
        <h1>Resultados do Filtro</h1>
    </header>

    <main>
        <section class="results">
        <?php
// Conexão com o banco de dados (substitua com suas próprias credenciais)
$host = 'localhost';
$dbname = 'livros';
$username = 'root';
$password = 'root';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

if (isset($_POST['categoria'])) {
    $categoriasSelecionadas = $_POST['categoria'];

    echo "<h2>Resultados:</h2>";

    foreach ($categoriasSelecionadas as $categoria) {
        // Consulta SQL para buscar até 10 livros aleatórios na categoria selecionada
        $query = "SELECT * FROM livros WHERE categoria = :categoria ORDER BY RAND() LIMIT 10";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->execute();

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($livros)) {
            echo "<h3>Livros na categoria $categoria:</h3>";
            echo "<ul>";
            foreach ($livros as $livro) {
                echo "<li>{$livro['titulo']} - {$livro['autor']}<br>{$livro['sinopse']}</li>";
            }
            echo "</ul>";
        }
    }
} else {
    echo "<p>Nenhuma categoria selecionada.</p>";
}
?>
        </section>
    </main>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Filtro de Livros</title>
</head>
<body>
    <header>
        <h1>Filtro de Livros</h1>
    </header>

    <main>
        <section class="options">
            <h2>Selecione suas preferências:</h2>
            <form action="filter.php" method="post">
                <label>
                    <input type="checkbox" name="categoria[]" value="romance"> Romance
                </label>
                <label>
                    <input type="checkbox" name="categoria[]" value="aventura"> Aventura
                </label>
                <label>
                    <input type="checkbox" name="categoria[]" value="ficcao"> Ficção
                </label>
                <label>
                    <input type="checkbox" name="categoria[]" value="terror"> Terror
                </label>
                <!-- Adicione mais opções de categoria aqui -->

                <button type="submit">Filtrar</button>
            </form>
        </section>

        <!-- Espaço para exibir os resultados -->
        <section class="results">
            <!-- Os resultados serão exibidos aqui pelo filtro -->
        </section>
    </main>
</body>
</html>
