<?php

class Principal_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

     function register($data){
        $this->db->insert('usuarios',$data);
    }

  
     function checkLogin($data){
        $this->db->where($data);
        $query = $this->db->get('usuarios');
        if($query->num_rows()==1){
            return $query->row();
        }else{
            return false;
        }
    }

     function getProfile($userId){
        $this->db->select('nombre, usuario');
        $this->db->where(['id' => $userId]);
        $query = $this->db->get('usuarios');
        return $query->row();
    }

}