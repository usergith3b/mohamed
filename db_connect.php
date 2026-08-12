<?php
// Database connection (secure PDO, no debug output)
$host = getenv('DB_HOST') ?: 'db';
$database = getenv('DB_NAME') ?: 'gearout';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_ROOT_PASSWORD') ?: '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
	error_log('DB connection error: ' . $e->getMessage());
	http_response_code(500);
	exit('Database connection error.');
}
?>
