<?=$cabecera;?>

    <?php
    
    print_r($camiseta);
    
    ?>

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de camiseta</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?=$camiseta['id']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=$camiseta['nombre']?>" class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="imagen"></label>
                        <br>
                        <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$camiseta['imagen'];?>"
                        width="200" alt="">
                        
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                        
                </form>
            </p>
        </div>
    </div>

<?=$piepagina;?>