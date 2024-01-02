<?php

include_once "..\Controlers\conexao.php";

class RegistroCliente
{
    private $CodCliente;
    private $NomeClie;
    private $CPFClie;
    private $RGClie;
    private $EmailCli;
    private $SenhaCli;
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

    public function getEmailCli()
    {
        return $this->EmailCli;
    }
    public function setEmailCli($EmailClii)
    {
        $this->EmailCli = $EmailClii;
    }

    public function getSenhaCli()
    {
        return $this->SenhaCli;
    }
    public function setSenhaCli($SenhaClii)
    {
        $this->SenhaCli = $SenhaClii;
    }

    public function MostrarRegCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from registrocliente order by CodCliente");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo "Erro ao mostrar conta de cliente. " . $exc->getMessage();
        }
    }
    public function CadastrarConta()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into registrocliente values (null, ?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getNomeClie(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCPFClie(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getRGClie(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getEmailCli(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getSenhaCli(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro de conta concluído com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar informações. " . $exc->getMessage();
        }
    }

    public function AlterarCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from registrocliente where CodCliente = ?");
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
            $sql = $this->conn->prepare("update registrocliente set NomeClie = ?, CPFClie = ?, RGClie = ?, EmailCli = ?, SenhaCli = ? where CodCliente = ?");
            @$sql->bindParam(1, $this->getNomeClie(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCPFClie(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getRGClie(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getEmailCli(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getSenhaCli(), PDO::PARAM_STR);
            @$sql->bindParam(6, $this->getCodCliente(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro alterado com sucesso! Recarregue a página";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    public function ConsultarCliente()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from registrocliente where CPFClie = ?");
            @$sql->bindParam(1, $this->getCPFClie(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }


    public function Logar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from registrocliente where CPFClie like ? and SenhaCli like ?");
            @$sql->bindParam(1, $this->getCPFClie(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSenhaCli(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar a consulta." . $exc->getMessage();
        }
    }
}
