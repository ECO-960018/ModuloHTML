 <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dblocadora", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado";
} catch(PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}
?> 