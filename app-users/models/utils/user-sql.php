<?php
require_once __DIR__ . '/../database/notas-app-db.php';
function find_estudiante_by_codigo($codigo) {
    $db = DB::getConnection();
    $s = $db->prepare('SELECT * FROM estudiantes WHERE codigo = ?');
    $s->execute([$codigo]);
    return $s->fetch();
}
