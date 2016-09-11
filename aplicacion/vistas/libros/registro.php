<div>

    <?php if ($args["msg_portada"]['error']) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Portada! </strong> <?= $args["msg_portada"]['msg'] ?>.
        </div>
    <?php endif; ?>
    <?php if ($args["msg_libro"]['error']) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Libro! </strong> <?= $args["msg_libro"]['msg'] ?>.
        </div>
    <?php endif; ?>

    <form class="form-horizontal" action="<?= BASE_URL ?>index.php/libros/registrar" method="post" enctype="multipart/form-data">
        <fieldset>
            <!-- Form Name -->
            <legend>Registrar Nuevo Libro</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txtTitulo">Título</label>
                <div class="col-md-4">
                    <input id="txtTitulo" name="titulo" placeholder="Ingrese el titulo del libro"
                       class="form-control input-md" required="" type="text" />
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria">Categoria</label>
                <div class="col-md-3">
                    <select id="categoria" name="categoria" class="form-control" required="">
                        <option value="">Seleccione</option>
                        <?php foreach ($args["especialidades"] as $list) : ?>
                            <option value="<?= $list['nombre'] ?>"><?= $list['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-1">
                    <a target="_blank" href="<?= BASE_URL ?>index.php/especialidades/registrar" class="btn btn-info" title="Registrar Nuevo Categoria"><i class="fa fa-plus"></i></a>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="autor">Autor</label>
                <div class="col-md-3">
                    <select id="autor" name="autor" class="form-control" required="">
                        <option value="">Seleccione</option>
                        <?php foreach ($args["autores"] as $list) : ?>
                            <option value="<?= $list['nombre'] ?>"><?= $list['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-1">
                    <a target="_blank" href="<?= BASE_URL ?>index.php/autores/registrar" class="btn btn-info" title="Registrar Nuevo autor"><i class="fa fa-plus"></i></a>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="libro">Año de publicación</label>
                <div class="col-md-4">
                    <select name="anio_publicacion" id="" class="form-control">
                        <option value="">Seleccione</option>
                        <?php for ($i = 1700; $i <= 2016; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>

                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="libro">Agregar Foto de portada</label>
                <div class="col-md-4">
                    <input id="portada_libro" name="portada_libro" class="input-file" type="file">
                </div>
            </div>

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
                    <input type="submit" value="Registrar" class="btn btn-success" />
                    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>