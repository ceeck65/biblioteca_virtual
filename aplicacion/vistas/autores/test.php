<div>
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Registrar Nuevo Libro</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtTitulo">Título</label>  
                <div class="col-md-4">
                    <input id="txtTitulo" name="txtTitulo" placeholder="Ingrese el titulo del libro" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria">Categoria</label>
                <div class="col-md-4">
                    <select id="categoria" name="categoria" class="form-control">
                        <option value="1">Seleccione</option>
                        <option value="2">Option one</option>
                        <option value="">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="autor">Autor</label>
                <div class="col-md-4">
                    <select id="autor" name="autor" class="form-control">
                        <option value="1">Seleccione</option>
                        <option value="2">Option one</option>
                        <option value="">Option two</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Text Input</label>  
                <div class="col-md-4">
                    <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">
                    <span class="help-block">help</span>  
                </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="libro">Agregar el libro</label>
                <div class="col-md-4">
                    <input id="libro" name="libro" class="input-file" type="file">
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="button1id" name="button1id" class="btn btn-success">Registrar</button>
                    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
                </div>
            </div>


            </div>