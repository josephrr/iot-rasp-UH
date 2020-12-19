<?php namespace App\Models;

use CodeIgniter\Model;

class PaisesModel extends Model{
	private $id_pais, $iso, $pais;
    private $tabla = "paises";
    public function __construct(){
         $this->db=db_connect();
	}


    public function setIdPais($id_pais): void
    {
        $this->id_pais = $id_pais;
    }

    public function setIso($iso): void
    {
        $this->iso = $iso;
    }

    public function setPais($pais): void
    {
        $this->pais = $pais;
    }

    public function selectPaises(){
        $query = $this->db->table($this->tabla)->orderBy("pais");
        return $query->get()->getResult();
    }



}
