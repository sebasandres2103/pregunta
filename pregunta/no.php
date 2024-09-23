<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Añadido para centrar verticalmente */
        }
        .container {
            background-color: #f5c6cb;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            width: 90%; /* Cambiado para que ocupe el 90% del ancho */
            max-width: 400px; /* Ancho máximo aumentado */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .sad-face {
            font-size: 10vw; /* Ajuste en unidades de viewport para un tamaño relativo */
            margin-bottom: 20px;
        }
        .message {
            font-size: 5vw; /* Ajuste en unidades de viewport */
            margin-bottom: 30px;
        }
        .button-container {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%); /* Centrado horizontalmente */
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #721c24;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #5a1a1a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sad-face">😢</div>
        <div class="message">¡Oops! Algo salió mal.</div>
    </div>
    <div class="button-container">
        <a href="index.php" class="button">Volver</a>
    </div>
</body>
</html>
