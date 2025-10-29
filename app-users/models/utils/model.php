<?php
require_once __DIR__ . '/../database/notas-app-db.php';
class Model {
    protected $db;
    public function __construct(){ $this->db = DB::getConnection(); }
}
