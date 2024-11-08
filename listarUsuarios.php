<!-- <?php
// Conexão com o banco de dados (substitua pelos seus próprios valores)
$host = 'localhost';
$dbname = 'nome_do_banco';
$user = 'usuario';
$password = 'senha';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Configurar o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para buscar os registros
    $stmt = $conn->prepare("SELECT * FROM nome_da_tabela"); // Substitua 'nome_da_tabela' pelo nome da sua tabela
    $stmt->execute();

    // Verifica se há registros
    if ($stmt->rowCount() > 0) {
        echo "<ul>";
        // Loop pelos registros encontrados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Exemplo de exibição dos dados
            echo "<li>" . htmlspecialchars($row['campo1']) . " - " . htmlspecialchars($row['campo2']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum registro encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?> -->
