<?php
	$nomArchivo = 'panini.json';
	$archivo = substr(file_get_contents($nomArchivo),0,-1);
	foreach($_GET as $clave => $valor)
		$archivo .= ",$valor";
	$archivo .= "]";
	file_put_contents($nomArchivo, $archivo);
	$salida = array('resultado'=>'exito');
	echo json_encode($salida);
?>