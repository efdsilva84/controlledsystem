<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH . 'libraries/REST_Controller.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


class Usuarios extends REST_Controller{

    public function __construct($config = 'rest'){
        parent::__construct($config);
        $this->load->model('notes_model', 'usu');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

        public function buscarTodos(){
            $id = $this->post('id');
                $data = $this->usu->notes_list();

                if($data){
                    $this->response($carro, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code

                }else{
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Nenhuma carro encontrada'
                            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                    

                }





        }




}