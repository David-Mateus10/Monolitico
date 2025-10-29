<?php
session_start();
require_once __DIR__ . '/../models/database/notas-app-db.php';

$codigo = $_POST['user'] ?? '';
$nombre = $_POST['pwd'] ?? ''; // aquí usaremos el campo pwd como "nombre"

if (!$codigo || !$nombre) {
    $_SESSION['error'] = 'Debe ingresar código y nombre';
    header('Location: /Monolitico/index.html');
    exit;
}

$db = DB::getConnection();
$stmt = $db->prepare('SELECT * FROM estudiantes WHERE codigo = ? AND nombre = ?');
$stmt->execute([$codigo, $nombre]);
$user = $stmt->fetch();

if ($user) {
    $_SESSION['user'] = [
        'codigo' => $user['codigo'],
        'nombre' => $user['nombre'],
        'programa' => $user['programa']
    ];
    header('Location: /Monolitico/app-users/views/dashboard.php');
    exit;
} else {
    $_SESSION['error'] = 'Datos incorrectos. Verifique código y nombre exactamente como están en BD.';
    header('Location: /Monolitico/index.html');
    exit;
}
