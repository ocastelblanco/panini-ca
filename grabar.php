<?php
	$nomArchivo = 'panini.json';
	if (isset($_GET['p0'])) {
		$archivo = substr(file_get_contents($nomArchivo),0,-1);
		foreach($_GET as $clave => $valor) {
			if ($clave != 'callback' && $clave != '_')
				$archivo .= ",$valor";
		}
		$archivo .= "]";
		file_put_contents($nomArchivo, $archivo);
		$salida = array('resultado'=>'exito');
	} else {
		$salida = array('resultado'=>'error');
	}
	echo $_GET['callback'].'('.json_encode($salida).')';
?>