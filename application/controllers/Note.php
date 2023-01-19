<?php
class Note extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->model('notes_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
  
    public function index(){
       
        $data['notes'] = $this->notes_model->notes_list();
        $data['title'] = 'Notes List';
 
        $this->load->view('layout/header');
        $this->load->view('list', $data);
        $this->load->view('layout/footer');

    }
    public function pesquisar(){
        $this->load->model('notes_model');

        $data['title'] = 'Credencial Buscada';
        $data['resultado'] = $this->notes_model->buscar($_POST);


        $this->load->view('layout/header');
        $this->load->view('resultado_busca', $data);
        $this->load->view('layout/footer');




    }
    public function novoFuncionario(){
        $data['credenciais'] = $this->notes_model->getNovoFuncionario();
        $data['title'] = 'Novo Funcionário';

        $this->load->view('layout/header');
        $this->load->view('funcionarios', $data);
        $this->load->view('layout/footer');
    }
    public function novoFuncionarioPost(){

        $this->form_validation->set_rules('n_credencial', 'Credencial', 'required');
        $this->form_validation->set_rules('usu_credencial', 'Usuário', 'required');
        $this->form_validation->set_rules('cnh_credencial', 'cnh', 'required');
        $this->form_validation->set_rules('tipo_veiculo', 'Tipo de Veiculo', 'required');
        $this->form_validation->set_rules('cor', 'cor', 'required');
        $this->form_validation->set_rules('placa', 'placa', 'required');
        $this->form_validation->set_rules('tipo_acesso', 'tipo de acesso', 'required');

        $id = $this->input->post('id');

        if ($this->form_validation->run() === FALSE){  
            if(empty($id)){
              redirect( base_url('note/novoFuncionario') ); 
            }else{
             redirect( base_url('note/edit/'.$id) ); 
            }
        }
        else{
            $data['credenciais'] = $this->notes_model->InsertNewFuncionario();
            redirect( site_url('note') ); 
        }

    }
    public function novoUsuario(){


        $this->load->view('layout/header');
        $this->load->view('novo_usuario');
        $this->load->view('layout/footer');
    }

    public function listarUsu(){
        $data['usuarios'] = $this->notes_model->listaUsuarios();
        $data['title'] = 'Usuarios List';

        $this->load->view('layout/header');
        $this->load->view('usuarios', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/header');
        $this->load->view('novo_usuario');
        $this->load->view('layout/footer');

    }

    public function getEmpresas(){
        $data['inquilinos'] = $this->notes_model->listaEmpresas()();
 

        $this->load->view('layout/header');
        $this->load->view('list', $data);
        $this->load->view('layout/footer');
    }

    public function store(){
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('empresa', 'Empresa', 'required');
        $this->form_validation->set_rules('local_visita', 'Local de Visita', 'required');


 
        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE){  
            if(empty($id)){
              redirect( base_url('note/cadastrar') ); 
            }else{
             redirect( base_url('note/edit/'.$id) ); 
            }
        }
        else{
            $data['note'] = $this->notes_model->createOrUpdate();
            redirect( site_url('note') ); 
        }
         
    }
}