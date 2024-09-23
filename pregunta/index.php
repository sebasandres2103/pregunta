<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botón Elegante con Fondo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('ho2.jpg'); /* Cambia esta URL por la de tu imagen */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 90%; /* Cambiado a 90% para mayor adaptabilidad */
            max-width: 400px; /* Ancho máximo para dispositivos grandes */
            box-sizing: border-box; /* Incluye padding en el ancho total */
        }
        .message {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
            font-weight: 500;
        }
        .button {
            padding: 12px 25px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6f61;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-block; /* Para alinear correctamente */
            text-decoration: none; /* Para eliminar el subrayado */
            margin: 5px; /* Espaciado entre botones */
        }
        .button:hover {
            background-color: #ff4d4d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">¿Te puedo hacer una pregunta?</div>
        <a href="si.php" class="button">Sí</a>
        <a href="no.php" class="button">No</a>
    </div>

    <script>
        function handleClick() {
            alert('¡Has hecho clic en un botón!');
        }
    </script>
</body>
</html>
