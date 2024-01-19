<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>Portafolio</title>

    <script>
        let root = '<?php echo index; ?>'
        document.addEventListener("DOMContentLoaded", function () {
            const statusElement = document.getElementById("status");
            let dots = 0;

            setInterval(function () {
                dots = (dots % 5) + 1;
                const dotsText = ".".repeat(dots);
                statusElement.textContent = `David's Portfolio, Loading repository${dotsText}`;

                if (dots == 5)
                    location.href = root;
            }, 500);

        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 2em;
            display: grid;
            grid-template-rows: auto 1fr; /* Cambiado a grid-template-rows */
            align-items: center;
            min-height: 100vh;
            background: #E0E0E0;
        }

        h1 {
            font-family: Arial;
            font-weight: bold;
            font-size: 2em;
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
            width: 170px;
            transition: all 300ms;
        }

        @media (min-width: 768px) {
            body {
                padding: 4em;
            }

            h1 {
                font-size: 3em;
            }

            img {
                width: 200px;
            }

            img:hover {
                width: 220px;
            }
        }
    </style>
</head>
<body>
    <img src="public/images/Logo D'ar55.png">
    <h1 id="status">David's Portfolio, Loading repository</h1><br>
</body>
</html>
