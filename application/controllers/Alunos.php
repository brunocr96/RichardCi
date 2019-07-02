<?php

defined('BASEPATCH') OR exit('No direct script acess allowed');

class Alunos extends CI_Controller {
    
    Function __construct() {
        parent::__construct();
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' e um alias para 'alunos_model'
    }
    
    public function index(){
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro' , $listra);
        $this->load->view('template/footer');
        
    }
    
    public function inserir(){
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['Nome'] = mb_convert_case($this->input->post('Nome'), MB_CASE_UPPER);
        $dados['RG'] = $this->input->post('RG');
        $dados['Endereco'] = mb_convert_case($this->input->post('Endereco'), MB_CASE_UPPER);
        $dados['CPF'] = mb_convert_case($this->input->post('CPF'), MB_CASE_UPPER);
        $dados['Sexo'] = $this->input-post('Sexo');
        $this->alunos->inserir($dados);
        
        redirect('alunos');
    }
    
}

