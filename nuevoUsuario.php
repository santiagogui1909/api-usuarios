<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nuevo Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f3e7;
            border: 1px solid #b7e4b7;
            color: #4caf50;
        }

        .error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>

    <h2>Agregar Nuevo Usuario</h2>

    <div class="form-container">
        <!-- Mostrar mensaje de éxito o error -->
        <?php if (isset($mensaje)): ?>
            <div class="message <?= isset($nuevo_usuario) ? '' : 'error' ?>">
                <?= $mensaje ?>
            </div>
        <?php endif; ?>

        <!-- Formulario para ingresar un nuevo usuario -->
        <form action="index.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del usuario" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required>

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

</body>

</html>