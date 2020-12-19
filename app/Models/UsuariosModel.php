<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class UsuariosModel extends Model{

    private $id_usuario;
    private $nombre;
    private $correo;
    private $pass;
    private $token_pass;
    private $id_pais;
    private $estado;
    private $tabla = "usuarios";
    private $tabla_view = "usuarios_view";

    public function __construct() {
        $this->db=db_connect();
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
        return $this;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
        return $this;
    }

    public function setPass($pass){
        $this->pass = $pass;
        return $this;
    }

    public function setTokenPass($token_pass): void
    {
        $this->token_pass = $token_pass;
    }

    public function setIdPais($id_pais): void
    {
        $this->id_pais = $id_pais;
    }

    public function setEstado($estado){
        $this->estado = $estado;
        return $this;
    }

    public function buscarUsuario(){
        $query = $this->db->table($this->tabla);
        $query->where('correo',$this->correo);
        $query->where('estado',"1");
        return $query->get()->getRow();
    }

    public function selectUsuarios() {
        $query = $this->db->table($this->tabla);
        $query->where('estado',"1");
        return $query->get()->getResult();
    }

    public function selectUsuariosMant() {
        $query = $this->db->table($this->tabla);
        return $query->get()->getResult();
    }

    public function selectUsuario() {
        $query = $this->db->table($this->tabla);
        $query->where('id_usuario',$this->id_usuario);
        return $query->get()->getRow();
    }

    public function insertar() {
        $builder = $this->db->table($this->tabla);
        $data = array(
            "nombre" => $this->nombre,
            "correo" => $this->correo,
            "pass" => $this->pass,
            "id_pais" => $this->id_pais,
            "estado" => $this->estado,
        );
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function editar()
    {
        $data = array(
            "nombre" => $this->nombre,
            "correo" => $this->correo,
            "pass" => $this->pass,
            "id_pais" => $this->id_pais,
            "estado" => $this->estado,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_usuario', $this->id_usuario);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }

    public function editarTokenPass()
    {
        $data = array(
            "token_pass" => $this->token_pass,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_usuario', $this->id_usuario);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }

    public function editarPass(){
        $data = array(
            "pass" => $this->pass,
        );
        $query = $this->db->table($this->tabla);
        $query->where('id_usuario', $this->id_usuario);
        $query->update($data);
        return ($this->db->affectedRows() > 0);
    }


}
