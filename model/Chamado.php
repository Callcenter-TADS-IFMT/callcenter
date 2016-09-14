<?php

class Chamado {
    private $id;
    private $titulo;
    private $status;
    private $cliente;
    private $funcionario;
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getStatus() {
        return $this->status;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getFuncionario(Funcionario $funcionario) {
        return $this->funcionario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    function setFuncionario($funcionario) {
        $this->funcionario = $funcionario;
    }


    
            
}
