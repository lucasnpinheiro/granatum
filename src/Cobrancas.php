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
class Cobrancas extends Base {

    //put your code here

    private $_path = 'cobrancas';

    public function __construct() {
        parent::__construct();
    }

    public function add($dados = array(), $itens = array()) {
        $default = [
            'conta_id' => null, // required
            'cliente_id' => null, // required
            'data_vencimento' => null, // required
            'tipo_cobranca' => null, // required
            'itens' => [], // required
            'email' => null,
            'percentual_multa' => null,
            'cobrar_juros' => null,
            'instrucoes_boleto' => null,
            'permitir_segunda_via' => null,
            'dias_para_emissao' => 5,
            'tipo_emissao' => 2,
            'periodicidade' => 'M1',
            'parcelas' => null
        ];
        $body = array_merge($default, $dados);
        $body['itens'] = $itens;
        $this->post($this->_path, $body);
    }

    public function itens($dados) {
        $default = [
            'descricao' => null, // required
            'categoria_id' => null, // required
            'valor' => null, // required
            'centro_custo_lucro_id' => null
        ];
        return array_merge($default, $dados);
    }

    public function all($dados = array()) {
        $default = [
            'data_inicio' => null, // required
            'data_fim' => null, // required
            'start' => 0, // 50 registros por listagem.
            'tipo_view' => 'all', // all e count
            'status' => null // agendado, pendente, cliente_pagou, transferindo ou transferido
        ];
        $body = array_merge($default, $dados);
        $this->get($this->_path, $body);
    }

    public function first(int $id) {
        $this->get($this->_path . '/' . $id);
    }

}
