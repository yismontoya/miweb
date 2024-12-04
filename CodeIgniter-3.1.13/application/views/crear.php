<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form action="<?php echo site_url('productos/guardar'); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea><br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
