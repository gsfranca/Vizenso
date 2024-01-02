<?php

include_once "..\Controlers\conexao.php";

class ReservaEspaco
{
    private $IdReservaEspaco;
    private $CodCliente;
    private $IdEspaco;
    private $DataEspaco;
    private $HoraEspaco;
    private $RestEspaco;
    private $Tema;
    private $conn;

    public function getIdReservaEspaco()
    {
        return $this->IdReservaEspaco;
    }
    public function setIdReservaEspaco($IidReservaEspaco)
    {
        $this->IdReservaEspaco = $IidReservaEspaco;
    }
    public function getCodCliente()
    {
        return $this->CodCliente;
    }
    public function setCodCliente($CodClientee)
    {
        $this->CodCliente = $CodClientee;
    }
    public function getIdEspaco()
    {
        return $this->IdEspaco;
    }
    public function setIdEspaco($IidEspaco)
    {
        $this->IdEspaco = $IidEspaco;
    }
    public function getDataEspaco()
    {
        return $this->DataEspaco;
    }
    public function setDataEspaco($DataEspacoo)
    {
        $this->DataEspaco = $DataEspacoo;
    }
    public function getHoraEspaco()
    {
        return $this->HoraEspaco;
    }
    public function setHoraEspaco($HoraEspacoo)
    {
        $this->HoraEspaco = $HoraEspacoo;
    }
    public function getTema()
    {
        return $this->Tema;
    }
    public function setTema($Tema)
    {
        $this->Tema = $Tema;
    }

    public function getRestEspaco()
    {
        return $this->RestEspaco;
    }
    public function setRestEspaco($RestEspacoo)
    {
        $this->RestEspaco = $RestEspacoo;
    }

    public function CadastrarResEsp()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into reservaespaco values (null, ?, ?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getCodCliente(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getIdEspaco(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getRestEspaco(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getDataEspaco(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getHoraEspaco(), PDO::PARAM_STR);
            @$sql->bindParam(6, $this->getTema(), PDO::PARAM_STR);

            if ($sql->execute() == 1) {
                return "Cadastro salvo!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Não foi possível fazer cadastro. " . $exc->getMessage();
        }
    }

    public function ConsultarResEspCodCli()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from reservaespaco where CodCliente = ?");
            @$sql->bindParam(1, $this->getCodCliente(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }

    public function ConsultarResEspCodHora()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from reservaespaco where HoraEspaco = ?");
            @$sql->bindParam(1, $this->getHoraEspaco(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
}
