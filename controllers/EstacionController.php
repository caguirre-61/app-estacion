<?php
require_once "models/EstacionModel.php";

class EstacionController {
    private $model;

    public function __construct() {
        $this->model = new EstacionModel();
    }

    public function landing() {
        renderView("landing");
    }

    public function panel() {
        $estaciones = $this->model->getAll();
        renderView("panel", ["estaciones" => $estaciones]);
    }

    public function detalle() {
        $id = $_GET['id'] ?? null;
        $estacion = $this->model->getById($id);
        renderView("detalle", ["estacion" => $estacion]);
    }
}
?>