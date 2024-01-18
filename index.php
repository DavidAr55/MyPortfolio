<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const statusElement = document.getElementById("status");
            let dots = 0;

            setInterval(function() {
                dots = (dots % 5) + 1;
                const dotsText = ".".repeat(dots);
                statusElement.textContent = `Creating repository${dotsText}`;
            }, 500);
        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            width: 100%;
            height: 100%;
        }

        h1 {
            font-family: Arial;
            font-weight: bold;
            font-size: 30px;
            margin: auto;
            margin-top: 45vh;
        }
    </style>
</head>
<body>
    <h1 id="status">Creating repository...</h1>
</body>
</html>
