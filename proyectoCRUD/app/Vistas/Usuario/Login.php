<?php
    require '../recursos/Inc/CabeceraLogin.php';
?>

<body>
<div class="login-wrapper">
  <div class="login-left">
    <img src="../recursos/images/fondo.jpg">
    <div class="h1">INGRESE AL SISTEMA</div>
  </div>
  <form action="UsuariosController.php" method="POST" enctype="multipart/form-data">
  <div class="login-right">
    <div class="h2">LOGIN</div>
    <div class="form-group">
      <input type="hidden" name="action" value="login">
      <input type="text" name="nombrelogin" id="nombrelogin" placeholder="Nombre de usuario" required>   
    </div>
    <div class="form-group">
      <input type="password" name="contrasenalogin" id="contrasenalogin" placeholder="Contraseña" required>   
    </div>
    <div class="button-area">
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
	</form>
  </div>
</div>

<?php
    require '../recursos/Inc/FooterLogin.php';
?>