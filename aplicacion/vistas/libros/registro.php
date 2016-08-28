<div>
    <form class="form-horizontal" action="" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Registrar Nuevo Libro</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtTitulo">Título</label>  
                <div class="col-md-4">
                    <input id="txtTitulo" name="titulo" placeholder="Ingrese el titulo del libro" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria">Categoria</label>
                <div class="col-md-4">
                    <select id="categoria" name="categoria" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="Matematica">Matematica</option>
                        <option value="Fisica">Fisica</option>
                        <option value="Computacion">Computacion</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="autor">Autor</label>
                <div class="col-md-4">
                    <select id="autor" name="autor" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="Mario Fernandez">Mario Fernandez</option>
                        <option value="Aura Marina Lopez">Aura Marina Lopez</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Text Input</label>  
                <div class="col-md-4">
                    <input id="textinput" name="url" placeholder="placeholder" class="form-control input-md" type="text">
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