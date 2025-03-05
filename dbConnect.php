<?php
$dsn = 'mysql:host=your_host;dbname=your_dbname';
$username = 'your_username';
$password = 'your_password';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
?>
