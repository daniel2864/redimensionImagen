
<?php
/*
	El directorio img debe existir para poder copiar el archivo a ese lugar
*/
$nombreCreado = "imagen_creada.jpg";
$nombreNuevo = "imagen_Nuevo.jpg";
$ruta_origen = "".$nombreCreado;
$ruta_destino = "img/".$nombreNuevo;
$original = imagecreatefromjpeg("http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg");
$ancho = imagesx($original);
$alto = imagesy($original);
//dimensiones proporsionales
$anchoNuevo = 150;
$altoNuevo = ($anchoNuevo * $alto) / $ancho;
$thumb = imagecreatetruecolor($anchoNuevo,$altoNuevo);
imagecopyresampled($thumb,$original,0,0,0,0,$anchoNuevo,$altoNuevo,$ancho,$alto);
imagejpeg($thumb,$nombreCreado,90);
if(file_exists($ruta_origen)){
	if(copy($ruta_origen, $ruta_destino)) {
		unlink($ruta_origen);
	}

}
