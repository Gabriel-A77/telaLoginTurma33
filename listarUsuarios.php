 <?php

$host = 'localhost';
$dbname = 'nome_do_banco';
$user = 'usuario';
$password = 'senha';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $conn->prepare("SELECT * FROM nome_da_tabela"); 
    $stmt->execute();

    
    if ($stmt->rowCount() > 0) {
        echo "<ul>";
       
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            echo "<li>" . htmlspecialchars($row['campo1']) . " - " . htmlspecialchars($row['campo2']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum registro encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?> 
