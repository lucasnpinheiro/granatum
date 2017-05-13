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
class Cidades extends Base {

    //put your code here

    private $_path = 'cidades';

    public function __construct() {
        parent::__construct();
    }

    public function all($dados = array()) {
        $default = [
            'estado_id' => null
        ];
        $body = array_merge($default, $dados);
        $this->get($this->_path, $body);
    }

}
