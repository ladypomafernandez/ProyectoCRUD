<?php
    require '../recursos/Inc/Cabecera.php';
?>

<div class="ui container">
<h1> Insertar una nueva pelicula </h1>
<form action="PeliculasController.php" method="POST" enctype="multipart/form-data" class="ui form"> 
  <div class="two fields">
    <div class ="field">
    <input type="hidden" name="action" value="insert">
    <label for="nombre">Nombre Pelicula</label>
    <input type="text" name="nombre" placeholder="Nombre:">
    </div>
    <div class ="field">
    <label for="nombre">Clasificación</label>
    <input type="text" name="clasificacion" placeholder="Clasificacion:">
    </div>
  </div>
  <div class ="two fields">
    <div class ="field">
    <label for="nombre">Duración Pelicula</label>
    <input type="text" name="duracion" placeholder="Duración:">
    </div>
    <div class ="field">
    <label for="nombre">Género Pelicula:</label>
    <input type="text" name="genero" placeholder="Género:">
    </div>
  </div>
  <div class ="two fields">
    <div class ="field">
    <label for="nombre">Idioma Pelicula</label>
    <input type="text" name="idioma" placeholder="Idioma:">
    </div>
    <div class ="field">
    <label for="nombre">Imagen Pelicula</label>
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