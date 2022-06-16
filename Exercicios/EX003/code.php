<?php

$num1 = $_GET['a'];
$num2 = $_GET['b'];

$res = $num1 + $num2;
echo "A soma de $num1 e $num2 é $res.";
$res = $num1 - $num2;
print "<br>A subtração de $num1 e $num2 é $res.";
$res = $num1 / $num2;
echo "<br>A divisão de $num1 e $num2 é $res.";
$res = $num1 * $num2;
print "<br>A multiplicação de $num1 e $num2 é $res.";
$res = $num1 % $num2;
echo "<br>O módulo de $num1 e $num2 é $res.";