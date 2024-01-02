<?php

include_once "conexao.php";

class Apresentacao{

    private $IdApresent;
    private $RegistrArt;
    private $IdEspaco;
    private $DataApres;
    private $HoraApres;
    private $conn;

    public function getIdApresent(){

        return $this->IdApresent;

    }
    public function setIdApresent($IidApresent){

        $this->IdApresent = $IidApresent;

    }

    public function getRegistrArt(){

        return $this->RegistrArt;

    }
    public function setRegistrArt($RegistrArtt){

        $this->RegistrArt = $RegistrArtt;

    }

    public function getIdEspaco(){

        return $this->IdEspaco;

    }
    public function setIdEspaco($IidEspaco){

        $this->IdEspaco = $IidEspaco;

    }

    public function getDataApres(){

        return $this->DataApres;

    }
    public function setDataApres($DataApresen){

        $this->DataApres = $DataApresen;

    }
    public function getHoraApres(){

        return $this->HoraApres;

    }
    public function setHoraApres($HoraApresen){

        $this->HoraApres = $HoraApresen;

    }

    function CadastrarApres()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into apresentacao values (null, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getRegistrArt(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getIdEspaco(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getDataApres(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getHoraApres(), PDO::PARAM_STR);
            if ($sql0>execute() == 1)
            {

                return "Cadastro salvo!";

            }
            $this->conn = null;

        }
        catch (PDOException $exc){

            echo "Não foi possível fazer cadastro. " . $exc->getMessage();

        }

    }

    function ConsultarApres()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from apresentacao where IdApresent = ?");
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