<?php if(session_status()==PHP_SESSION_NONE) session_start(); ?>
<!doctype html><html><head><meta charset='utf-8'><title>Crear Nota</title><link rel='stylesheet' href='/Monolitico/app-users/public/css/styles.css'></head><body>
<h2>Crear Nota</h2>
<?php if(!empty($_SESSION['error'])){ echo '<p style="color:red">'.htmlspecialchars($_SESSION['error']).'</p>'; unset($_SESSION['error']); } ?>
<?php if(!empty($_SESSION['success'])){ echo '<p style="color:green">'.htmlspecialchars($_SESSION['success']).'</p>'; unset($_SESSION['success']); } ?>
<form action='/Monolitico/app-users/db/crear-nota.php' method='post'>
  <label>Estudiante (codigo): <input name='estudiante' required></label><br>
  <label>Materia (codigo): <input name='materia' required></label><br>
  <label>Actividad: <input name='actividad' required></label><br>
  <label>Nota (ej: 3.50): <input name='nota' required></label><br>
  <button type='submit'>Crear</button>
</form>
<p><a href='/Monolitico/app-users/views/dashboard.php'>Volver</a></p>
</body></html>
