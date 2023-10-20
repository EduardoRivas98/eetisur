<?php

use chriskacerguis\RestServer\RestController;

class Api_Controller extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->library('api_auth');
        if($this->api_auth->isNotAuthenticated())
        {
            $err = [
                'status' => false,
                'message' => 'unauthorised',
                'data' => [],
            ];
            $this->response($err, 400);
        }
    }

    public function getProfile_post(){
        $userId = $this->api_auth->getUserId();
        $this->load->model('principal_model');
        $profileData = $this->principal_model->getProfile($userId);

        $err = [
            'status' => true,
            'message' => 'Exito al obtener los datos del perfil',
            'data' => $profileData,
        ];
        $this->response($err, 200);
    }
}