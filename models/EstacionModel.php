<?php
class EstacionModel {
    private $estaciones = [
        1 => ["id" => 1, "apodo" => "MattLab I", "ubicacion" => "Buenos Aires, Garín", "visitas" => 142],
        2 => ["id" => 2, "apodo" => "EcoEstación Central", "ubicacion" => "Córdoba, Capital", "visitas" => 89],
        3 => ["id" => 3, "apodo" => "NorteSensor", "ubicacion" => "Salta, San Lorenzo", "visitas" => 205]
    ];

    public function getAll() {
        return $this->estaciones;
    }

    public function getById($id) {
        return $this->estaciones[$id] ?? null;
    }
}
?>