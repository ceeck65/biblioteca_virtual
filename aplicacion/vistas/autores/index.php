<table id="tabla_autores" class="table table-bordered display table-responsive" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>
				Nombre de Autor
			</th>
			<th>
				Detalle
			</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($args as $lista) : ?>
		<tr>
			<td><?= $lista["nombre"]; ?></td>
			<td><?= $lista["detalle"]; ?></td>
		</tr>
	<?php endforeach;  ?>
	</tbody>
</table>
