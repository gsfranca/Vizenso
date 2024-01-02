<?php

include_once "conexao.php";

class Cliente
{
    private $CodCliente;
    private $NomeClie;
    private $CPFClie;
    private $RGClie;
    private $conn;

    public function getCodCliente()
    {
        return $this->CodCliente;
    }
    public function setCodCliente($CodClientee)
    {
        $this->CodCliente = $CodClientee;
    }

    public function getNomeClie()
    {
        return $this->NomeClie;
    }
    public function setNomeClie($NomeCliee)
    {
        $this->NomeClie = $NomeCliee;
    }

    public function getCPFClie()
    {
        return $this->CPFClie;
    }
    public function setCPFClie($CPFCliee)
    {
        $this->CPFClie = $CPFCliee;
    }

    public function getRGClie()
    {
        return $this->RGClie;
    }
    public function setRGClie($RGCliee)
    {
        $this->RGClie = $RGCliee;
    }

    public function MostrarCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from cliente order by CodCliente");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo "Erro ao mostrar cliente. " . $exc->getMessage();
        }
    }

    public function AlterarCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from cliente where CodCliente = ?");
            @$sql->bindParam(1, $this->getCodCliente(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }
    public function AlterarCliente2()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update cliente set NomeClie = ?, CPFClie = ?, RGClie = ? where CodCliente = ?");
            @$sql->bindParam(1, $this->getNomeClie(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCPFClie(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getRGClie(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getCodCliente(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    public function CadastrarCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into cliente values (null, ?, ?, ?)");
            @$sql->bindParam(1, $this->getNomeClie(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCPFClie(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getRGClie(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Cadastro de dados concluído!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao fazer cadastro de dados. " . $exc->getMessage();
        }
    }
}
