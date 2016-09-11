

// Configuración de las tablas

$(document).ready(function() {
    $('#tabla_libros').DataTable({
        "language": {
            "url": "../assets/i18n/Spanish.json"
        }
    });


    $('#tabla_autores').DataTable({
        "language": {
            "url": "../assets/i18n/Spanish.json"
        }
    });

    $('#tabla_especialidades').DataTable({
        "language": {
            "url": "../assets/i18n/Spanish.json"
        }
    });

    $("#menu_libros").click(function(){
        if($("#menu_libros_lista").hasClass('hidden')){
            $("#menu_libros_lista").removeClass('hidden');
        } else {
            $("#menu_libros_lista").addClass('hidden');
        }
    });

    $("#menu_autores").click(function(){
        if($("#menu_autores_lista").hasClass('hidden')){
            $("#menu_autores_lista").removeClass('hidden');
        } else {
            $("#menu_autores_lista").addClass('hidden');
        }
    });

    $("#menu_especialidades").click(function(){
        if($("#menu_especialidades_lista").hasClass('hidden')){
            $("#menu_especialidades_lista").removeClass('hidden');
        } else {
            $("#menu_especialidades_lista").addClass('hidden');
        }
    });

    $("#menu_usuarios").click(function(){
        if($("#menu_usuarios_lista").hasClass('hidden')){
            $("#menu_usuarios_lista").removeClass('hidden');
        } else {
            $("#menu_usuarios_lista").addClass('hidden');
        }
    });

} );