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
class FormasPagamento extends Base {

    //put your code here

    private $_path = 'formas_pagamento';

    public function __construct() {
        parent::__construct();
    }

    public function add($dados = array()) {
        $default = [
            'descricao' => null
        ];
        $body = array_merge($default, $dados);
        $this->post($this->_path, $body);
    }

    public function edit(int $id, $dados = array()) {
        $default = [
            'descricao' => null
        ];
        $body = array_merge($default, $dados);
        $this->put($this->_path . '/' . $id, $body);
    }

    public function all() {
        $this->get($this->_path);
    }

    public function first(int $id) {
        $this->get($this->_path . '/' . $id);
    }

    public function remove(int $id) {
        $this->delete($this->_path . '/' . $id);
    }

}
