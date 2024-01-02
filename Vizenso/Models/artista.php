<?php

include_once "conexao.php";

class Artista{

    private $NomeArt;
    private $RegistrArt;
    private $conn;

    public function getNomeArt(){

        return $this->NomeArt;

    }
    public function setNomeArt($NomeArtt){

        $this->NomeArt = $NomeArtt;

    }

    public function getRegistrArt(){

        return $this->RegistrArt;

    }
    public function setRegistrArt($RegistrArtt){

        $this->RegistrArt = $RegistrArtt;

    }

    function CadastrarArtista()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into artista values (?, null)");
            @$sql->bindParam(1, $this->getNomeArt(), PDO::PARAM_STR);            
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

    function ConsultarArts()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from artista where RegistrArt = ?");
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