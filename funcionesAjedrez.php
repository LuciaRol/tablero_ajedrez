<?php

class TableroAjedrez {
    // Propiedad para definir los estilos de las casillas del tablero
    private $estilos = array("blanca", "gris");
    // Arreglo de piezas blancas
    private $piezasBlancas = array("torreb", "caballob", "alfilb", "reinab", "reyb", "alfilb", "caballob", "torreb");
    // Arreglo de piezas negras
    private $piezasNegras = array("torren", "caballon", "alfiln", "reinan", "reyn", "alfiln", "caballon", "torren");

    // Función para determinar si una casilla del tablero es par o impar
    public function esPar($fila, $columna) {
        return ($fila + $columna) % 2;
    }

    // Función para dibujar el tablero completo
    public function dibujarTablero() {
        echo "<table>";
        // Itera sobre cada fila del tablero y llama a dibujarFila()
        for ($fila = 8; $fila >= 1; $fila--) {
            $this->dibujarFila($fila);
        }
        echo "</table>";
    }

    // Función para dibujar una fila del tablero
    private function dibujarFila($fila) {
        echo "<tr>";
        // Según el número de fila, dibuja piezas, peones o casillas vacías
        switch ($fila) {
            case 8: $this->dibujarPiezas($fila, $this->piezasNegras); break;
            case 7: $this->dibujarPeones($fila, 'negro'); break;
            case 2: $this->dibujarPeones($fila, 'blanco'); break;
            case 1: $this->dibujarPiezas($fila, $this->piezasBlancas); break;
            default: $this->dibujarFilaVacia($fila);
        }
        echo "</tr>";
    }

    // Función para dibujar una fila vacía
    private function dibujarFilaVacia($fila) {
        for ($columna = 8; $columna >= 1; $columna--) {
            echo "<td class='" . $this->estilos[$this->esPar($fila, $columna)] . "'>";
        }
    }

    // Función para dibujar piezas en una fila
    private function dibujarPiezas($fila, $piezas) {
        for ($columna = 8; $columna >= 1; $columna--) {
            echo "<td class='" . $this->estilos[$this->esPar($fila, $columna)] . "'>";
            echo "<img src='fichasAjedrez\\" . $piezas[8 - $columna] . ".png'/>";
            echo "</td>";
        }
    }

    // Función para dibujar peones en una fila
    private function dibujarPeones($fila, $color) {
        $imagen = ($color == 'negro') ? 'peon-negro.png' : 'peon-blanco.png';
        for ($columna = 8; $columna >= 1; $columna--) {
            echo "<td class='" . $this->estilos[$this->esPar($fila, $columna)] . "'>";
            echo "<img src='fichasAjedrez\\" . $imagen . "'/>";
            echo "</td>";
        }
    }
}

?>
