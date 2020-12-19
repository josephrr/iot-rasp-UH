<?php namespace App\Models;

use CodeIgniter\Model;

class CanalesModel extends Model{
	private $id_canal;
    private $nombre_canal;
    private $id_proyecto;
    private $id_unidad;
    private $estado;

    private $tabla = "canales";
    private $tabla_view = "canales_view";

    public function __construct() {
         $this->db=db_connect();
	}

    public function setIdCanal($id_canal): void
    {
        $this->id_canal = $id_canal;
    }

    public function setNombreCanal($nombre_canal): void
    {
        $this->nombre_canal = $nombre_canal;
    }

    public function setIdProyecto($id_proyecto): void
    {
        $this->id_proyecto = $id_proyecto;
    }

    public function setIdUnidad($id_unidad): void
    {
        $this->id_unidad = $id_unidad;
    }

    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    public function selectCanales() {
        $query = $this->db->table($this->tabla);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectCanalesByIdProyecto() {
        $query = $this->db->table($this->tabla_view);
        $query->where("id_proyecto",$this->id_proyecto);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectCanal() {
        $query = $this->db->table($this->tabla_view);
        $query->where('id_canal',$this->id_canal);
        return $query->get()->getRow();
    }

    public function contarCanales() {
        $query = $this->db->table($this->tabla);
        $query->where('id_proyecto', $this->id_proyecto);
        $query->where('estado',"1");
        $count = $query->countAllResults();
        return $count;
    }

    public function insertar() {
        $builder = $this->db->table($this->tabla);
        $data = array(
            "nombre_canal" => $this->nombre_canal,
            "id_proyecto" => $this->id_proyecto,
            "id_unidad" => $this->id_unidad,
            "estado" => $this->estado,
        );
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function editar()
    {
        $data = array(
            "nombre_canal" => $this->nombre_canal,
            "id_proyecto" => $this->id_proyecto,
            "id_unidad" => $this->id_unidad,
            "estado" => $this->estado,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_canal', $this->id_canal);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }

    
}
