<?php

include_once "..\Controlers\conexao.php";

class Convite
{
    private $IdConvidado;
    private $CodCliente;
    private $IdReservaEspaco;
    private $conn;

    public function getIdConvidado()
    {
        return $this->IdConvidado;
    }
    public function setIdConvidado($IidConvidado)
    {
        $this->IdConvidado = $IidConvidado;
    }

    public function getCodCliente()
    {
        return $this->CodCliente;
    }
    public function setCodCliente($CodClientee)
    {
        $this->CodCliente = $CodClientee;
    }

    public function getIdReservaEspaco()
    {
        return $this->IdReservaEspaco;
    }
    public function setIdReservaEspaco($IidReservaEspaco)
    {
        $this->IdReservaEspaco = $IidReservaEspaco;
    }

    public function CadastrarConvite()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into convite values (?, ?, ?)");
            @$sql->bindParam(1, $this->getIdConvidado(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCodCliente(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getIdReservaEspaco(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Não foi possível fazer cadastro. " . $exc->getMessage();
        }
    }

    public function ConsultarConvite()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from convite where IdReservaEspaco = ?");
            @$sql->bindParam(1, $this->getIdReservaEspaco(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
}
