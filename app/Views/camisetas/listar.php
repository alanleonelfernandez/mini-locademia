<?=$cabecera?>
<a class="btn btn-success" href="<?=base_url('crear')?>">Agregar camiseta</a>
<br><br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($camisetas as $camiseta):  ?>

                <tr>
                    <td><?=$camiseta['id'];?></td>
                    <td>
                        <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$camiseta['imagen'];?>"
                        width="200" alt="">
                    </td>
                    <td><?=$camiseta['nombre'];?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$camiseta['id'])?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$camiseta['id'])?>" class="btn btn-danger" type="button">Borrar</a>

                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
<?=$piepagina?>