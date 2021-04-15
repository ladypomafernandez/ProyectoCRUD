<?php
require '../Modelo/Pelicula.php';

class PeliculasController extends Pelicula{

public function ViewInsert()
{
    require '../Vistas/Pelicula/Insert.php';
}

public function SaveInfoForModel($nombre,$clasificacion,$duracion,$genero,$idioma,$foto,$fotourl)
{
    $this->nombre = $nombre;
    $this->clasificacion = $clasificacion;
    $this->duracion = $duracion;
    $this->genero = $genero;
    $this->idioma = $idioma;
    $this->foto = $foto;
    $this->foto_url = $fotourl;
    $this->InsertPelicula();
    $this->Redirect();
}

public function UpdateInformationForModel($id,$nombre,$clasificacion,$duracion,$genero,$idioma,$foto,$fotourl)
{
    $this->id = $id;
    $this->nombre = $nombre;
    $this->clasificacion = $clasificacion;
    $this->duracion = $duracion;
    $this->genero = $genero;
    $this->idioma = $idioma;
    $this->foto = $foto;
    $this->foto_url = $fotourl;
    $this->UpdatePelicula();
    $this->Redirect();
}

public function ListView()
{
    $objetoretornadopelicula = $this->SearchAllPeliculas();
    require '../Vistas/Pelicula/View.php';
}

public function VerifyInformationForDelete($id)
{
    $this->id = $id;
    $this->DeletePelicula();
    $this->Redirect();
}

public function VerifyInformationForUpdate($id)
{
    $this->id = $id;
    $objetoretornadounapelicula = $this->SearchPelicula();
    require '../Vistas/Pelicula/Update.php';
}

public function Redirect()
{
    header("location: PeliculasController.php?action=view");
}

}

if(isset($_GET['action']) && $_GET['action']=='insert'){
    $instanciapeliculas = new PeliculasController();
    $instanciapeliculas->ViewInsert();
}

if(isset($_POST['action']) && $_POST['action']=='insert'){
    $instanciapeliculas = new PeliculasController();
    $foto = $_FILES['imagen']['name'];
    $fototemporal = $_FILES['imagen']['tmp_name'];
    $fotourl = "../Vistas/Pelicula/Images/" . $foto;
    copy($fototemporal,$fotourl);
    $instanciapeliculas->SaveInfoForModel(
        $_POST['nombre'],
        $_POST['clasificacion'],
        $_POST['duracion'],
        $_POST['genero'],
        $_POST['idioma'],
        $foto,
        $fotourl);
}

if(isset($_GET['action']) && $_GET['action']=='view'){
    $instanciapeliculas = new PeliculasController();
    $instanciapeliculas->ListView();
}

if(isset($_GET['action']) && $_GET['action']=='delete'){
    $instanciapeliculas = new PeliculasController();
    $eliminarfoto = "../Vistas/Pelicula/Images/" . $_GET['foto'];
    unlink($eliminarfoto);
    $instanciapeliculas->VerifyInformationForDelete($_GET['id']);
}

if(isset($_GET['action']) && $_GET['action']=='update'){
    $instanciapeliculas = new PeliculasController();
    $instanciapeliculas->VerifyInformationForUpdate($_GET['id']);
}

if(isset($_POST['action']) && $_POST['action']=='update'){
    $instanciapeliculas = new PeliculasController();
    $fotooriginal = $_POST['fotooriginal'];
    $fotourloriginal = $_POST['fotourloriginal'];
    $foto = $_FILES['imagen']['name'];
    $fototemporal = $_FILES['imagen']['tmp_name'];
    $fotourl = "../Vistas/Pelicula/Images/" . $foto;
    if(empty($fototemporal)){
        $foto = $fotooriginal;
        $fotourl = $fotourloriginal;
    }
    else{
        unlink($fotourloriginal);
        copy($fototemporal,$fotourl);
    }
    $instanciapeliculas->UpdateInformationForModel(
        $_POST['id'],
        $_POST['nombre'],
        $_POST['clasificacion'],
        $_POST['duracion'],
        $_POST['genero'],
        $_POST['idioma'],
        $foto,
        $fotourl);
}
?>
