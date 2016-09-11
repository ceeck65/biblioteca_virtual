<div style="margin: 2%">
        <a href="<?= BASE_URL ?>index.php/usuarios/registrar" class="btn btn-info"><i class="fa fa-plus"></i> Registrar Nuevo</a>
    </div>
<table class="table table-striped table-hover table-condensed table-responsive">
	<thead>
		<tr>
			<th>
				Nombre
			</th>
			<th>
				Usuario
			</th>
			<th>
				Nivel
			</th>
			<th>
				Acciones
			</th>
		</tr>
	</thead>
	<tbody>
      <?php foreach ($args as $usuario) : ?>
			<tr>
				<td>
					<?= $usuario['nombre']; ?>
				</td>
				<td>
					<?= $usuario['usuario']; ?>
				</td>
				<td>
					<?= $usuario['niveles_id']; ?>
				</td>
				<td class="opciones text-center">
					<?php if($_SESSION['nivel'] == 1) : ?>
					<a href="<?= BASE_URL ?>index.php/usuarios/editar/<?= $usuario["id"]; ?>"><i class="fa fa-edit"></i> Editar </a>
					<a href="<?= BASE_URL ?>index.php/usuarios/eliminar-registros/<?= $usuario["id"]; ?>" onclick="return confirm('¿Está seguro que desea eliminar el usuario, <?= $usuario['nombre']; ?>?')"><i class="fa fa-trash"></i> Eliminar </a>
					<?php endif; ?>
				</td> 
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
