<?php namespace App\Models;

use CodeIgniter\Model;

class UnidadesModel extends Model{
    private $id_unidad;
    private $unidad;
    private $simbolo;

    private $tabla = "unidades";
    private $tabla_view = "unidades_view";

    public function __construct(){
        $this->db=db_connect();
    }

    public function setIdUnidad($id_unidad): void
    {
        $this->id_unidad = $id_unidad;
    }

    public function setUnidad($unidad): void
    {
        $this->unidad = $unidad;
    }

    public function setSimbolo($simbolo): void
    {
        $this->simbolo = $simbolo;
    }

    public function selectUnidades() {
        $query = $this->db->table($this->tabla);
        return $query->get()->getResult();
    }

    public function selectUnidad() {
        $query = $this->db->table($this->tabla);
        $query->where('id_unidad',$this->id_unidad);
        return $query->get()->getRow();
    }

    public function insertar() {
        $builder = $this->db->table($this->tabla);
        $data = array(
            "unidad" => $this->unidad,
            "simbolo" => $this->simbolo,
        );
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function editar()
    {
        $data = array(
            "unidad" => $this->unidad,
            "simbolo" => $this->simbolo,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_unidad', $this->id_unidad);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }


}
