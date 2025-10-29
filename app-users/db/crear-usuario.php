<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
session_start();
$codigo = $_POST['codigo'] ?? null;
$nombre = $_POST['nombre'] ?? null;
$email = $_POST['email'] ?? null;
$programa = $_POST['programa'] ?? null;
if (!$codigo || !$nombre) { $_SESSION['error']='Faltan datos'; header('Location: /Monolitico/app-users/views/operaciones/crear-usuario.php'); exit; }
$db = DB::getConnection();
try {
    $s = $db->prepare('INSERT INTO estudiantes(codigo,nombre,email,programa) VALUES(?,?,?,?)');
    $s->execute([$codigo,$nombre,$email,$programa]);
    $_SESSION['success']='Estudiante creado';
} catch (Exception $e) {
    $_SESSION['error']='Error al crear: '.$e->getMessage();
}
header('Location: /Monolitico/app-users/views/operaciones/crear-usuario.php');
exit;
