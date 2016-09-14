<?php

class ChamadoDAO {
    
    public static $instance;
   
    function __construct() {
        
    }
    
    public static function getInstance() {
        if (!isset(self::$instance)){
            self::$instance = new ChamadoDAO();
        }
        return self::$instance;
    }
    
    public function insert(Chamado $chamado){
        $SQL = "INSERT INTO CHAMADO(titulo,status,cliente_id,funcionario_id) VALUES(:titulo,:status,:cliente,:funcionario)";
        try{
             $stmt = Conexao::getInstance()->prepare($SQL);
             $stmt->bindValue(':titulo',     $chamado->getTitulo());
             $stmt->bindValue(':status',     $chamado->getStatus());
             $stmt->bindValue(':cliente',    $chamado->getCliente()->getId());
             $stmt->bindValue(':funcionario',$chamado->getFuncionario()->getId());
             return $stmt->execute();
             
        }  catch (Exception $ex){
            print "Ocoreu um erro ao cadastrar o Chamado: Erro: \"".$ex->getMessage()."\"";
        }
    }
    
    public function update(Chamado $chamado){
        $SQL = "UPDATE CHAMADO SET titulo = :titulo, status = :status where id = :id";
        try{
            $stmt = Conexao::getInstance()->prepare($SQL);
            $stmt->bindValue(':titulo', $chamado->getTitulo());
            $stmt->bindValue(':status', $chamado->getStatus());
            $stmt->bindValue(':id', $chamado->getStatus());
            return $stmt->execute();
        }  catch (Exception $ex){
             print "Ocoreu um erro ao editar o Chamado: Erro: \"".$ex->getMessage()."\"";
        }
    }
    
    public function delete($id){
        $SQL = "DELETE FROM chamados WHERE ID = :id";
        try{
            $stmt = Conexao::getInstance()->prepare($SQL);
            $stmt->bindValues(':id', $id);
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    return true;;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }  catch (Exception $ex){
            print "Ocorreu um erro ao deletar um Chamado. ERRO: ".$ex->getMessage();
        }
    }
    
    public function findById($id){
        $SQL = "SELECT * FROM chamados WHERE id = :id";
        try{
            $stmt = Conexao::getInstance()->prepare($SQL);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $dados = $stmt->fetch(PDO::FETCH_OBJ);
            //retorna o objeto do chamados
            return $this->populaChamado($dados);
        } catch (Exception $ex) {
            print "Erro ao retornar os dados. ERRO:".$ex->getMessage();
        }
    }
    
    public function populaChamado($dados){
        $chamado = new Chamado();
        $chamado->setId($dados->id);
        $chamado->setStatus($dados->status);
        $chamado->setTitulo($dados->titulo);
        //atributos abaixo somente setados apos fazer o DAO das outras chasses
        //$chamado->setCliente($dados->cliente);
        //$chamado->setFuncionario($dados->funcionario);
        return $chamado;
        
    }


    
}
