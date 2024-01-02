<?php

include_once "..\Controlers\conexao.php";

class Espaco
{
    private $IdEspaco;
    private $Descr;
    private $conn;

    public function getIdEspaco()
    {
        return $this->IdEspaco;
    }
    public function setIdEspaco($IidEspaco)
    {
        $this->IdEspaco = $IidEspaco;
    }

    public function getDescr()
    {
        return $this->Descr;
    }
    public function setIdDescr($Descrr)
    {
        $this->Descr = $Descrr;
    }

    public function ListarEspacos()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from espaco order by IdEspaco");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo "Erro ao executar a consulta. " . $exc->getMessage();
        }
    }

    public function ConsultarEspaco()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from espaco where IdEspaco = ?");
            @$sql->bindParam(1, $this->getIdEspaco(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
}
