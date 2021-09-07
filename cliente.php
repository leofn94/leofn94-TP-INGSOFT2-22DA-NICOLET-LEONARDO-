<?php
require_once 'numeros.php';
$numero = $_POST['numero'];


$numero = new numero($numero);
$parametros = $numero->numeroValido() ?
    $numero->parOimpar() . " y " . $numero->numeroGrande() :
    "no es un numero valido.";
echo "El numero ingresado " . $parametros;
