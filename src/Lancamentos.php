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
class Lancamentos extends Base {

    //put your code here

    private $_path = 'lancamentos';

    public function __construct() {
        parent::__construct();
    }

    public function add($dados = array()) {
        $default = [
            'descricao' => null, // required
            'conta_id' => null, // required
            'categoria_id' => null, // required
            'valor' => null, // required
            'data_vencimento' => null, // required
            'data_pagamento' => null,
            'data_competencia' => null,
            'centro_custo_lucro_id' => null,
            'forma_pagamento_id' => null,
            'pessoa_id' => null,
            'tipo_documento_id' => null,
            'total_repeticoes' => null
        ];
        $body = array_merge($default, $dados);
        $this->post($this->_path, $body);
    }

    public function edit(int $id, $dados = array()) {
        $default = [
            'descricao' => null,
            'conta_id' => null,
            'categoria_id' => null,
            'valor' => null, // required
            'data_vencimento' => null,
            'data_pagamento' => null,
            'data_competencia' => null,
            'centro_custo_lucro_id' => null,
            'forma_pagamento_id' => null,
            'pessoa_id' => null,
            'tipo_documento_id' => null,
            'total_repeticoes' => null
        ];
        $body = array_merge($default, $dados);
        $this->put($this->_path . '/' . $id, $body);
    }

    public function all($dados = array()) {
        $default = [
            'conta_id' => null, // required
            'grupo_id' => null,
            'lancamento_composto_id' => null,
            'start' => 0, // 50 registros por listagem.
            'tipo_view' => 'list', // list e count
            'tipo' => null // recebido, pago, a_pagar, a_receber
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
