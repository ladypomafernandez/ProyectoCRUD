<?php
    require '../recursos/Inc/Cabecera.php';

    foreach($objetoretornadounapelicula as $pelicula){}
    //var_dump($objetoretornadounapelicula); prueba
?>

<div class="ui container">
<h1> Modificar pelicula </h1>
<form action="PeliculasController.php" method="POST" enctype="multipart/form-data" class="ui form"> 
  <div class="two fields">
    <div class ="field">
      <input type="hidden" name="action" value="update">
      <label for="nombre">Nombre Pelicula</label>
      <input type="hidden" name="id" value="<?php echo $pelicula->id; ?>">
      <input type="text" name="nombre" value="<?php echo $pelicula->nombre; ?>">
    </div>
    <div class ="field">
      <label for="nombre">Clasificación</label>
      <input type="text" name="clasificacion" value="<?php echo $pelicula->clasificacion; ?>">
    </div>
  </div>
  <div class ="two fields">
    <div class ="field">
      <label for="nombre">Duración Pelicula</label>
      <input type="text" name="duracion" value="<?php echo $pelicula->duracion; ?>">
    </div>
    <div class ="field">
      <label for="nombre">Género Pelicula:</label>
      <input type="text" name="genero" value="<?php echo $pelicula->genero; ?>">
    </div>
  </div>
  <div class ="two fields">
    <div class ="field">
      <label for="nombre">Idioma Pelicula</label>
      <input type="text" name="idioma" value="<?php echo $pelicula->idioma; ?>">
    </div>
    <div class ="field">
      <label for="nombre">Imagen Pelicula</label>
      <input type="hidden" name="fotooriginal" value="<?php echo 
      $pelicula->foto; ?>">
      <input type="hidden" name="fotourloriginal" value="<?php echo 
      $pelicula->foto_url; ?>">
      <img src="<?php echo $pelicula->foto_url;  ?>" height="100" width="100">
      <input type="file" name="imagen" accept=".jpg, .png, .gif">
    </div>
  </div>

  <div class ="five fields">
    <div class ="field"></div>
    <div class ="field"></div>
    <div class ="field"><button class="ui grey button">Guardar</button></div>
    <div class ="field"></div>
    <div class ="field"></div>
  </div>
</form>
</div>

<?php
    require '../recursos/Inc/footer.php';
?>