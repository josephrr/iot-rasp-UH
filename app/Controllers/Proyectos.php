<?php namespace App\Controllers;

use App\Models\CanalesModel;
use App\Models\DatosModel;
use App\Models\ProyectosModel;
use App\Models\UnidadesModel;

class Proyectos extends BaseController {

    public function index() {
        $ProyectosModel = new ProyectosModel();
        $CanalesModel = new CanalesModel();
        $id_usuario = session()->get('id_usuario');
        $ProyectosModel->setIdUsuario($id_usuario);
        $proyectos = $ProyectosModel->selectMisProyectos();
        foreach ($proyectos as $proyecto) {
            $CanalesModel->setIdProyecto($proyecto->id_proyecto);
            $count = $CanalesModel->contarCanales();
            $proyecto->n_canales = $count;
        }
        $data = array(
            'proyectos' => $proyectos
        );
        return view('proyectos/proyectos', $data);
    }

    public function agregarProyecto() {
        $UnidadesModel = new UnidadesModel();
        $unidades = $UnidadesModel->selectUnidades();
        $data = array(
            'unidades' => $unidades
        );
        return view('proyectos/agregarProyecto', $data);
    }

    public function consultaProyecto() {
        $ProyectosModel = new ProyectosModel();
        $CanalesModel = new CanalesModel();
        $DatosModel = new DatosModel();
        $id_proyecto = $this->request->uri->getSegment(3);
        $id_usuario = session()->get('id_usuario');
        $ProyectosModel->setIdProyecto($id_proyecto);
        $proyecto = $ProyectosModel->selectProyecto();
        $CanalesModel->setIdProyecto($proyecto->id_proyecto);
        $canales = $CanalesModel->selectCanalesByIdProyecto();
        $n_datos = 0;
        foreach ($canales as $canal){
            $DatosModel->setIdCanal($canal->id_canal);
            $datos = $DatosModel->selectDatosByIdCanal();
            $x = array();
            $y = array();
            foreach ($datos as $clave => $dato) {
                array_push( $x, ++$clave);
                array_push( $y, $dato->valor);
            }
            $n_datos += count($datos);
            $canal->datos = $datos;
            $canal->x = $x;
            $canal->y = $y;
        }
        $n_canales = count($canales);
        $proyecto->n_canales = $n_canales;
        $proyecto->n_datos = $n_datos;

        $data = ($id_usuario != $proyecto->id_usuario) ? array() :
            array(
                'proyecto' => $proyecto,
                'canales' => $canales
            );
        return view('proyectos/verProyecto', $data);
    }

    public function consultaDatosCanal() {
        $DatosModel = new DatosModel();
        $id_canal = $this->request->uri->getSegment(3);
        $DatosModel->setIdCanal($id_canal);
        $datos = $DatosModel->selectDatosByIdCanal();
        $array = array();
        foreach ($datos as $clave => $dato) {
            array_push( $array, ["x" =>  ++$clave, "y" => (int) $dato->valor]);
        }
        $this->response->setContentType('Content-Type: application/json');
        return json_encode($array);
    }

    public function insertar() {
        $nombre = $this->request->getPost('nombre');
        $descripcion = $this->request->getPost('descripcion');
        $canales = $this->request->getPost('canales');
        $fecha = date("Y-m-d");
        $id_usuario = session()->get('id_usuario');
        $estado = 1;
        $token = $this->unique_code(25);
        $ProyectosModel = new ProyectosModel();
        $ProyectosModel->setFecha($fecha);
        $ProyectosModel->setNombre($nombre);
        $ProyectosModel->setDescripcion($descripcion);
        $ProyectosModel->setIdUsuario($id_usuario);
        $ProyectosModel->setToken($token);
        $ProyectosModel->setEstado($estado);
        $id_proyecto = $ProyectosModel->insertar();

        foreach ($canales as $canal) {
            $nombre_canal = $canal['nombre_canal'];
            $id_unidad = $canal['id_unidad'];
            $CanalesModel = new CanalesModel();
            $CanalesModel->setNombreCanal($nombre_canal);
            $CanalesModel->setIdProyecto($id_proyecto);
            $CanalesModel->setIdUnidad($id_unidad);
            $CanalesModel->setEstado($estado);
            $CanalesModel->insertar();
        }
        return redirect()->to(base_url("proyectos/consultaProyecto/$id_proyecto"));


    }

    public function unique_code($limit) {
        return mb_strtoupper(substr(sha1(uniqid(mt_rand())), 0, $limit));
    }

}
