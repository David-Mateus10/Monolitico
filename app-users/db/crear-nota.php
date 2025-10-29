<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
session_start();
$materia = $_POST['materia'] ?? null; $estudiante = $_POST['estudiante'] ?? null; $actividad = $_POST['actividad'] ?? null; $nota = $_POST['nota'] ?? null;
if (!$materia || !$estudiante || !$actividad || !$nota) { $_SESSION['error']='Faltan datos'; header('Location: /Monolitico/app-users/views/operaciones/crear-nota.php'); exit; }
$db = DB::getConnection();
$n = round(floatval($nota),2);
if ($n <= 0 || $n >= 5) { $_SESSION['error']='Nota inválida (debe ser >0 y <5)'; header('Location: /Monolitico/app-users/views/operaciones/crear-nota.php'); exit; }
// verificar que materia pertenece al programa del estudiante
$s = $db->prepare('SELECT programa FROM estudiantes WHERE codigo=?'); $s->execute([$estudiante]); $progE = $s->fetchColumn();
$s = $db->prepare('SELECT programa FROM materias WHERE codigo=?'); $s->execute([$materia]); $progM = $s->fetchColumn();
if (!$progE || !$progM || $progE !== $progM) { $_SESSION['error']='Materia no pertenece al programa del estudiante'; header('Location: /Monolitico/app-users/views/operaciones/crear-nota.php'); exit; }
$ins = $db->prepare('INSERT INTO notas(materia,estudiante,actividad,nota) VALUES(?,?,?,?)');
try{ $ins->execute([$materia,$estudiante,$actividad,$n]); $_SESSION['success']='Nota registrada'; }catch(Exception $e){ $_SESSION['error']='Error: '.$e->getMessage(); }
header('Location: /Monolitico/app-users/views/operaciones/crear-nota.php'); exit;
