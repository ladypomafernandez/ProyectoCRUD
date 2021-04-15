<?php
    require '../recursos/Inc/Cabecera.php';
?>

<div class="ui container">
<h1> Listado de Peliculas </h1>

<div class="ui link items">
<?php foreach($objetoretornadopelicula as $pelicula) {?>
  <div class="item">
    <div class="ui tiny image">
      <img src="<?php echo $pelicula->foto_url;?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $pelicula->nombre;?></div>
      <div class="description">
        <p>Esta pelicula tiene una clasificación de <?php echo $pelicula->clasificacion;?>
        , tiene una duración de: <?php echo $pelicula->duracion;?>
        . Su genero es de: <?php echo $pelicula->genero;?>
        . Se puede reproducir en los siguientes idiomas: <?php echo $pelicula->idioma;?>
        </p>
      </div>
      <div>
        <a onclick="UpdatePelicula(<?php echo $pelicula->id;?>)"><i class="edit icon"></i></a>
        <a onclick="DeletePelicula(<?php echo $pelicula->id;?>,
        '<?php echo $pelicula->foto; ?>')"><i class="window close icon"></i></a>
      </div>
    </div>
  </div>
<?php } ?>

</div> <!-- Cerrando Ui Link Item -->
</div> <!-- Cerrando Container -->
<?php
    require '../recursos/Inc/Footer.php';
?>