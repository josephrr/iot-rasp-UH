<?php namespace App\Models;

use CodeIgniter\Model;

class DatosModel extends Model {

    private $id_dato;
    private $fecha;
    private $id_canal;
    private $valor;
    private $estado;

    private $tabla = "datos";
    private $tabla_view = "datos_view";

    public function __construct() {
        $this->db=db_connect();
    }

    public function setIdDato($id_dato): void
    {
        $this->id_dato = $id_dato;
    }

    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    public function setIdCanal($id_canal): void
    {
        $this->id_canal = $id_canal;
    }


    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    public function selectDatos() {
        $query = $this->db->table($this->tabla);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectDatosByIdCanal() {
        $query = $this->db->table($this->tabla);
        $query->where('id_canal',$this->id_canal);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectDato() {
        $query = $this->db->table($this->tabla);
        $query->where('id_dato',$this->id_dato);
        return $query->get()->getRow();
    }

    public function contarDatos() {
        $query = $this->db->table($this->tabla);
        $query->where('id_canal',$this->id_canal);
        $query->where('estado',"1");
        $count = $query->countAllResults();
        return $count;
    }

    public function insertar() {
        $builder = $this->db->table($this->tabla);
        $data = array(
            "fecha" => $this->fecha,
            "id_canal" => $this->id_canal,
            "valor" => $this->valor,
            "estado" => $this->estado,
        );
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function editar()
    {
        $data = array(
            "fecha" => $this->fecha,
            "id_canal" => $this->id_canal,
            "valor" => $this->valor,
            "estado" => $this->estado,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_dato', $this->id_dato);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }


}
