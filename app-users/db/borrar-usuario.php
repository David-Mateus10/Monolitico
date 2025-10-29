<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
session_start();
$codigo = $_GET['codigo'] ?? null;
if (!$codigo) { header('Location: /Monolitico/app-users/views/operaciones/borrar-usuario.php'); exit; }
$db = DB::getConnection();
$s = $db->prepare('SELECT COUNT(*) FROM notas WHERE estudiante = ?'); $s->execute([$codigo]);
if ((int)$s->fetchColumn() > 0) { $_SESSION['error'] = 'No se puede eliminar, tiene notas.'; header('Location: /Monolitico/app-users/views/operaciones/borrar-usuario.php'); exit; }
$d = $db->prepare('DELETE FROM estudiantes WHERE codigo = ?'); $d->execute([$codigo]);
$_SESSION['success']='Estudiante eliminado';
header('Location: /Monolitico/app-users/views/operaciones/borrar-usuario.php');
exit;
