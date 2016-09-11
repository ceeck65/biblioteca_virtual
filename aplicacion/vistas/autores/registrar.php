<form action="<?= BASE_URL ?>index.php/autores/registrar_nuevo" method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre Autor</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" placeholder="Ingrese nombre" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="detalle">Detalles</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="detalle" name="detalle" required=""></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <input type="submit"  value="Registrar" name="" class="btn btn-success"/>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
