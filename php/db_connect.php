<?php
// db_connect.php
$host = 'localhost';
$db = 'institute_portal';
$user = 'root';  // change as necessary
$pass = '';      // change as necessary

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>