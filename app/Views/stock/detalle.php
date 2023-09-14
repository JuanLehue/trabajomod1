<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="padding:10px;">
    <h1>Detalles del Producto</h1>
    <div class="card" style="width: 18rem; padding:8px;">  
        <p>Nombre: <?= $producto['nombre']?></p>
        <p>Precio: <?= $producto['precio']?></p>
        <p>Stock: <?= $producto['stock']?></p>
        <p>Codigo: <?= $producto['codigo']?></p>
        <a href="<?= site_url('/')?>" class="btn btn-primary">Volver a la lista de productos</a>
    </div>
</body>
</html>