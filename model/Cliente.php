<?php

class Cliente {
    
    private $id;
    private $nome;
    private $idade;
    private $telefone;
    private $cnpj_cpf;
    private $endereco;
    private $contato;
    private $email;
    private $fone1;
    private $fone2;
    private $fone3;
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCnpj_cpf() {
        return $this->cnpj_cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getContato() {
        return $this->contato;
    }

    function getEmail() {
        return $this->email;
    }

    function getFone1() {
        return $this->fone1;
    }

    function getFone2() {
        return $this->fone2;
    }

    function getFone3() {
        return $this->fone3;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCnpj_cpf($cnpj_cpf) {
        $this->cnpj_cpf = $cnpj_cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFone1($fone1) {
        $this->fone1 = $fone1;
    }

    function setFone2($fone2) {
        $this->fone2 = $fone2;
    }

    function setFone3($fone3) {
        $this->fone3 = $fone3;
    }


    
}
