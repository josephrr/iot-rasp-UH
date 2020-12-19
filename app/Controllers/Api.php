<?php namespace App\Controllers;

use App\Models\CanalesModel;
use App\Models\DatosModel;
use App\Models\ProyectosModel;
use App\Models\UsuariosModel;

class Api extends BaseController {

    //PYTHON API
    public function insertar() {
        $DatosModel = new DatosModel();
        $CanalesModel = new CanalesModel();
        $token = $this->request->getGetPost('token');
        $id_canal = $this->request->getGetPost('id_canal');
        $valor = $this->request->getGetPost('valor');
        $fecha = date("Y-m-d");
        $estado = 1;
        $CanalesModel->setIdCanal($id_canal);
        $canal = $CanalesModel->selectCanal();
        if($canal->token == $token){
            $DatosModel->setFecha($fecha);
            $DatosModel->setIdCanal($id_canal);
            $DatosModel->setValor($valor);
            $DatosModel->setEstado($estado);
            $id_dato = $DatosModel->insertar();
            if($id_dato > 0) {
                $this->response->setContentType('Content-Type: application/json');
                return json_encode(array("status" => 201, "mensaje" => "Se insertó el valor"));
            }else {
                $this->response->setContentType('Content-Type: application/json');
                return json_encode(array("status" => 501, "mensaje" => "No se pudo insertar el dato"));
            }
        }else {
            $this->response->setContentType('Content-Type: application/json');
            return json_encode(array("status" => 401, "mensaje" => "El token no coincide con el canal"));
        }
    }

    public function consultar() {
        $DatosModel = new DatosModel();
        $CanalesModel = new CanalesModel();
        $token = $this->request->getGetPost('token');
        $id_canal = $this->request->getGetPost('id_canal');
        $CanalesModel->setIdCanal($id_canal);
        $canal = $CanalesModel->selectCanal();
        if($canal->token == $token) {
            $DatosModel->setIdCanal($id_canal);
            $datos = $DatosModel->selectDatosByIdCanal();
            $this->response->setContentType('Content-Type: application/json');
            return json_encode(array("status" => 201, "datos" => $datos));
        } else {
            $this->response->setContentType('Content-Type: application/json');
            return json_encode(array("status" => 401, "mensaje" => "El token no coincide con el canal"));
        }
    }
    //PYTHON API END

    //FLUTTER API
    public function listadoProyectos() {
        $ProyectosModel = new ProyectosModel();
        $proyectos = $ProyectosModel->selectProyectos();
        return json_encode($proyectos);
    }

    public function listadoMisProyectos() {
        $id_usuario = $this->request->uri->getSegment(3);
        $ProyectosModel = new ProyectosModel();
        $ProyectosModel->setIdUsuario($id_usuario);
        $proyectos = $ProyectosModel->selectMisProyectos();
        return json_encode($proyectos);
    }

    public function listadoCanalesById() {
        $id_proyecto = $this->request->getPost('id_proyecto');
        $CanalesModel = new CanalesModel();
        $DatosModel = new DatosModel();
        $CanalesModel->setIdProyecto($id_proyecto);
        $canales = $CanalesModel->selectCanalesByIdProyecto();
        foreach ($canales as $canal){
            $DatosModel->setIdCanal($canal->id_canal);
            $datos = $DatosModel->selectDatosByIdCanal();
            $array = array();
            foreach ($datos as $clave => $dato) {
                array_push( $array, ["x" =>  ++$clave, "y" => (double) $dato->valor]);
            }
            $canal->datos = $array;
        }
        return json_encode($canales);
    }

    public function consultaDatosCanal() {
        $DatosModel = new DatosModel();
        $id_canal = $this->request->uri->getSegment(3);
        $DatosModel->setIdCanal($id_canal);
        $datos = $DatosModel->selectDatosByIdCanal();
        $array = array();
        foreach ($datos as $clave => $dato) {
            array_push( $array, ["x" =>  ++$clave, "y" => (double) $dato->valor]);
        }
        return json_encode($array);
    }


    public function loginUsuario() {
        $UsuariosModel = new UsuariosModel();
        $correo = $this->request->getPost('correo');
        $pass   = $this->request->getPost('pass');
        $UsuariosModel->setCorreo($correo);
        $datos_usuario = $UsuariosModel->buscarUsuario();
        if($datos_usuario){
            if($pass == $datos_usuario->pass){
                $userdata = array(
                    'id_usuario' => $datos_usuario->id_usuario,
                    'nombre'     => $datos_usuario->nombre,
                    'correo'     => $datos_usuario->correo,
                );
            }else{
                $userdata = array(
                    'error' => ['message' => "USUARIO_DATOS_INCORRECTOS"],
                );
            }
        }else{
            $userdata = array(
                'error' => ['message' => "USUARIO_DATOS_INCORRECTOS"],
            );
        }
        return json_encode($userdata);
    }

    public function perfilData() {
        $UsuariosModel = new UsuariosModel();
        $id_usuario = $this->request->getPost('id_usuario');
        $UsuariosModel->setIdUsuario($id_usuario);
        $usuario = $UsuariosModel->selectUsuario();
        return json_encode($usuario);
    }
    //FLUTTER API END

}
