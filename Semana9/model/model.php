<?php

require_once 'conn/conn.php';

class model {

    private $db;

    public function __construct() {
        $this->db = new conn();
    }

    public function m_ValidarLogin($email, $pass) {
        $this->db->conectar();

        $sql = "SELECT id_estudiante,nombre,ap1,ap2,cedula,correo,usu,pass,fecha_nace,estado FROM estudiante ";

        $sql .= " where correo='$email' and pass='$pass'";

        $rs = $this->db->ejecutarSql($sql);

        $arrDatos = array();

        while ($fila = mysqli_fetch_assoc($rs)) {
            $arrDatos[] = $fila['id_estudiante'];
            $arrDatos[] = $fila['nombre'];
            $arrDatos[] = $fila['ap1'];
            $arrDatos[] = $fila['ap2'];
            $arrDatos[] = $fila['cedula'];
            $arrDatos[] = $fila['correo'];
            $arrDatos[] = $fila['usu'];
            $arrDatos[] = $fila['pass'];
            $arrDatos[] = $fila['fecha_nace'];
            $arrDatos[] = $fila['estado'];
        }

        $this->db->desconectar();
        return $arrDatos;
    }

    public function m_Registro($nombre, $correo, $pass) {
        $this->db->conectar();
        $nombre = mysqli_real_escape_string($this->db->con, $nombre);
        $correo = mysqli_real_escape_string($this->db->con, $correo);
        $pass = mysqli_real_escape_string($this->db->con, $pass);

        $sql = "INSERT INTO estudiante (nombre, correo, pass) VALUES ('$nombre', '$correo', '$pass')";

        $result = $this->db->ejecutarSql($sql);

        $this->db->desconectar();
        return $result;
    }

}
