<?php
function encontrarNumerosPerfectos($start, $end) {
    $perfectNumber = [];

    for ($num = $start; $num <= $end; $num++) {
        $sumaDivisores = 0;
        for ($divisor = 1; $divisor < $num; $divisor++) {
            if ($num % $divisor == 0) {
                $sumaDivisores += $divisor;
            }
        }

        if ($sumaDivisores == $num) {
            $perfectNumber[] = $num;
        }
    }

    return $perfectNumber;
}
//prueba
$start = 1;
$end = 1000;
$numerosPerfectosEnRango = encontrarNumerosPerfectos($start, $end);
echo "Los números perfectos desde $start hasta $end son: " . implode(", ", $numerosPerfectosEnRango);
?>
