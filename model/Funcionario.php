<?php


class Funcionario {
    
    private $id;
    private $nome;
    private $cpf;
    private $funcao;
    private $fone1;
    private $fone2;
    private $email;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function getFone1() {
        return $this->fone1;
    }

    function getFone2() {
        return $this->fone2;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    function setFone1($fone1) {
        $this->fone1 = $fone1;
    }

    function setFone2($fone2) {
        $this->fone2 = $fone2;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    
}
