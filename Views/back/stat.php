<?php
      include  'C:/xampp/htdocs/tache_livre/config.php';
      // Establish a connection to the database
$dsn = 'mysql:host=localhost;dbname=projet';
$username = 'nour';
$password = 'incorrect18.20';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

function calculate_stats($produit_table) {
    $sql = "SELECT MIN(price) AS min_price, MAX(price) AS max_price, AVG(price) AS avg_price, SUM(price) AS total_price FROM $produit_table";
    return $sql;
}

$produit_table = 'produit';
$stats_query = calculate_stats($produit_table);

// Assuming you have a valid database connection named $pdo, you can execute the query like this:
$stmt = $pdo->prepare($stats_query);
$stmt->execute();
$stats = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Minimum price: " . $stats["min_price"] . "<br>";
echo "Maximum price: " . $stats["max_price"] . "<br>";
echo "Average price: " . $stats["avg_price"] . "<br>";
echo "Total price: " . $stats["total_price"] . "<br>";

?>
