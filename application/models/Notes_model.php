<?php
class Notes_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function notes_list(){
       
        $query = $this->db->from('notes');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function listaEmpresas(){
        $query = $this->db->from('inquilinos');
        $query = $this->db->get();
        return $query->result();

    }

    public function getCredencial(){
        $this->db->select('*');
        $query = $this->db->from('credenciais');

        $condicoes = array( 'n_credencial' => 'n_credencial');
        $this->db->where($condicoes);

        $query = $this->db->get();
        return $query->result();


    }

    public function listaUsuarios(){
        $query = $this->db->join('lideres', 'id_lider = id');
        $query = $this->db->get('usuarios');
        return $query->result();
    }
    public function getNovoFuncionario(){
        $query = $this->db->from('credenciais');
        $query = $this->db->get();
        return $query->result();

    }
    public function InsertNewFuncionario(){
        $this->load->helper('url');
        $id = $this->input->post('id');

        $data = array(
            'n_credencial' => $this->input->post('n_credencial'),
            'usu_credencial' => $this->input->post('usu_credencial'),
            'cnh_credencial' => $this->input->post('cnh_credencial'),
            'tipo_veiculo' => $this->input->post('tipo_veiculo'),
            'modelo' => $this->input->post('modelo'),
            'cor' => $this->input->post('cor'),
            'placa' => $this->input->post('placa'),
            'tipo_acesso' => $this->input->post('tipo_acesso'),
        );

      
            return $this->db->insert('credenciais', $data);


    }
     

    public function createOrUpdate(){
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $hoje = date('Y-m-d');
        $hora = date('H:i:s');

        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'empresa' => $this->input->post('empresa'),
            'local_visita' => $this->input->post('local_visita'),
            'data_entrada' =>$hoje,
            'hora_entrada'=>$hora


        );
        if (empty($id)) {
            return $this->db->insert('notes', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('notes', $data);
        }
    }
}