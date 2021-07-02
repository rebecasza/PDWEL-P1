<?php

function criarArray($x, $y)
{
    $array = new SplFixedArray($x);

    for ($i = 0; $i < $x; $i++) {
        $array[$i] = $y * $i;
    }
    return $array;
}

if (isset($_POST["submit"])) {
    $valor1 = $_POST['numb1'];
    $valor2 = $_POST['numb2'];

    $arr = criarArray($valor1, $valor2);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

}

?>