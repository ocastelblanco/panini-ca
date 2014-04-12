<?php
	$nomArchivo = 'panini.json';
	$archivo = substr(file_get_contents($nomArchivo),0);
	echo $_GET['callback'].'('.$archivo.')';
?>