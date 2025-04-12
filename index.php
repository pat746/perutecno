<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #333;
        }

        .menu {
            margin-top: 30px;
        }

        .menu a {
            display: block;
            margin: 15px auto;
            padding: 12px 20px;
            width: 200px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a la Gestión de Productos</h1>

    <div class="menu">
        <a href="views/productos/listar.php">📋 Listar Productos</a>
        <a href="views/productos/registrar.php">➕ Registrar Producto</a>
        <a href="views/productos/editar.php">✏️ Editar Producto</a>
    </div>

</body>
</html>
