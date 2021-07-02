<?php


function calcularmmc($x, $y)
{
    return (($x * $y) / (calcularmdc($x, $y)));
}

function calcularmdc($v1, $v2)
{
    $x = max($v1, $v2);
    $y = min($v1, $v2);

    if ($x % $y == 0) {
        return $y;
    } else {
        return calcularmdc($y, ($x % $y));
    }
}

$valor1 = $_GET['numb1'];
$valor2 = $_GET['numb2'];
$resultadomdc = calcularmdc($valor1, $valor2);
$resultadommc = calcularmmc($valor1, $valor2);

echo "O resultado da operação para o  mdc foi de $resultadomdc e para o mmc de $resultadommc";

?>