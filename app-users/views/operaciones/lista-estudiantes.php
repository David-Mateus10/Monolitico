<?php if(session_status()==PHP_SESSION_NONE) session_start(); ?>
<!doctype html><html><head><meta charset="utf-8"><title>Lista Estudiantes</title><link rel="stylesheet" href="/Monolitico/app-users/public/css/styles.css"></head><body>
<h2>Estudiantes</h2>
<?php
require_once __DIR__ . '/../../models/database/notas-app-db.php';
$db = DB::getConnection();
$rows = $db->query('SELECT * FROM estudiantes ORDER BY nombre')->fetchAll();
?>
<table>
<tr><th>Codigo</th><th>Nombre</th><th>Email</th><th>Programa</th></tr>
<?php foreach($rows as $s): ?>
  <tr>
    <td><?php echo htmlspecialchars($s['codigo']); ?></td>
    <td><?php echo htmlspecialchars($s['nombre']); ?></td>
    <td><?php echo htmlspecialchars($s['email']); ?></td>
    <td><?php echo htmlspecialchars($s['programa']); ?></td>
  </tr>
<?php endforeach; ?>
</table>
<p><a href="/Monolitico/app-users/views/dashboard.php">Volver</a></p>
</body></html>

