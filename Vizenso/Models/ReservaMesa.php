<?php

include_once "..\Controlers\conexao.php";

class ReservaMesa
{
    private $IDReservaMesa;
    private $CodCli;
    private $DataMesa;
    private $HoraMesa;
    private $QtdPessoas;
    private $RestMesa;
    private $conn;

    public function getIDReservaMesa()
    {
        return $this->IDReservaMesa;
    }
    public function setIDReservaMesa($IDReservaMesa)
    {
        $this->IDReservaMesa = $IDReservaMesa;
    }

    public function getCodCli()
    {
        return $this->CodCli;
    }
    public function setCodCli($CodClie)
    {
        $this->CodCli = $CodClie;
    }

    public function getDataMesa()
    {
        return $this->DataMesa;
    }
    public function setDataMesa($DataMesa)
    {
        $this->DataMesa = $DataMesa;
    }

    public function getHoraMesa()
    {
        return $this->HoraMesa;
    }
    public function setHoraMesa($HoraMesa)
    {
        $this->HoraMesa = $HoraMesa;
    }

    public function getQtdPessoas()
    {
        return $this->QtdPessoas;
    }
    public function setQtdPessoas($QtdPessoas)
    {
        $this->QtdPessoas = $QtdPessoas;
    }

    public function getRestMesa()
    {
        return $this->RestMesa;
    }
    public function setRestMesa($RestMesa)
    {
        $this->RestMesa = $RestMesa;
    }

    public function CadastrarReservaMesa()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into reservamesa values (null, ?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getCodCli(), PDO::PARAM_STR);
<<<<<<< HEAD
            @$sql->bindParam(2, $this->getRestMesa(), PDO::PARAM_STR);
=======
            @$sql->bindParam(2, $this->getRestMesa(), PDO::PARAM_STR); 
>>>>>>> 3433919ef3c76856c45e3d012c0ceca74825181e
            @$sql->bindParam(3, $this->getQtdPessoas(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getDataMesa(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getHoraMesa(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro de reserva concluído com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar informações. " . $exc->getMessage();
        }
    }

    public function AlterarReservaMesa()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from reservamesa where IdReservaMesa = ?");
            @$sql->bindParam(1, $this->getIDReservaMesa(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }
    public function AlterarReservaMesa2()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update reservamesa set IdMesa = ?, DataMesa = ?, HoraMesa = ?");
            @$sql->bindParam(1, $this->getIDMesa(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getDataMesa(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getHoraMesa(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    public function ConsultarReservaMesa()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from reservamesa where CodCliente = ?");
            @$sql->bindParam(1, $this->getCodCli(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
}
