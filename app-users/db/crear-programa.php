<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
session_start();
$codigo = $_POST['codigo'] ?? null; $nombre = $_POST['nombre'] ?? null;
if (!$codigo||!$nombre){ $_SESSION['error']='Faltan datos'; header('Location: /Monolitico/app-users/views/operaciones/crear-programa.php'); exit; }
$db=DB::getConnection();
try{ $s=$db->prepare('INSERT INTO programas(codigo,nombre) VALUES(?,?)'); $s->execute([$codigo,$nombre]); $_SESSION['success']='Programa creado'; }catch(Exception $e){ $_SESSION['error']='Error: '.$e->getMessage(); }
header('Location: /Monolitico/app-users/views/operaciones/crear-programa.php'); exit;
