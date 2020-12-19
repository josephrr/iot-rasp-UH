<?php namespace App\Models;

use CodeIgniter\Model;

class ProyectosModel extends Model{
	private $id_proyecto;
	private $fecha;
	private $nombre;
    private $descripcion;
	private $id_usuario;
	private $token;
	private $estado ;

    private $tabla = "proyectos";
    private $tabla_view = "proyectos_view";

    public function __construct(){
         $this->db=db_connect();
	}

    public function setIdProyecto($id_proyecto): void
    {
        $this->id_proyecto = $id_proyecto;
    }

    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function setToken($token): void
    {
        $this->token = $token;
    }

    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    public function selectProyectos() {
        $query = $this->db->table($this->tabla);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectProyecto() {
        $query = $this->db->table($this->tabla);
        $query->where('id_proyecto',$this->id_proyecto);
        return $query->get()->getRow();
    }

    public function selectMisProyectos() {
        $query = $this->db->table($this->tabla);
        $query->where('id_usuario',$this->id_usuario);
        return $query->get()->getResult();
    }

    public function insertar() {
        $builder = $this->db->table($this->tabla);
        $data = array(
            "fecha" => $this->fecha,
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion,
            "id_usuario" => $this->id_usuario,
            "token" => $this->token,
            "estado" => $this->estado,
        );
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function editar()
    {
        $data = array(
            "fecha" => $this->fecha,
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion,
            "id_usuario" => $this->id_usuario,
            "token" => $this->token,
            "estado" => $this->estado,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_proyecto', $this->id_proyecto);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }

    
}
