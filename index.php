<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tablero de ajedrez</title>
<!-- Definición de estilos CSS -->
<style>
    /* Estilos para la tabla y las celdas */
    table, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
    /* Estilos para las celdas individuales */
    td {
        width: 50px;
        height: 50px;
        margin: 0 auto;
        padding: 0px;
    }
    /* Estilos para las celdas blancas */
    td.blanca {
        background-color: #f0d9b5;
    }
    /* Estilos para las celdas grises */
    td.gris {
        background-color: #b58863;
    }
    /* Estilos para las imágenes de las fichas */
    img {
        opacity: 0.7;
        width: 100%;
        height: 100%;
        margin: 0px;
    }
</style>
</head>
<body>
<!-- Inclusión del código PHP para la generación del tablero de ajedrez -->
<?php
// Inclusión del archivo que contiene la definición de la clase y funciones para el tablero de ajedrez
include "funcionesAjedrez.php";

// Creación de una nueva instancia de la clase TableroAjedrez
$tablero = new TableroAjedrez();
// Llamada al método dibujarTablero() para generar el tablero de ajedrez con las piezas
$tablero->dibujarTablero();
?>
</body>
</html>
