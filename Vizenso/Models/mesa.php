<?php

include_once "conexao.php";

class Mesa{

    private $IdMesa;
    private $IdEspaco;
    private $conn;

    public function getIdMesa(){

        return $this->IdMesa;

    }
    public function setIdEspaco($IidMesa){

        $this->IdMesa = $IidMesa;

    }

    public function getIdEspaco(){

        return $this->IdEspaco;

    }
    public function setIdEspaco($IidEspaco){

        $this->IdEspaco = $IidEspaco;

    }

    function ListarMesas()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from mesa order by IdMesa");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc)
        {

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

    function ConsultarMesa()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from mesa where IdMesa = ?");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc)
        {

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

}

?>