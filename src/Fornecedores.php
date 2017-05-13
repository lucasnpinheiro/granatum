<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Granatum;

/**
 * Description of Lancamentos
 *
 * @author lucas
 */
class Fornecedores extends Base {

    //put your code here

    private $_path = 'fornecedores';

    public function __construct() {
        parent::__construct();
    }

    public function add($dados = array()) {
        $default = [
            'nome' => null, // required
            'nome_fantasia' => null,
            'documento' => null,
            'inscricao_estadual' => null,
            'telefone' => null,
            'email' => null,
            'endereco' => null,
            'endereco_numero' => null,
            'endereco_complemento' => null,
            'bairro' => null,
            'cep' => null,
            'cidade_id' => null,
            'estado_id' => null,
            'observacao' => null,
            'cliente' => null
        ];
        $body = array_merge($default, $dados);
        $this->post($this->_path, $body);
    }

    public function edit(int $id, $dados = array()) {
        $default = [
            'nome' => null, // required
            'nome_fantasia' => null,
            'documento' => null,
            'inscricao_estadual' => null,
            'telefone' => null,
            'email' => null,
            'endereco' => null,
            'endereco_numero' => null,
            'endereco_complemento' => null,
            'bairro' => null,
            'cep' => null,
            'cidade_id' => null,
            'estado_id' => null,
            'observacao' => null,
            'cliente' => null
        ];
        $body = array_merge($default, $dados);
        $this->put($this->_path . '/' . $id, $body);
    }

    public function all($dados = array()) {
        $default = [
            'term' => null,
            'documento' => null
        ];
        $body = array_merge($default, $dados);
        $this->get($this->_path, $body);
    }

    public function first(int $id) {
        $this->get($this->_path . '/' . $id);
    }

    public function remove(int $id) {
        $this->delete($this->_path . '/' . $id);
    }

}
