<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Image</title>
    <style>
        /* Style for the image */
        img {
            width: 100%; /* Adjust the width to 100% of the container */
            height: auto; /* Maintain aspect ratio */
            max-width: 300px; /* Limit max width */
            border: 5px solid #000; /* Add a black border */
            border-radius: 15px; /* Round the corners */
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5); /* Add shadow */
            display: block; /* Remove any extra spacing below the image */
            margin: 20px auto; /* Center the image horizontally */
        }
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
            flex-direction: column; /* Align items vertically */
        }
        .container {
            background-color: #f5c6cb;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            width: 90%; /* Responsive width */
            max-width: 400px; /* Limit max width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .sad-face {
            font-size: 100px;
            margin-bottom: 20px;
        }
        .message {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .button-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
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
        <img src="e2.gif" alt="Celebrate Homer Simpson">
    </div>

    <div class="button-container">
        <a href="index.php" class="button">Volver</a>
    </div>

</body>
</html>

