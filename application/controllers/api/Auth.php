<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class Auth extends RestController
{
   function __construct(){
    parent::__construct();
    $this->load->library('api_auth');
    $this->load->model('principal_model');
   }

//    public function test_post() {
//     $tst = array(
//         'status'=>true,
//         'message'=>'test pasado para logear Usuario',
//     );
//     $this->response($tst,200);
// }

public function login_post(){

    $usuario = $this->input->post('usuario');
    $password = $this->input->post('password');

    $this->form_validation->set_rules('usuario','Usuario','required');
    $this->form_validation->set_rules('password','Password','required');

    if($this->form_validation->run()){

       $data = ['usuario' => $usuario, 'password' => sha1($password)];

        $loginStatus = $this->principal_model->checkLogin($data);
        if($loginStatus != false){

            $userId = $loginStatus->id;
            $bearerToken = $this->api_auth->generateToken($userId);
            $responseData = [
                'status' => true,
                'message' => 'Inicio de sesion correcto',
                'token' => $bearerToken,
            ];
    
            return $this->response($responseData,200);
        } else{
            $responseData = [
                'status' => false,
                'message' => 'Credenciales Invalidas',
                'data' => [],
            ];
    
            return $this->response($responseData,400);
        }
    }else{
        $responseData = [
            'status' => false,
            'message' => 'Usuario y password requerido',
            'data' => [],
        ];

        return $this->response($responseData,400);
    }

}

    public function register_post(){

    $nombre = $this->input->post('nombre');
    $usuario = $this->input->post('usuario');
    $password = $this->input->post('password');

    $this->form_validation->set_rules('nombre','Nombre','required');
    $this->form_validation->set_rules('usuario','Usuario','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()){

        $data = [
            'nombre' => $nombre,
            'usuario' => $usuario,
            'password' => sha1($password),
        ];
        $this->principal_model->register($data);
        $responseData = [
            'status' => true,
            'message' => 'Usuario cargado con Exito',
            'data' => [],
        ];

        return $this->response($responseData,200);
    }else{
        $responseData = [
            'status' => false,
            'message' => 'Falta campos para llenar',
            'data' => [],
        ];

        return $this->response($responseData,400);
    }

   }
}