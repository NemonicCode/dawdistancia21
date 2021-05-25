<?php
/**
 * Practica Daw de un documentro Script en php con dos funciones
 * @author ALACMA
 * @version 1.0
 */


/**
 * Funcion que muestra por pantalla un texto con el nombre y apellidos definidos
 * @param string $nombre
 * @param string $apellidos 
 */
function tuNombre($nombre, $apellidos) {
    echo "Mi nombre es " . $nombre . " y mis apellidos son " . $apellidos;
}

/**
 * Función que suma dos números y devuelve el resultado
 * @param int $num1
 * @param int $num2
 * @return int
 */
function suma($num1, $num2) {
    return $num1 + $num2;
}

tuNombre("Alejandro", "Acuña Martín");

suma(5,3);
