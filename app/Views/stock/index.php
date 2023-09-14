<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="padding:10px;">
    <h1>Productos</h1>
    <?php foreach($productos as $producto) : ?>
    <div class="contenedor">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $producto['nombre']?></h5>
                <a href="<?= site_url('verDetalle/'. $producto['id'])?>" class="btn btn-primary">Ver Detalle</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>
