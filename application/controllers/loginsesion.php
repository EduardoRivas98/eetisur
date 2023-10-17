<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginsesion extends CI_Controller
{

    // public function __construct(){
    //     parent::__construct();
    //    //Load Models/librarys
    // }

    public function index()
    {
        $this->load->view('vw-login');
    }

    public function iniciar_sesion()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //Preparar para consultar a la BD:
        //TODO: Test estatico de que funciona el code
        if ($username === 'admin' && $password === 'Aa12345$') {

            // Enviar una respuesta JSON
            $response['success'] = 'Autenticación exitosa';
        } else {
            $response['error'] = 'Usuario o Contrasena incorrectos';
        }

        echo json_encode($response);
    }
}
