<?php

include_once "..\Controlers\conexao.php";

class Convidado
{
    private $IdConvidado;
    private $NomeCvdd;
    private $conn;

    public function getIdConvidado()
    {
        return $this->IdConvidado;
    }
    public function setIdConvidado($IidConvidado)
    {
        $this->IdConvidado = $IidConvidado;
    }

    public function getNomeCvdd()
    {
        return $this->NomeCvdd;
    }
    public function setNomeCvdd($NomeeCvdd)
    {
        $this->NomeCvdd = $NomeeCvdd;
    }

    public function CadastrarConvidado()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into convidados values (null, ?) ON DUPLICATE KEY UPDATE NomeCvdd=NomeCvdd;");
            @$sql->bindParam(1, $this->getNomeCvdd(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Não foi possível fazer cadastro. " . $exc->getMessage();
        }
    }

    public function ConsultarConvidados()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from convidados where IdConvidado = ?");
            @$sql->bindParam(1, $this->getIdConvidado(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }

    public function ConsultarNomeConvidados()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from convidados where NomeCvdd like ?");
            @$sql->bindParam(1, $this->getNomeCvdd(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
}
