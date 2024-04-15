<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e406714e56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="./CSS/estilo.css">
    <title>Carta Restaurante</title>
</head>
<body class="fondoPantalla">
    <h1>ZenSavor</h1>
    <div class="menu">
        <div class="barra">
            <a href="?category=">Todos</a>
            <a href="?category=entrante">Entrantes</a>
            <a href="?category=principal">Platos Principales</a>
            <a href="?category=postre">Postres</a>
        </div>
        <div class="columnas">
            <div class="columna">
                <?php include "carta.php"?>
            </div>
        </div>
    </div>
</body>
</html>