<div>
    <?php if($_SESSION['nivel'] == 1) : ?>
    <div style="margin: 2%">
        <a href="<?= BASE_URL ?>index.php/libros/registrar_nuevo" class="btn btn-info"><i class="fa fa-plus"></i> Registrar Nuevo</a>
    </div>
    <?php endif; ?>
    <table id="tabla_libros" class="table table-bordered display" cellspacing="0" width="100%">
        <thead> 
            <tr> 
                <th width="10%"><img src="<?= BASE_URL ."public/imagenes/biblioteca_virtual.jpg"?>" class="-image-responsive" width="100%"></th>
                <th>Título</th> 
                <th>Autor</th> 
                <th>Categoría</th>
                <th>Año de Publicación</th>
                <th width="15%">Acciones</th>
            </tr> 
        </thead> 
        <tbody>
            <?php foreach ($args as $lista) : ?>
            <tr> 
                <th scope="row">
                    <a href="<?= BASE_URL ?>public/libros/<?= $lista["enlace"]; ?>"target="_blank">
                        <img src="<?= BASE_URL ."public/portadas/" .$lista["portada"]; ?>" class="-image-responsive" width="100%">
                    </a>
                </th>
                <td><?= $lista["titulo"]; ?></td> 
                <td><?= $lista["autor"]; ?></td> 
                <td><?= $lista["categoria"]; ?></td>
                <td><?= $lista["anio_publicacion"]; ?></td>
                <td class="opciones">
					<a href="<?= BASE_URL ?>public/libros/<?= $lista["enlace"]; ?>" target="_blank"><i class="fa fa-eye"></i> ver </a>
					<?php if($_SESSION['nivel'] == 1) : ?>
					<a href="<?= BASE_URL ?>index.php/libros/eliminar-registros/<?= $lista["id"]; ?>" onclick="return confirm('¿Está seguro que desea eliminar el libro?')"><i class="fa fa-trash"></i> Eliminar </a>
					<?php endif; ?>
                </td> 
            </tr> 
            <?php endforeach;  ?>
        </tbody> 
    </table>
</div>
