<?php

// ------------- CONDICIONALES --------

//      i.)  para ORDENAR cada uno de las variables de un array
//     ii.)  usamos el FOREACH (ARRAY, variable_interna)
//    iii.)  tipos:
/*
					>, <, <= ,>= , ==
					!= diferente
					!  negación
					&& AND
					or
					xor (SOLO será TRUE si una de las dos condiciones de se cumple. si se cumplen las dos, será FALSE)


*/


$usuarios = array(

	array('nombre' => 'Juan','edad' => 15 ,'telefono' => 668415512,'pais'=>'Camerun'),
 	array('nombre' => 'Laura','edad' => 45 ,'telefono' => 668412711,'pais'=>'Republica Dominicana'),
	array('nombre' => 'Robert','edad' => 31 ,'telefono' => 655412712,'pais'=>'Papue Nueva Guinea'),
	array('nombre' => 'Maite','edad' => 11 ,'telefono' => 668415512,'pais'=>'Fidji'),
 	array('nombre' => 'Luis','edad' => 5 ,'telefono' => 668412711,'pais'=>'Congo Belga'),
	array('nombre' => 'Berta','edad' => 33 ,'telefono' => 655412712,'pais'=>'Libia'),
	array('nombre' => 'Rosa','edad' => 33 ,'telefono' => 655412712,'pais'=>'Somalia')
);

$vocales = array('a','e','i','o','u','A','E','I','O','U');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- CONEXIONES PARA BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JQERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <style> 
    	h1 {font:oblique bold 100% cursive; color:#0BCC10}
     	h2 {font-family: sans-serif; font-size: 20px; color:#0F7EF5 }
     	.li {font-family: sans-serif; font-weight: bold ; color:#05123D}
     	.true {font-family: sans-serif; font-weight: bold ; color:#21CB06}
     	.false {font-family: sans-serif; font-weight: bold ; color:#DD1E07}
    </style>
 </head>
 <body>


<div class="col-xs-6">
  	<h2>Lista de Usuarios"</h2>
  		<ul>
			<?php
			foreach ($usuarios as $usuario) {
				echo '<li class="li">'.$usuario['nombre'].' ha nacido en [ '.$usuario['pais'].' ]</li>';
			}
			?>
		</ul>
 </div>


<div class="col-xs-6">
  	<h2>Quantas vocales tiene cada pais?</h2>
  		
  		<table class="table table-hover">
		  <tr>
		    <th>Pais</th>
		    <th>Número de Vocales</th>
		  </tr>
		  		 
			<?php

			foreach ($usuarios as $usuario) {
			echo '<tr>';
				// -- Separamos cada una de las letras de cada pais con f(X) = STR_SPLIT
				// -- Creamos de un STRING un ARRAY (cada letra es un valor del ARRAY)
				// -- Las escribimos una a una
				// -- Una vez escrito la palabra dejamos un espacio en blanco (la pintamos BLACK  <b></b>)

				$letras = str_split($usuario['pais']);

				$n = 0;              // --- contador para el nº vocales               
				$vocal_string ='';   // --- string vacio que llenaremos solo de vocales de cada pais
				

				echo '<td>';
				foreach ($letras as $letra) {
					echo $letra;

					// -- Cada PAIS es un ARRAY de sus letras
					// -- Analizamos cada letra del PAIS
					// -- Si es VOCAL:
					//                --> sumamos +1 al contador ($n) 
					//                --> añadimos la vocal a una variable ($vocal_string, para mostralas todas juntas al final)
					
					if( in_array($letra,$vocales) ){
						$n += 1;
						$vocal_string .= $letra.' / ';
					}
				}
				echo '<td> tiene '.$n.' vocales, '.'[ '.$vocal_string.' ]</br></td>';
				echo '</tr>'; 
			}
			?>
		</tr>
		</table>
 </div>


 




 </body>
</html>


 