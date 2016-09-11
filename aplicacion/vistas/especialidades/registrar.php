<form class="form-horizontal" action="<?= BASE_URL ?>index.php/especialidades/registrar-nuevo" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Especialidades</label>
  <div class="col-md-4">
    <input id="text" name="nombre" placeholder="Ingrese nombre de especialidad" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Detalles</label>  
  <div class="col-md-4">
  <input id="textinput" name="detalle" placeholder="Ingrese detalles" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Entrar</label>
  <div class="col-md-4">
    <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Registrar" />
  </div>
</div>

</fieldset>
</form>
