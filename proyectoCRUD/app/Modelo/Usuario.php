<?php
require '../Config/Conexion.php';

class  Usuario{
    protected $id;
    protected $nombre_usuario;
    protected $contrasena;
    protected $rol;

    protected function ConsultarUsuario()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$this->nombre_usuario'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetousuario = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach ($objetousuario as $usuario){ }
        if(empty($usuario)){
            $usuario = "sindatos";
        }
        return $usuario;
    }
}
?>