<?php
$servername ="localhost";
$username = "root";
$password = "root";
$dbname = "phpdev";

/**
 * Script pour creer rapidement la table necessaire pour la creation de la table des utilisateurs
 */
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE auth (
	ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(255) DEFAULT NULL,
	password VARCHAR(255) DEFAULT NULL
	)";

  $pdo->exec($sql);
  echo "Table Auth created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}

$pdo = null;
?>
