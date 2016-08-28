<div>
    
    
    
     
     
 
    
    
    
    <table class="table table-bordered"> 
        <thead> 
            <tr> 
                <th>#</th>
                <th>Título</th> 
                <th>Autor</th> 
                <th>Categría</th> 
                <th>Acciones</th> 
            </tr> 
        </thead> 
        <tbody>
            <?php foreach ($args as $lista) : ?>
            <tr> 
                <th scope="row"><?= $lista["id"]; ?></th> 
                <td><?= $lista["titulo"]; ?></td> 
                <td><?= $lista["autor"]; ?></td> 
                <td><?= $lista["categoria"]; ?></td> 
                <td><a href="<?= BASE_URL ?>public/libros/<?= $lista["enlace"]; ?>" target="_blank"><i class="fa fa-eye"></i> ver</td> 
            </tr> 
            <?php endforeach;  ?>
        </tbody> 
    </table>
</div>