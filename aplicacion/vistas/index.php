<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <div class="col-md-12">
      <div class="panel panel-info">
          <div class="panel-heading">Últimos libros registrados</div>
          <div class="panel-body">
              <?php foreach ($args as $lista) : ?>
              <div class="col-md-3">
                  <div class="info_libro">
                      <a href="<?= BASE_URL ?>public/libros/<?= $lista["enlace"]; ?>"target="_blank">
                      <img src="<?= BASE_URL ."public/portadas/" .$lista["portada"]; ?>" class="-image-responsive" width="100%" height="250px">
                      <h4><?= $lista["titulo"]; ?></h4>
                      <ul>
                          <li><b>Autor: </b> <?= ucfirst($lista["autor"]) ?></li>
                          <li><b>Categoria: </b><?= ucfirst($lista["categoria"]) ?></li>
                      </ul>
                      </a>
                  </div>
              </div>
              <?php endforeach; ?>
          </div>
          <div class="col-md-12 pie_pagina">
              <a href="<?= BASE_URL ?>index.php/libros" class="btn btn-toolbar right">Ver más libros...</a>
          </div>
      </div>
  </div>
<br>
  </body>
</html>
