<?php session_start();

if(empty($_SESSION['Nombre'])){
  header("location: app/Controlador/UsuariosController.php?action=login");
}
?>


