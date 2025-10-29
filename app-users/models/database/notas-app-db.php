<?php
class DB {
    private static $pdo = null;
    public static function getConnection() {
        if (self::$pdo === null) {
            $host = '127.0.0.1';
            $db   = 'notas_app';
            $user = 'root';
            $pass = ''; // cambia si tu XAMPP tiene contraseña
            $charset = 'utf8mb4';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die('DB connection failed: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
