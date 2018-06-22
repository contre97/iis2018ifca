<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
 
    $nombre_archivo = "./Uploading-files-to-Google-Drive-with-PHP-master/files/12371768402-03-B005-00000007.xml"; //variable con el nombre del archivo que vamos a crear
 
    /* 1.- Si el archivo existe mostramos en el navegador el contenido con
     * "file_get_contents" que nos devuelve lo que hay en el archivo
     * logs.txt.
     * 2.-forzamos con nl2br que los saltos de linea "\n" los muestre en HTML <br />
    */
    if(file_exists($nombre_archivo)) 
    {
		#echo  htmlentities(($nombre_archivo));
        echo  htmlentities(file_get_contents($nombre_archivo));
			
    }
    else
    {
        $mensaje = "El archivo no existe";
    }
 
 
 ?>
 
 
  <a href="./">Volver</a>