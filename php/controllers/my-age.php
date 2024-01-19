<?php

function calcularEdad($fechaNacimiento) {
    $fechaActual = date("Y-m-d");

    $timestampNacimiento = strtotime($fechaNacimiento);
    $timestampActual = strtotime($fechaActual);

    $diferenciaSegundos = $timestampActual - $timestampNacimiento;

    $edad = floor($diferenciaSegundos / (365 * 24 * 60 * 60));

    return $edad;
}

$fechaNacimiento = "2001-09-26";
$edadCalculada = calcularEdad($fechaNacimiento);
