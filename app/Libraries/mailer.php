<?php
namespace App\Libraries;
use PHPMailer\PHPMailer\PHPMailer;

class mailer extends PHPMailer
{
    public function __construct() {
        parent::__construct();
    }

    public function enviarCorreo($data) {
        $mail = new PHPMailer(TRUE);
        $name = (isset($data['name'])) ? $data['name'] : "";
        try {
            $mail->setFrom($data['from'], $name);

            if(is_array($data['correo'])){
                foreach ($data['correo'] as $value) {
                    $mail->AddAddress($value);
                }
            }else{
                $mail->AddAddress($data['correo']);
            }
            $mail->isSMTP();
            $mail->Host = "mail.jrtec.cl";
            //$mail->SMTPAuth = FALSE;
            $mail->SMTPSecure = "false";
            $mail->Username = "soporte@jrtec.cl";
            $mail->Password = "SoporteJR2020";
            $mail->Port = 6767;
            $mail->Timeout = 30;
            $mail->CharSet = "UTF-8";
            $mail->IsHTML(true);
            $mail->Subject = $data['asunto'];


            $mail->Body = $data['cuerpo'];

            if(isset($data['adjunto'])){
                if(isset($data['nombre_adjunto'])){
                    $mail->addAttachment($data['adjunto'], $data['nombre_adjunto']);
                }else{
                    $mail->addAttachment($data['adjunto']);
                }
            }
            if(isset($data['tempArchivos']) && isset($data['nombreArchivos'])){
                foreach ($data['tempArchivos'] as $key => $value) {
                    $mail->addAttachment($value, $data['nombreArchivos'][$key]);
                }
            }

            $exito = $mail->send();
            if($exito){
                return true;
            }else{
                echo $mail->ErrorInfo;
            }
        }
        catch (Exception $e){
            echo $e->errorMessage();
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}