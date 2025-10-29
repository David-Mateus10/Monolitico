<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
session_start();
$codigo = $_POST['codigo'] ?? null; $nombre = $_POST['nombre'] ?? null; $programa = $_POST['programa'] ?? null;
if (!$codigo||!$nombre||!$programa){ $_SESSION['error']='Faltan datos'; header('Location: /Monolitico/app-users/views/operaciones/crear-materia.php'); exit; }
$db=DB::getConnection();
try{ $s=$db->prepare('INSERT INTO materias(codigo,nombre,programa) VALUES(?,?,?)'); $s->execute([$codigo,$nombre,$programa]); $_SESSION['success']='Materia creada'; }catch(Exception $e){ $_SESSION['error']='Error: '.$e->getMessage(); }
header('Location: /Monolitico/app-users/views/operaciones/crear-materia.php'); exit;
