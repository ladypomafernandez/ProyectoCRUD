<?php
require '../Modelo/Usuario.php';

class UsuariosController extends Usuario{

public function MostrarLogin()
{
    require '../Vistas/Usuario/Login.php';
}
public function VerificarLogin($nombreusuario, $contrasena)
{
    $this->nombre_usuario = $nombreusuario;
    $this->contrasena = $contrasena;
    $usuario = $this->ConsultarUsuario();
    if($usuario =="sindatos"){
        $_SESSION['error'] ="No se encontró este usuario en nuestra base de datos";
        $this->RedirectLogin();
    }
    else
    {
        if($contrasena=='123'){
            $_SESSION['nombre_usuario'] = $usuario->nombre_usuario;
            $_SESSION['rol'] = $usuario->rol;
            unset($_SESSION['error']);
            $this->Redirect();
        }
        else
        {
            $_SESSION['error'] ="Contraseña incorrecta, por favor inicie nuevamente";
            $this->RedirectLogin();
        }
    }
}
public function Redirect()
{
    header("location: ../Vistas/Home.php");
}
public function RedirectLogin()
{
    header("location: UsuariosController.php?action=login");;
}
}


if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador = new UsuariosController();
    $instanciacontrolador->MostrarLogin();
}

if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador = new UsuariosController();
    $instanciacontrolador->VerificarLogin($_POST['nombrelogin'],$_POST['contrasenalogin']);
}

?>