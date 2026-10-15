<?php
require_once __DIR__ . '/../funciones.php';

echo "<h3>Pruebas de validarNombre()</h3>";

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
        echo "Prueba de nombre $textoEntrada pasó.<br>\n";
    } else {
        $rechazadas++;
        echo "Prueba de nombre $textoEntrada falló. Resultado esperado: " . ($esperado ? 'true' : 'false') . ", resultado obtenido: " . ($resultado ? 'true' : 'false') . "<br>\n";
    }
}

echo "<br>";
echo "<strong>Resumen de validación de nombres:</strong><br>\n";
echo "Aceptadas: $aceptadas<br>\n";
echo "Rechazadas: $rechazadas<br>\n";
echo "Total evaluados: " . ($aceptadas + $rechazadas) . "<br>\n";

echo "<br>";

// ==========================================
// PRUEBAS DE VALIDACIÓN DE CANTIDAD
// ==========================================
echo "<h3>Pruebas de validarCantidad()</h3>";

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
        echo "Prueba de cantidad '$entrada' pasó.<br>\n";
    } else {
        $rechazadasCantidad++;
        echo "Prueba de cantidad '$entrada' falló. Resultado esperado: " . ($esperado ? 'true' : 'false') . ", resultado obtenido: " . ($resultado ? 'true' : 'false') . "<br>\n";
    }
}

echo "<br>";
echo "<strong>Resumen de validación de cantidades:</strong><br>\n";
echo "Aceptadas: $aceptadasCantidad<br>\n";
echo "Rechazadas: $rechazadasCantidad<br>\n";
echo "Total evaluados: " . ($aceptadasCantidad + $rechazadasCantidad) . "<br>\n";

echo "<br>";
$totalAceptadas = $aceptadas + $aceptadasCantidad;
$totalRechazadas = $rechazadas + $rechazadasCantidad;
$totalGeneral = $totalAceptadas + $totalRechazadas;

echo "<strong>Resumen Total de Pruebas:</strong><br>\n";
echo "Total aceptadas: $totalAceptadas<br>\n";
echo "Total rechazadas: $totalRechazadas<br>\n";
echo "Total general evaluados: $totalGeneral<br>\n";



