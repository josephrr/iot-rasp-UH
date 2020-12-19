<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuariosModel;
use App\Models\PaisesModel;
use App\Libraries\mailer;

class Login extends Controller{

    //VISTAS
    public function index() {
        $paises = new PaisesModel();
        $data = array(
            'paises' => $paises->selectPaises()
        );
        return view('login/login',$data);
    }

    public function reset() {
        return view('login/reset');
    }
    // END VISTAS

    public function login() {
        $UsuariosModel = new UsuariosModel();
        $correo = $this->request->getPost('correo');
        $pass = $this->request->getPost('pass');
        $UsuariosModel->setCorreo($correo);
        $datos_usuario = $UsuariosModel->buscarUsuario();
        if($datos_usuario){
            if($pass == $datos_usuario->pass) {
                $arraydata = array(
                    'id_usuario' => $datos_usuario->id_usuario,
                    'id_pais' => $datos_usuario->id_pais,
                    'nombre' => $datos_usuario->nombre,
                    'correo' => $datos_usuario->correo,
                );
                $session = \Config\Services::session();
                $session->set($arraydata);
                echo 1;
            }else{
                echo 0;
            }

        }else{
            echo 0;
        }
    }

    public function registrar(){
        $UsuariosModel = new UsuariosModel();
        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('correo');
        $pass = $this->request->getPost('pass');
        $id_pais = $this->request->getPost('id_pais');
        $UsuariosModel->setNombre($nombre);
        $UsuariosModel->setCorreo($correo);
        $UsuariosModel->setPass($pass);
        $UsuariosModel->setIdPais($id_pais);
        $UsuariosModel->setEstado(1);
        $id_usuario = $UsuariosModel->insertar();
        if($id_usuario) {
            $arraydata = array(
                'id_usuario' => $id_usuario,
                'id_pais' => $id_pais,
                'nombre' => $nombre,
                'correo' => $correo,
            );
            $session = \Config\Services::session();
            $session->set($arraydata);
            echo 1;
        }else{
            echo 0;
        }
    }

    public function existeUsuarioCorreo() {
        $UsuariosModel = new UsuariosModel();
        $correo = $this->request->getPost('correo');
        $UsuariosModel->setCorreo($correo);
        $usuario = $UsuariosModel->buscarUsuario();
        if(isset($usuario)){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function resetPassCorreo() {
        $UsuariosModel = new UsuariosModel();
        $correo = $this->request->getPost('correo');
        $UsuariosModel->setCorreo($correo);
        $token = $this->unique_code(30);
        $usuario = $UsuariosModel->buscarUsuario();
        if($usuario != null) {
            $UsuariosModel->setIdUsuario($usuario->id_usuario);
            $UsuariosModel->setTokenPass($token);
            $insertar = $UsuariosModel->editarTokenPass();
            $enviar = $this->enviarCorreoReset($correo, $token);
            if($enviar){
                echo 1;
            }
        } else {
            echo 0;
        }
    }

    public function unique_code($limit) {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

    public function resetPass() {
        $UsuariosModel = new UsuariosModel();
        $correo = $this->request->getPost('correo');
        $token = $this->request->getPost('token');
        $pass = $this->request->getPost('pass');
        $UsuariosModel->setCorreo($correo);
        $usuario = $UsuariosModel->buscarUsuario();
        if($usuario->token_pass == $token){
            $UsuariosModel->setIdUsuario($usuario->id_usuario);
            $UsuariosModel->setPass($pass);
            $UsuariosModel->setTokenPass(null);
            $UsuariosModel->editarPass();
            $UsuariosModel->editarTokenPass();
            echo 1;
        }else{
            echo 0;
        }
    }

    public function enviarCorreoReset($correo, $token) {
        $datos = array(
            "correo" => $correo,
            "token" => $token
        );
        ob_start();
        $this->vista("correos/correoReset", $datos);
        $contenido = ob_get_contents();
        ob_end_clean();
        $data = array (
            "from" => "soporte@jrtec.cl",
            "name"  => "Iot Rasp",
            "correo" => $correo,
            "asunto" => "Cambio de Contraseña Iot Rasp!",
            "cuerpo"  => $contenido
        );
        $mailer = new mailer();
        return $mailer->enviarCorreo($data);
    }

    public function vista($view, $datos) {
        if($datos != NULL){
            foreach ($datos as $id_assoc => $valor) {
                ${$id_assoc}=$valor;
            }
        }
        require(dirname(__DIR__) . "/../$view.php");
    }

    public function salir() {
        $session = \Config\Services::session();
        $session->destroy();
        header("Location: ".base_url("login").""); exit(0);
    }


}
