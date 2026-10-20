<?php
require_once __DIR__ . '/../funciones.php';

echo "=== Pruebas de validarNombre() ===" . PHP_EOL;

$casosNombre = [
    ["Teclado", true],
    ["", false],       
    ["   ", false],            
    ["Mouse", true],
];

$aceptadas = 0;
$rechazadas = 0;

foreach ($casosNombre as [$entrada, $esperado]) {
    $resultado = validarNombre($entrada);
    $textoEntrada = $entrada === "" ? "'' (vacío)" : "'$entrada'";
    
    if ($resultado === $esperado) {
        $aceptadas++;
        echo "Prueba de nombre $textoEntrada pasó." . PHP_EOL;
    } else {
        $rechazadas++;
        echo "Prueba de nombre $textoEntrada falló. Resultado esperado: " . ($esperado ? 'true' : 'false') . ", resultado obtenido: " . ($resultado ? 'true' : 'false') . PHP_EOL;
    }
}

echo PHP_EOL;
echo "Resumen de validación de nombres:" . PHP_EOL;
echo "Aceptadas: $aceptadas" . PHP_EOL;
echo "Rechazadas: $rechazadas" . PHP_EOL;
echo "Total evaluados: " . ($aceptadas + $rechazadas) . PHP_EOL;

echo PHP_EOL;

// ==========================================
// PRUEBAS DE VALIDACIÓN DE CANTIDAD
// ==========================================
echo "=== Pruebas de validarCantidad() ===" . PHP_EOL;

$casosCantidad = [
    [10, true],  
    [0, false],     
    [-5, false],    
    ["abc", false], 
];

$aceptadasCantidad = 0;
$rechazadasCantidad = 0;

foreach ($casosCantidad as [$entrada, $esperado]) {
    $resultado = validarCantidad($entrada);
    
    if ($resultado === $esperado) {
        $aceptadasCantidad++;
        echo "Prueba de cantidad '$entrada' pasó." . PHP_EOL;
    } else {
        $rechazadasCantidad++;
        echo "Prueba de cantidad '$entrada' falló. Resultado esperado: " . ($esperado ? 'true' : 'false') . ", resultado obtenido: " . ($resultado ? 'true' : 'false') . PHP_EOL;
    }
}

echo PHP_EOL;
echo "Resumen de validación de cantidades:" . PHP_EOL;
echo "Aceptadas: $aceptadasCantidad" . PHP_EOL;
echo "Rechazadas: $rechazadasCantidad" . PHP_EOL;
echo "Total evaluados: " . ($aceptadasCantidad + $rechazadasCantidad) . PHP_EOL;

echo PHP_EOL;
$totalAceptadas = $aceptadas + $aceptadasCantidad;
$totalRechazadas = $rechazadas + $rechazadasCantidad;
$totalGeneral = $totalAceptadas + $totalRechazadas;

echo "Resumen Total de Pruebas:" . PHP_EOL;
echo "Total aceptadas: $totalAceptadas" . PHP_EOL;
echo "Total rechazadas: $totalRechazadas" . PHP_EOL;
echo "Total general evaluados: $totalGeneral" . PHP_EOL;
