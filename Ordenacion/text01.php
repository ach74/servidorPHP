<!DOCTYPE html>
<html>
<body>


	<?php

	/**
	 * Programa que ordena una array
	 *@author Achraf El Ouakili
	 * 
	 */ 

	/**
	 * Variables recofidas del form
	 * @var $opSelect1,$opSelect2,$valoresTeclado,$tamaño integer 
	 */
	$tamaño = $_POST["tamañoArray"];
	$valoresTeclado =  $_POST["valoresTeclado"];
	
	$opSelect1 = $_POST["select1"];
	$opSelect2 = $_POST["select2"];

	/**
	 * Inicio del programa
	 * @method void main
	 */
	
	main();


	/**
	 * Nos genera una array desordenada dependiendo del metodo  de ordenacion elegido
	 * @return array
	 */
	function tipoArray(){
		/**
		 * Datos de caracte groval, para poder ser usados en esta funcion
		 * @global $opSelect2,$valoresTeclado,$tamaño integer
		 * 
		 */

		global $opSelect2,$valoresTeclado,$tamaño;

		//Condicionales "if" para elegir el metodo que genera la array desordenada
		if ($opSelect2==1) {
			echo "<br> Aleatoria  <br>";
			$arrayAleatoria = array();
			for($i=0;$i<$tamaño-1;$i++){
				$arrayAleatoria[$i]= rand(0, 100);
			}
			return $arrayAleatoria;
		}elseif ($opSelect2==2) {
			echo " <br> Teclado <br>";
			$arrayTeclado = explode(",",$valoresTeclado);
			return $arrayTeclado;
		}else  {
			echo " <br> Por defecto <br> ";
			$arrayDefecto = array(95,8,-1,32,48,76,14,26,14);
			return $arrayDefecto;
		}
	}

	/**
	 * Metodo de ordenacion por burbuja
	 * @param type $array 
	 * @return type $array 
	 */
	function burbuja($array){

		// Se necesitan dos bucles for anindados con un  limite de las posiciones posibles de la array
		for($i=1;$i<count($array);$i++){
			for($j=0;$j<count($array)-$i;$j++){
				/**
				 * Condicion "if" donde intecambiamos posiciones 
				 * si el elemtento dentro de la array es superior 
				 * al siguiente elemnto de la array.
				 */
				if($array[$j]>$array[$j+1]){
					$a=$array[$j+1];
					$array[$j+1]=$array[$j];
					$array[$j]=$a;
				}
			}
		}
		return $array;
	}

	/**
	 * Metodo de ordenacion por selecion directa
	 * @param array $array 
	 * @return array $array 
	 */
	function selecion($array){

		/**
		 * Dos bucles "for" anidados para recorrer y ordenar la array, 
		 * donde el limite del primer bucle es la posicion de la array - 1
		 */ 
		for ($i=0; $i<(count($array)-1); $i++){

			/**
			 * Variable para almacenar el valor minimo actual
			 * @var $min integer
			 */ 

			$min=$i;

			/**
			 * Segundo bucle "for" donde el contador inicia con 
			 * el valor del segundo bucle mas 1, asi iremos rellenando
			 * el aregle de izquierda a derecha empezando por el valor 
			 * mas pequeño.
			 */ 
			for($j=$i+1; $j<count($array); $j++){
				/**
				 * Condicion "if" que iguala la variable $min con $j,
				 * en el caso de que el valor contenido en "$array[$j]"
				 * sea inferior a "$array[$min]"
				 */ 
				if($array[$min] > $array[$j]){
					$min=$j;
				}
			}

			/**
			 * Intercambio de posiciones de variables 
			 * donde el valor contenido en "$array[$min]"
			 * sera posicionado en el primer lugar del array
			 */ 
			$aux=$array[$min];
			$array[$min]=$array[$i];
			$array[$i]=$aux;
		}
		return $array;
	}

	/**
	 * Metodo de ordenacion por inserción directa
	 * @param type $array 
	 * @return type
	 */
	function directa($array){
		/**
		 * Bucle "for" con la condicion de recorrer
		 * todas la posiciones de la array, la variable 
		 * generada en bucle inicia en 1, de izquierda a derecha.
		 */ 
		for ($i=1; $i<(count($array)); $i++){

			// Variable auxiliar que almacena el valor de corresponditene a la array en al posicion "$i"
			$aux=$array[$i];
			// Variable para almacenar la posicion
			$pos = $i;

			/**
			* Condicion para seguir comprarnado simpre que el la posicion 
			* es mayor que 0,  y ademas de  que el numero a la izquierda 
			* es mayor al numero actual habra un  cambio de  posiciones.
			*/
			while (($i>0)&&($array[$i-1])>$aux){
				$posDerecha = $pos-1;
				$array[$pos] = $array[$posDerecha];
				//disminuimos la posicion para ir comprobando con el siguiente numero
				$pos--;
			}
			$array[$pos] = $aux;
		}
		return $array;
	}

	/**
	 * Metodo main donde inicia la ejecucion del programa
	 * @return void
	 */
	function main(){

		global $opSelect1;

		if ($opSelect1==1) {

			echo "<br><br> <h2>Burbuja </h2><br>";	

			$arrayDesordenada = tipoArray();

			echo "<hr> Array desordenada : <br> <br> ";

			print_r($arrayDesordenada);

			echo "<hr> Array ordenada : <br> <br>";

			$arrayOrdenada = burbuja($arrayDesordenada);

			print_r ($arrayOrdenada);

		}elseif ($opSelect1==2) {
			echo "<br><br> <h2>Inserción Directa </h2><br>";	

			$arrayDesordenada = tipoArray();

			echo "<hr> Array desordenada : <br> <br> ";

			print_r($arrayDesordenada);

			echo "<hr> Array ordenada : <br> <br>";

			$arrayOrdenada = directa($arrayDesordenada);

			print_r ($arrayOrdenada);
		}elseif ($opSelect1==3) {

			echo "<br><br> <h2>Selección directa </h2><br>";	

			$arrayDesordenada = tipoArray();

			echo "<hr> Array desordenada : <br> <br> ";

			print_r($arrayDesordenada);

			echo "<hr> Array ordenada : <br> <br>";

			$arrayOrdenada = selecion($arrayDesordenada);

			print_r ($arrayOrdenada);
		}
	}



	?>
</body>
</html>