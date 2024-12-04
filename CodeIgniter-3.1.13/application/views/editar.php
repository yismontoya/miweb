<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="<?php echo site_url('productos/actualizar/' . $producto->id); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $producto->nombre; ?>" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required><?php echo $producto->descripcion; ?></textarea><br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value="<?php echo $producto->precio; ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
