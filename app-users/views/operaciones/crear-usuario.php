<?php if(session_status()==PHP_SESSION_NONE) session_start(); ?>
<!doctype html><html><head><meta charset="utf-8"><title>Crear Estudiante</title><link rel="stylesheet" href="/Monolitico/app-users/public/css/styles.css"></head><body>
<h2>Crear Estudiante</h2>
<?php if(!empty($_SESSION['error'])){ echo '<p style="color:red">'.htmlspecialchars($_SESSION['error']).'</p>'; unset($_SESSION['error']); } ?>
<?php if(!empty($_SESSION['success'])){ echo '<p style="color:green">'.htmlspecialchars($_SESSION['success']).'</p>'; unset($_SESSION['success']); } ?>
<form action="/Monolitico/app-users/db/crear-usuario.php" method="post">
  <label>Codigo: <input name="codigo" required></label><br>
  <label>Nombre: <input name="nombre" required></label><br>
  <label>Email: <input name="email"></label><br>
  <label>Programa: <input name="programa"></label><br>
  <button type="submit">Crear</button>
</form>
<p><a href="/Monolitico/app-users/views/dashboard.php">Volver</a></p>
</body></html>
