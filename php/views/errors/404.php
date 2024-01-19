<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>

    <style>
        body {
            margin: 0;
            padding: 50px;
            display: grid;
            width: 100%;
            height: 100%;

            background: #E0E0E0;
        }

        h1 {
            font-family: Arial;
            font-weight: bold;
            font-size: 30px;
            margin: auto;
        }

        img {
            margin: auto;
            width: 150px;
            height: auto;

            object-fit: cover;
            filter: drop-shadow(5px 0 5px rgba(0, 0, 0, 0.6));

            transition: all 300ms;
        }

        img:hover {
            margin: auto;
            width: 170px;
            height: auto;

            transition: all 300ms;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="color: #2471A3; font-size: 120px; margin-top: 20vh;">404</h1>
    <img src="public/images/Logo D'ar55.png" onclick="redirectToHome()">
    <h1 id="status">Parece que hubo un error, <b>URL(<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; ?>)</b> no encontrada</h1><br>

    <!-- Componentes generales del <SCRIPT/> -->
    <?php require_once "../components/script.php"; ?>
</body>
</html>
