<?php
require '../Config/Conexion.php';

class Pelicula{
    protected $id;
    protected $nombre;
    protected $clasificacion;
    protected $duracion;
    protected $genero;
    protected $idioma;
    protected $foto;
    protected $foto_url;

    protected function InsertPelicula()
    {
        $ic = new Conexion();
        $sql = "INSERT INTO peliculas(nombre,clasificacion,duracion,genero,idioma,foto,foto_url) VALUES (?,?,?,?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar -> bindParam(1,$this->nombre);
        $insertar -> bindParam(2,$this->clasificacion);
        $insertar -> bindParam(3,$this->duracion);
        $insertar -> bindParam(4,$this->genero);
        $insertar -> bindParam(5,$this->idioma);
        $insertar -> bindParam(6,$this->foto);
        $insertar -> bindParam(7,$this->foto_url);
        $insertar -> execute();
    }

    protected function SearchAllPeliculas()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM peliculas";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objetoretornadopeliculas = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objetoretornadopeliculas;
    }

    protected function DeletePelicula()
    {
        $ic = new Conexion();
        $sql = "DELETE FROM peliculas WHERE id='$this->id'";
        $delete = $ic->db->prepare($sql);
        $delete->execute();
    }

    protected function SearchPelicula()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM peliculas WHERE id='$this->id'";
        $mostrar = $ic->db->prepare($sql);
        $mostrar -> execute();
        $objetoretornadounapelicula = $mostrar->FetchAll(PDO::FETCH_OBJ);
        return $objetoretornadounapelicula;
    }

    protected function UpdatePelicula()
    {
        $ic = new Conexion();
        $sql = "UPDATE peliculas SET nombre='$this->nombre',clasificacion='$this->clasificacion',
        duracion='$this->duracion',genero='$this->genero',idioma='$this->idioma',foto='$this->foto',
        foto_url='$this->foto_url' WHERE id='$this->id'";
        $update = $ic->db->prepare($sql);
        $update -> execute();
    }
    
}
?>