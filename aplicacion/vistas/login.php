<!-- All the files that are required -->
<link href="<?= BASE_URL ?>assets/css/login.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->



<?php  if (isset($args)) : ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error! </strong> Nombre o contraseña incorrectos! intentelo de nuevo.
    </div>
<?php endif; ?>

<div class="text-center" style="padding:50px 0">
    <div class="logo">Inicio de Sesión</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" action="<?= BASE_URL ?>index.php/acceso/iniciar-sesion" method="post" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Contraseña</label>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
                    </div>
                </div>
                <button type="submit" class="login-button" title="Iniciar Sesión"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>¿Olvidó contraseña? <a href="#">click Aquí</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
