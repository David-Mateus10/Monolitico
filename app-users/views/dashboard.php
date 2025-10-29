<?php if(session_status()==PHP_SESSION_NONE) session_start(); ?>
<!doctype html><html><head><meta charset="utf-8"><title>Dashboard</title><link rel="stylesheet" href="/Monolitico/app-users/public/css/styles.css"></head><body>
<h1>Dashboard</h1>
<p>Bienvenido <?php echo htmlspecialchars($_SESSION['user']['nombre'] ?? 'Usuario'); ?></p>
<nav>
  <a href="/Monolitico/app-users/views/operaciones/lista-estudiantes.php">Estudiantes</a> |
  <a href="/Monolitico/app-users/views/operaciones/crear-usuario.php">Crear Estudiante</a> |
  <a href="/Monolitico/app-users/views/operaciones/borrar-usuario.php">Borrar Estudiante</a> |
  <a href="/Monolitico/app-users/views/operaciones/crear-programa.php">Programas</a> |
  <a href="/Monolitico/app-users/views/operaciones/crear-materia.php">Materias</a> |
  <a href="/Monolitico/app-users/views/operaciones/crear-nota.php">Notas</a> |
  <a href="/Monolitico/app-users/controllers/session-controller.php?action=logout">Cerrar sesión</a>
</nav>
</body></html>
