<link rel="stylesheet" href="./CSS/estilo.css">
<?php
$menu = simplexml_load_file("carta.xml");

// Mostrar el plato en la columna correspondiente
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Filtrar los platos según la categoría seleccionada
foreach ($menu->plato as $plato) {
    if ($category === '' || (string)$plato['tipo'] === $category) {
        // Mostrar solo los platos de la categoría seleccionada o todos si no hay una categoría especificada
        echo "<div class='plato'>";
        echo "<span class='nombre'>" . $plato->nombre . "</span><br>";
        echo "<span class='precio'>" . $plato->precio . "</span><br>";
        echo "<span class='descripcion'>" . $plato->descripcion . "</span><br>";
        echo "<span class='calorias'>Calorías: " . $plato->calorias . "</span><br>";
        echo "<div class='caracteristicas'>";
        echo "Características:";
        echo "<ul>";
        foreach ($plato->caracteristicas->categoria as $categoria) {
            echo "<li>" . $categoria . "</li>";
        }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
    }
}
?>