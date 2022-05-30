<?php
/**
* @autor César Moreno Vargas
* @version 1.0
*/

$uno=10;
$dos=5;
$tres=2;

//Mostramos una resta
echo "La resta de $uno y $dos da como resultado ".restar($uno,$dos);

//Mostramos una suma
echo "<br>La suma de $uno y $tres da como resultado ".sumar($uno,$tres);


/**
* Método que resta dos números
*
* @param int $uno primer número que recibe el método restar
* @param int $dos segundo número que recibe el método restar
* @return int resultado que devuelve
*/

function restar($uno,$dos){
	return $uno-$dos;
}

/**
* Método que suma dos números
*
* @param int $uno primer número que recibe el método sumar
* @param int $tres segundo número que recibe el método sumar
* @return int resultado que devuelve
*/
function sumar($uno,$tres){
	return $uno+$tres;
}
?>
