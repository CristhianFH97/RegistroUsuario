<?php

class conn {

    private $server;
    private $user;
    private $pass;
    private $db;
    private $link;

    public function __construct() {
        $this->server = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "uh_j";
        $this->link = null;
    }

    function conectar() {
        try {
            $this->link = new mysqli($this->server, $this->user, $this->pass, $this->db);
        } catch (Exception $ex) {
            echo "Error conectando a DB" . $ex->getMessage();
            exit;
        }
    }

    function desconectar() {
        mysqli_close($this->link);
    }

    function ejecutarSql($sql) {
        $rs = $this->link->query($sql);
        return $rs;
    }

    function ejecutarComit() {
        mysqli_commit($this->link);
    }

}
