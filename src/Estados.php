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
class Estados extends Base {

    //put your code here

    private $_path = 'estados';

    public function __construct() {
        parent::__construct();
    }

    public function all() {
        $this->get($this->_path);
    }

}
