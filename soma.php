<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];


$soma = $num1 + $num2;
$sub = $num1 - $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;


echo "Soma: $soma <br>";
echo "Subtracao: $sub <br>";
echo "Multiplicacao: $mult <br>";
echo "Divisao: $div <br>";

