<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones Interactivos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        .question {
            margin-bottom: 2rem;
            font-size: 2rem; /* Ajustado a rem */
            text-align: center;
        }
        .button-container {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap; /* Permite que los botones se ajusten */
            justify-content: center; /* Centrar los botones */
        }
        .button {
            padding: 1rem 2rem; /* Ajustado a rem */
            font-size: 1.2rem; /* Ajustado a rem */
            color: #fff;
            border: none;
            border-radius: 0.5rem; /* Ajustado a rem */
            cursor: pointer;
            transition: background-color 0.3s;
            position: relative;
        }
        #yes-button {
            background-color: green;
        }
        #no-button {
            background-color: lightcoral;
        }
        .stars {
            display: none;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem; /* Ajustado a rem */
            color: gold;
        }
        .button:hover .stars {
            display: block;
        }

        /* Media queries para pantallas más pequeñas */
        @media (max-width: 600px) {
            .question {
                font-size: 1.5rem; /* Más pequeño en pantallas pequeñas */
            }
            .button {
                padding: 0.8rem 1.5rem; /* Ajustado para pantallas pequeñas */
                font-size: 1rem; /* Más pequeño en pantallas pequeñas */
            }
            .stars {
                font-size: 1rem; /* Más pequeño en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
    <div class="question">¿Quieres ir el martes a comer Papitas conmigo?</div>
    <div class="button-container">
        <a href="sii.php" id="yes-button" class="button">
            Sí
            <span class="stars">✨✨✨</span>
        </a>
        <button id="no-button" class="button">No</button>
    </div>

    <script>
        const noButton = document.getElementById('no-button');

        // Ocultar el botón "No" al hacer clic
        noButton.addEventListener('click', function() {
            noButton.style.display = 'none';
        });

        document.getElementById('yes-button').addEventListener('click', function() {
            this.classList.toggle('active');
        });
    </script>
</body>
</html>
