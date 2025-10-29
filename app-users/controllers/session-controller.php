<?php
require_once __DIR__ . '/../models/database/notas-app-db.php';
if (session_status() == PHP_SESSION_NONE) session_start();
class SessionController {
    protected $db;
    public function __construct(){ $this->db = DB::getConnection(); }
    public function check(){ return isset($_SESSION['user']); }
    public function requireLogin(){ if (!$this->check()){ header('Location: /Monolitico/index.html'); exit; } }
    public function logout(){ session_unset(); session_destroy(); header('Location: /Monolitico/index.html'); exit; }
}
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $sc = new SessionController();
    $sc->logout();
}
