<?php
require_once __DIR__ . '/../models/entities/estudiante.php';
require_once __DIR__ . '/../models/utils/user-sql.php';
require_once __DIR__ . '/session-controller.php';
class UsersController extends SessionController {
    public function listAll(){
        $db = DB::getConnection();
        $s = $db->query('SELECT * FROM estudiantes ORDER BY nombre');
        $students = $s->fetchAll();
        require __DIR__ . '/../views/operaciones/lista-estudiantes.php';
    }
}
