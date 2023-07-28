<?php

require_once 'libs/smarty_4_3_1/config.php';
require 'model/model.php';

class control {

    private $model;
    private $view;

    function __construct() {
        $this->model = new model();
        $this->view = new config();
    }

    public function getModel() {
        return $this->model;
    }

    public function getView() {
        return $this->view;
    }

    public function setModel($model): void {
        $this->model = $model;
    }

    public function setView($view): void {
        $this->view = $view;
    }

    public function gestion_procesos() {
        if (isset($_REQUEST['accion'])) {
            $accion = $_REQUEST['accion'];

            switch ($accion) {
                case 'validar_login':
                    $this->fn_Validar_Login();
                    break;
                case 'Guardar': // Change the case to match the submit button name
                    $this->fn_Procesar_Registro();
                    break;
                case 'Registrar':
                    $this->mostrarFormRegistro();
                    break;
                default:
                    $this->view->Assign("msg", "");
                    $this->view->Display("login.tpl");
            }
        } else {
            $this->view->Assign("msg", "");
            $this->view->Display("login.tpl");
        }
    }

    public function fn_Validar_Login() {
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];

        $respuesta = $this->model->m_ValidarLogin($email, $pass);
        if (sizeof($respuesta) > 0) {
            echo "Acceso validado";
        } else {
            $this->view->Assign("msg", "Error: Usuario o Password invalido");
            $this->view->Display("login.tpl");
        }
    }

    public function fn_Procesar_Registro() {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        // validando que las entradas no esten vacias
        if (empty($nombre) || empty($correo) || empty($password)) {
            $this->view->Assign("msg", "Error: Nombre, Correo y Password son campos requeridos.");
            $this->view->Display("registro.tpl");
            return;
        }

        $result = $this->model->m_Registro($nombre, $correo, $password);

        if ($result) {
            echo '<script>alert("Registro completado con éxito.");</script>';
            header('Location: index.php');
            exit();
        } else {
            $this->view->Assign("msg", "Error: Registro fallido");
            $this->view->Display("registro.tpl");
        }
    }

    public function mostrarFormRegistro() {
        $this->view->Display("registro.tpl");
    }

}

?>
