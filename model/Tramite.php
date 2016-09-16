<?php

class Tramite {
    
    private $id;
    private $chamado;
    private $observacao;
    private $funcionario;
    private $cliente;
    
    function getId() {
        return $this->id;
    }

    function getChamado() {
        return $this->chamado;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getFuncionario() {
        return $this->funcionario;
    }

    function getCliente() {
        return $this->cliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setChamado($chamado) {
        $this->chamado = $chamado;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    function setFuncionario($funcionario) {
        $this->funcionario = $funcionario;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }


    
}
