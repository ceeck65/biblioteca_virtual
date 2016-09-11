 <h1>Registrar usuarios</h1>
 
 <?php if ($args["msg"]) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error! </strong> <?= $args["msg"]?>.
        </div>
    <?php endif; ?>
    
 <form class="form-horizontal" action="<?= BASE_URL ?>index.php/usuarios/registro" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="nombre" placeholder="Ingrese nombre" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">Usuario</label>
  <div class="col-md-4">
    <input id="searchinput" name="usuario" placeholder="Ingrese usuario" class="form-control input-md" type="search">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
  <div class="col-md-4">
    <input id="passwordinput" name="contrasena" placeholder="Ingrese  cotraseña" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Registrar</button>
    <button id="Ingrese entrar" name="Ingrese entrar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
