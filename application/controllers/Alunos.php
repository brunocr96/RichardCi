<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' é um alias para 'Alunos_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['Nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['RG'] = $this->input->post('rg');
        $dados['Endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['CPF'] = $this->input->post('cpf');
        $dados['Sexo'] = mb_convert_case($this->input->post('sexo'), MB_CASE_UPPER);
        $this->alunos->inserir($dados);
        redirect('alunos');
    }

    public function excluir($id) {
        $this->alunos->deletar($id);
        redirect('alunos');
    }

    public function editar($id) {
        $data['alunosEditar'] = $this->alunos->editar($id);
        $this->load->view('template/header');
        $this->load->view('alunosEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $dados['id_aluno'] = $this->input->post('id_aluno');
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'), MB_CASE_UPPER);
        $dados['cpf'] = mb_convert_case($this->input->post('cpf'), MB_CASE_UPPER);
        $dados['sexo'] = $this->input->post('sexo');
        
        $this->alunos->atualizar($dados);
        redirect('alunos');
    }

}
