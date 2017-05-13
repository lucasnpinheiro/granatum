<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Granatum;

/**
 * Description of Base
 *
 * @author lucas
 */
class Base {

    //put your code here

    private $curl;
    private $token = '';
    private $url = 'https://api.granatum.com.br';
    private $version = 'v1';

    public function __construct() {
        $this->curl = new \Curl\Curl();
        $this->curl->setHeader('Content-Type', 'application/x-www-form-urlencoded');
    }

    public function setToken($token = '') {
        $this->token = $token;
    }

    private function getUri($path, $data = array()) {
        $data['access_token'] = $this->token;
        if (is_array($data) || is_object($data)) {
            $data = http_build_query($data);
        }
        return $this->url . '/' . $this->version . '/' . $path . '?' . $data;
    }

    protected function post($path, $body = array(), $request = array()) {
        $this->curl->post($this->getUri($path, $request), $body);
    }

    protected function put($path, $body = array(), $request = array()) {
        $this->curl->put($this->getUri($path, $request), $body, true);
    }

    protected function delete($path, $body = array(), $request = array()) {
        $this->curl->delete($this->getUri($path, $request), $body, true);
    }

    protected function get($path, $request = array()) {
        $this->curl->get($this->getUri($path, $request));
    }

    public function isInfo() {
        return $this->curl->isInfo();
    }

    public function isRedirect() {
        return $this->curl->isRedirect();
    }

    public function isSuccess() {
        return $this->curl->isSuccess();
    }

    public function isError() {
        return $this->curl->isError();
    }

    public function isClientError() {
        return $this->curl->isClientError();
    }

    public function isServerError() {
        return $this->curl->isServerError();
    }

    public function close() {
        return $this->curl->close();
    }

    public function error() {
        return $this->curl->error_code;
    }

    public function body() {
        return $this->curl->response;
    }

    public function header() {
        return ['request' => $this->curl->request_headers, 'response' => $this->curl->response_headers];
    }

    public function __destruct() {
        $this->close();
    }

}
