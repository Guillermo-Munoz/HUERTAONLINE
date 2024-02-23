<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bienvenido vendedor</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre del Producto:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>
        
        <label for="precio">Precio:</label><br>
        <input type="number" id="precio" name="precio" min="0" step="0.01" required><br><br>
        
        
        <label for="foto">Foto:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
        
        <button type="submit">Añadir Producto</button>
    </form>
    
</body>
</html>